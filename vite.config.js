import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.js',
                'resources/js/scrollToTop.js',
                'resources/js/navbar.js',
                'resources/js/login.js',
                'resources/js/periodic-table.js',

                'resources/css/views/landing.css',
                'resources/css/views/navbar.css',
                'resources/css/views/periodic-table.css',

            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
