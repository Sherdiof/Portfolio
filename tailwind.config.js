/** @type {import('tailwindcss').Config} */
export default {
  content:
      [
          "./resources/**/*.blade.php",
          "./resources/**/*.js",
          "./resources/**/*.vue",
          './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
          "./node_modules/tw-elements/dist/js/**/*.js",
      ],
  theme: {
    extend: {
        colors: {
            'pink-red': '#E8A0BF',
            'beige-red' : '#F1F0E8',
        },
        darkMode: "class",
    },
  },
  plugins: [require("tw-elements/dist/plugin.cjs")]
}

