import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            
            colors: {
                'apaza-blue': 'rgba(12, 80, 180, 255)',
                'apaza-border': 'rgba(32,58,160,255)',
            },
            fontSize: {
                'logo': '3rem',
            },
        },
    },

    plugins: [forms, require('flowbite/plugin')],
};