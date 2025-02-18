/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/*.{html,js,php}"],
  theme: {
    extend: {
      container: {
        screens: {
          'xl': '1400px',
          'lg': '992px',
          'md': '768px',
          'sm': '576px',
        },
      },
      backgroundSize: {
        'auto': 'auto',
        'cover': 'cover',
        'contain': 'contain',
        '0': '0px',
      },
      fontSize: {    
         '7xl': '4.625rem',
         '6xl': '3.125rem',
         '5xl': '3.125rem',
         '17': '1.063rem',
      },
    },
  },
}