import { HashRouter, Routes, Route, Link } from 'react-router-dom';

function Home() {
  return (
    <div className="p-4">
      <h2 className="text-2xl font-bold text-slate-800">Welcome to the React area</h2>
      <p className="text-slate-600 mt-2">This section navigates without full page reloads.</p>
    </div>
  );
}

function About() {
  return (
    <div className="p-4">
      <h2 className="text-2xl font-bold text-slate-800">About</h2>
      <p className="text-slate-600 mt-2">Client-side route rendered by React Router.</p>
    </div>
  );
}

export default function App() {
  return (
    <HashRouter>
      <div className="border rounded-md border-slate-200 bg-white">
        <nav className="flex gap-3 p-3 border-b border-slate-200">
          <Link className="text-blue-600 hover:underline" to="/">Home</Link>
          <Link className="text-blue-600 hover:underline" to="/about">About</Link>
        </nav>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/about" element={<About />} />
        </Routes>
      </div>
    </HashRouter>
  );
}
