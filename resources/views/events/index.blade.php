@extends('layouts.app')

@section('title', 'Manage Events')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <style>
        .btn-add {
            background-color: #FFC107;
            color: #0052A5;
            border-radius: 5px;
        }
        .btn-add:hover {
            background-color: #0052A5;
            color: #FFFFFF;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: #0052A5 !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: #FFC107 !important;
            color: #0052A5 !important;
        }
    </style>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Events List</h3>
            <div class="card-tools">
                <a href="{{ route('events.create') }}" class="btn btn-add">Add New Event</a>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <table id="eventsTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            try {
                $('#eventsTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: '{{ route('events.data') }}',
                        error: function (xhr, error, thrown) {
                            console.error('DataTables error:', xhr.responseText, error, thrown);
                            alert('Failed to load events. Open developer tools (F12) and check the Console tab.');
                        }
                    },
                    columns: [
                        { data: 'title', name: 'title', defaultContent: '' },
                        { data: 'location', name: 'location', defaultContent: '' },
                        { 
                            data: 'date_time', 
                            name: 'date_time',
                            render: function (data) { 
                                return data ? new Date(data).toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' }) : ''; 
                            }
                        },
                        { 
                            data: 'date_time', 
                            name: 'date_time',
                            render: function (data) { 
                                return data ? new Date(data).toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' }) : ''; 
                            }
                        },
                        { 
                            data: 'description', 
                            name: 'description',
                            render: function (data) { 
                                return data && data.length > 50 ? data.substring(0, 50) + '...' : (data || ''); 
                            }
                        },
                        { 
                            data: 'image', 
                            name: 'image',
                            render: function (data) { 
                                return data ? '<img src="/storage/' + data + '" alt="Event Image" style="width: 50px; height: auto;">' : 'No Image'; 
                            }
                        },
                        {
                            data: 'id',
                            name: 'id',
                            orderable: false,
                            searchable: false,
                            render: function (data) {
                                if (!data) {
                                    console.error('Event ID is missing for action column');
                                    return 'No Actions';
                                }
                                const editUrl = `{{ route('events.edit', ['id' => ':id']) }}`.replace(':id', data);
                                const deleteUrl = `{{ route('events.destroy', ['id' => ':id']) }}`.replace(':id', data);
                                return `
                                    <a href="${editUrl}" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                                    <form action="${deleteUrl}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                    </form>
                                `;
                            }
                        }
                    ]
                });
            } catch (error) {
                console.error('DataTables initialization failed:', error);
                alert('Error loading events table. Check developer tools (F12) Console tab.');
            }
        });
    </script>
@endsection
