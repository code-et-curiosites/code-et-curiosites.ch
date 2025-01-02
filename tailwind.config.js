/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
        backgroundImage: {
            'green-yellow': "url('/img/green-yellow.jpg')",
            'blue': "url('/img/blue.jpg')",
        }
    },
  },
  plugins: [],
}
