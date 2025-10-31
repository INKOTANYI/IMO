import React from 'react'
import { createRoot } from 'react-dom/client'
import App from './App.jsx'

const el = document.getElementById('react-root')
if (el) {
  const root = createRoot(el)
  root.render(
    <React.StrictMode>
      <App />
    </React.StrictMode>
  )
}
