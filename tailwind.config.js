module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    backgroundColor: (theme) => ({
      ...theme('colors'),
      primary: '#F9881E',
      secondary: '#ffed4a',
      danger: '#e3342f',
      biru: '#16A7DA',
      oren: '#F9881E',
      brokenblack: '#174C54',
      birudua: '#49B6FF',
    }),
    textColor: (theme) => theme('colors'),
    textColor: {
      primary: '#F9881E',
      secondary: '#ffed4a',
      danger: '#e3342f',
      biru: '#16A7DA',
      oren: '#F9881E',
      brokenblack: '#174C54',
      birudua: '#49B6FF',
    },
    fontSize: {
      '5%': '5%',
      '3%': '3%',
      '7%': '7%',
      '50%': '50%',
      '110%': '110%',
    },

    extend: {
      width: {
        '13%': '13%',
        '10%': '10%',
        '75%': '75%',
        '68%': '68%',
        '65%': '65%',
      },
      height: {
        '90%': '90%',
        '10%': '10%',
        '5%': '5%',
      },
    },
  },

  variants: {
    extend: {},
  },
  plugins: [],
}
