const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
         "./resources/**/*.js",
         "./resources/**/*.vue",
    ],

    theme: {
      extend: {
        colors: {
          primary:'#7CA4AE'
        }
      },
        fontFamily: {
        'ubuntu': ['Ubuntu', 'sans'],
      }, 
       screens: {
        'hp': '360',
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
      },

    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};