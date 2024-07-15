/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php"
  ],
  theme: {
    extend: {
        colors: {
            "jobname": "rgb(255,41,3)"
        }
    },
  },
  plugins: [],
}

