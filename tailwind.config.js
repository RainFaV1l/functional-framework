/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './resources/views/**/*.php',
      './resources/views/*.php',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

// Запуск tailwind
// npx tailwindcss -i ./resources/css/app.css -o ./public/assets/css/style.css --watch
