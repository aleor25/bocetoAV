import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',

                'resources/css/views/landing.css',
                'resources/css/views/login.css',
                'resources/css/views/navbar.css',
                'resources/css/views/periodic-table.css',
                'resources/css/views/render-online.css',

                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/login.js',
                'resources/js/navbar.js',
                'resources/js/periodic-table.js',
                'resources/js/render-online.js',
                'resources/js/scrollToTop.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
