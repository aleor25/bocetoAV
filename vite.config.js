import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',

                'resources/css/views/pages/landing.css',
                'resources/css/views/pages/login.css',
                'resources/css/views/shared/navbar.css',
                'resources/css/views/pages/periodic-table.css',
                'resources/css/views/pages/render-online.css',

                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/pages/login.js',
                'resources/js/shared/navbar.js',
                'resources/js/pages/periodic-table.js',
                'resources/js/pages/render-online.js',
                'resources/js/shared/scrollToTop.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
