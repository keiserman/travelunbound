/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./template-parts/**/*.php", "./includes/*.php"],
  theme: {
    extend: {
      colors: {
        primary: "#254b9a",
        secondary: "#DF6737",
        lightgray: "#F2F3F7",
      },
      fontFamily: {
        sans: ["Neue Montreal", "sans-serif"],
        serif: ["OGG Roman", "serif"],
      },
      maxWidth: {
        "screen-2xl": "90rem",
      },
      fontSize: {
        "5xl": "2.5rem",
      },
    },
  },
  plugins: [],
};
