/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      textAlign: {
        'justify': 'justify',
      }
    }
  },
  plugins: [],
}
