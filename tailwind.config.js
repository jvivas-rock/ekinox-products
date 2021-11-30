const colors = require('tailwindcss/colors');

module.exports = {
  purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        naranja: {
          DEFAULT: '#e96b00',
        },
        verde: {
          DEFAULT: '#077342',
        },
        hoja: {
          DEFAULT: '#7cb423',
        },
        hojita: {
          DEFAULT: '#98c775',
        },
      },
	  spacing: {
         '72': '18rem',
         '84': '21rem',
         '96': '24rem',
		 '100': '25rem',
		 '104': '26rem',
		 '108': '27rem',
		 '112': '28rem',
		 '116': '29rem',
		 '120': '30rem',
		 '124': '31rem',
		 '128': '32rem',
		 '132': '33rem',
		 '136': '34rem',
		 '140': '35rem',
		 '144': '36rem',
		 '148': '37rem',
		 '152': '38rem',
		 '156': '39rem',
		 '160': '40rem',
		 '164': '41rem',
		 '168': '42rem',
		 '172': '43rem',
		 '176': '44rem',
		 '180': '45rem',
		 '184': '46rem',
		 '198': '47rem',
		 '192': '48rem',
		 '196': '49rem',
		 '200': '50rem'
       }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
