module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {
      cursor: ["hover", "focus"],
      textColor: ["active"],
      backgroundColor: ["active"],
      fill: ["hover", "active", "group-hover"],
    },
  },
  plugins: [],
};
