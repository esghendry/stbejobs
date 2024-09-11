import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './app/Filament/**/*.php',
    './resources/views/**/*.blade.php',
    './vendor/filament/**/*.blade.php',

    './vendor/wire-elements/modal/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],
  safelist: [
    {
      pattern: /max-w-(sm|md|lg|xl|2xl|3xl|4xl|5xl|6xl|7xl)/,
      variants: ['sm', 'md', 'lg', 'xl', '2xl']
    }
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
  plugins: [
  ],
}

