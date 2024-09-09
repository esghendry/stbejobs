import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './app/Filament/**/*.php',
    './resources/views/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
  ],
  theme: {
    extend: {
        colors: {
            "staffing-red": "#bc1313",
            "staffing-dark-gray": "#3d3d3d",
        },
        fontFamily: {
            sans: ["Open Sans", ...defaultTheme.fontFamily.sans],
            amiri: ["Amiri", ...defaultTheme.fontFamily.sans],
            roboto: ["Roboto", ...defaultTheme.fontFamily.sans],
        },
    },
},
  plugins: [],
}

