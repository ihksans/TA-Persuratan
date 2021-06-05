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
      abu: '#929292',
    },

    extend: {
      fontSize: {
        '5%': '5%',
        '3%': '3%',
        '7%': '7%',
        '50%': '50%',
        '110%': '110%',
        '200%': '200%',
      },
    },

    extend: {
      width: {
        '93%': '94%',
        '40%': '40%',
        '20%': '20%',
        '13%': '13%',
        '10%': '10%',
        '75%': '75%',
        '68%': '68%',
        '65%': '65%',
        '6%': '4%',
        '7%': '7%',
      },
      height: {
        '90%': '90%',
        '20%': '25%',
        '10%': '15%',
        '5%': '5%',
      },
    },
  },

  variants: {
    extend: {},
  },
  plugins: [],
}
