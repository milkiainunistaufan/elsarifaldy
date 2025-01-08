import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                ral: 'Raleway',
                pd: 'Playfair Display'
            },
            colors: {
                sage: '#9CAD84',
                beige: '#F5F5DC',
                offWhite: '#F8F8F8'
              },
        },
    },
    plugins: [],
};
