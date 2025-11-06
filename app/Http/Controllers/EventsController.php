<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EventsController extends Controller
{
    public function adminIndex()
    {
        try {
            return view('events.index');
        } catch (\Exception $e) {
            \Log::error('Error in adminIndex: ' . $e->getMessage());
            return redirect()->route('dashboard')->with('error', 'Failed to load events. Please try again.');
        }
    }

    public function publicIndex()
    {
        try {
            $events = Event::all();
            return view('public.events.index', compact('events'));
        } catch (\Exception $e) {
            \Log::error('Error in publicIndex: ' . $e->getMessage());
            return redirect()->route('home')->with('error', 'Failed to load events. Please try again.');
        }
    }

    public function publicShow(string $id)
    {
        try {
            $event = Event::with('images')->findOrFail($id);
            return view('public.events.show', compact('event'));
        } catch (\Exception $e) {
            \Log::error('Error in publicShow: ' . $e->getMessage());
            return redirect()->route('public.events.index')->with('error', 'Event not found.');
        }
    }

    public function data()
    {
        try {
            return DataTables::of(Event::query())
                ->addColumn('description', function ($event) {
                    return strlen($event->description) > 50 ? substr($event->description, 0, 50) . '...' : $event->description;
                })
                ->addColumn('image', function ($event) {
                    return $event->image ? '/storage/' . $event->image : 'No Image';
                })
                ->addColumn('action', function ($event) {
                    return '
                        <a href="' . route('events.edit', $event->id) . '" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                        <form action="' . route('events.destroy', $event->id) . '" method="POST" style="display:inline;" onsubmit="return confirm(\'Are you sure you want to delete this event?\');">
                            ' . csrf_field() . '
                            ' . method_field('DELETE') . '
                            <button type="submit" class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                        </form>';
                })
                ->editColumn('date_time', function ($event) {
                    return [
                        'date' => $event->date_time ? $event->date_time->format('d M Y') : '',
                        'time' => $event->date_time ? $event->date_time->format('h:i A') : ''
                    ];
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        } catch (\Exception $e) {
            \Log::error('Error in data: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to load events data'], 500);
        }
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'date_time' => 'required|date',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'images.*' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:8192',
            ]);

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('events', 'public');
                $validated['image'] = $imagePath;
            }

            $event = Event::create($validated);

            // Handle multiple gallery images
            if ($request->hasFile('images')) {
                $pos = 0;
                foreach ($request->file('images') as $img) {
                    if (!$img) continue;
                    $path = $img->store('events/gallery', 'public');
                    $event->images()->create([
                        'image_path' => $path,
                        'position' => $pos++,
                    ]);
                }
            }

            return redirect()->route('events.index')->with('success', 'Event created successfully.');
        } catch (\Exception $e) {
            \Log::error('Error in store: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create event. Please try again.');
        }
    }

    public function show(string $id)
    {
        try {
            $event = Event::findOrFail($id);
            return view('events.show', compact('event'));
        } catch (\Exception $e) {
            \Log::error('Error in show: ' . $e->getMessage());
            return redirect()->route('public.events.index')->with('error', 'Event not found.');
        }
    }

    public function edit(string $id)
    {
        try {
            $event = Event::findOrFail($id);
            return view('events.edit', compact('event'));
        } catch (\Exception $e) {
            \Log::error('Error in edit: ' . $e->getMessage());
            return redirect()->route('events.index')->with('error', 'Event not found.');
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $event = Event::findOrFail($id);

            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'date_time' => 'required|date',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'images.*' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:8192',
            ]);

            if ($request->hasFile('image')) {
                if ($event->image) {
                    \Storage::disk('public')->delete($event->image);
                }
                $imagePath = $request->file('image')->store('events', 'public');
                $validated['image'] = $imagePath;
            }

            $event->update($validated);

            // Append any newly uploaded gallery images
            if ($request->hasFile('images')) {
                $posStart = (int) ($event->images()->max('position') ?? 0);
                $pos = $posStart;
                foreach ($request->file('images') as $img) {
                    if (!$img) continue;
                    $path = $img->store('events/gallery', 'public');
                    $event->images()->create([
                        'image_path' => $path,
                        'position' => ++$pos,
                    ]);
                }
            }

            return redirect()->route('events.index')->with('success', 'Event updated successfully.');
        } catch (\Exception $e) {
            \Log::error('Error in update: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update event. Please try again.');
        }
    }

    public function destroy(string $id)
    {
        try {
            $event = Event::findOrFail($id);

            if ($event->image) {
                \Storage::disk('public')->delete($event->image);
            }

            $event->delete();

            return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
        } catch (\Exception $e) {
            \Log::error('Error in destroy: ' . $e->getMessage());
            return redirect()->route('events.index')->with('error', 'Failed to delete event. Please try again.');
        }
    }
}
