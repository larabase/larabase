import forms from "@tailwindcss/forms";
import colors from "tailwindcss/colors";

export default {
  content: ["./resources/views/**/*.blade.php", "./resources/js/**/*.vue"],
  corePlugins: {
    preflight: false,
    container: false,
  },
  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter", "sans-serif"],
      },
    },
    colors: {
      gray: colors.gray,
      slate: colors.slate,
      neutral: colors.neutral,
      red: colors.red,
      yellow: colors.yellow,
      orange: colors.orange,
      green: colors.green,
      transparent: "transparent",
      current: "currentColor",
      white: "#ffffff",
      black: "#000000",
      violet: {
        DEFAULT: "#624bff",
        light: "#9c9fff",
        dark: "#382689",
        "50": "#eceeff",
        "100": "#dde0ff",
        "200": "#c2c6ff",
        "300": "#9c9fff",
        "400": "#7d75ff",
        "500": "#624bff",
        "600": "#5d36f5",
        "700": "#512ad8",
        "800": "#4125ae",
        "900": "#382689",
        "950": "#231650",
      },
    },
  },
  plugins: [forms],
};
