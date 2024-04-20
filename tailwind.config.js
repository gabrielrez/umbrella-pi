/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        cBase: '#7712A1',
        cBase2: '#330047',
        cBase3: '#B6ED1F',
        cBlack: '#111111',
      },
      fontFamily:{
        'roboto': ['Roboto', 'sans-serif'],
        'poppins': ['Poppins', 'sans-serif'],
      },
      keyframes:{
        accordion:{
          '0%':{transform: 'translate3d(0, -10px, 0)', opacity: '0'},
          '100%':{transform: 'translate3d(0, 0, 0)', opacity: '1'},
        },
      },
      animation: {
        'accordion': 'accordion 0.25s linear',
      },
    },
  },
  plugins: [],
}

