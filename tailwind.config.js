/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./template-parts/**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: "#254B9A",
        secondary: "#DF6737",
        lightgray: "#F2F3F7",
      },
      fontFamily: {
        sans: ["Neue Montreal", "sans-serif"],
        serif: ["OGG Roman", "serif"],
      },
    },
  },
  plugins: [],
};
