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
                sage: '#0B3D2E',
                beige: '#1C1C1C',
                offWhite: '#F5F2D0',
                deepRed: '#8B0000',
                ivory: '#F8F4E3',
                bca: '#0070C0'
              },
        },
    },
    plugins: [],
};
