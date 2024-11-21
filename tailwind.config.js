/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php"],
  theme: {
    extend: {
      colors: {
        primary: "#254B9A",
        secondary: "#DF6737",
      },
      fontFamily: {
        sans: ["Neue Montreal", "sans-serif"],
        serif: ["Canela", "serif"],
      },
    },
  },
  plugins: [],
};
