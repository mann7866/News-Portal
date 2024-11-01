import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'xs': '480px', // untuk perangkat kecil seperti HP
                'sm': '640px', // untuk tablet kecil
                'md': '768px', // untuk tablet dan layar kecil
                'lg': '1024px', // untuk laptop dan tablet besar
                'xl': '1280px', // untuk layar desktop
                '2xl': '1536px', // untuk layar desktop besar
            },
        },
    },

    plugins: [forms],
};
