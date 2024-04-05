/** @type {import('tailwindcss').Config} */
export default {
    content: [    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",],
    theme: {
      fontFamily:{
        'aab':['Nunito Sans', 'sans-serif'],
      },
      extend: {
        height:{
          '128': '750px',
          '800':'800px',
          '850':'929px'
        },
        width:{
          '475':'475px',
          '370':'370px',
          '420':'420px',
          '1600':'1662px'

        },
        margin: {
            '-80px': '-80px',
          }
      },
    },
    plugins: [],
  }

