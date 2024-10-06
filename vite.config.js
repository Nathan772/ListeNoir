import { defineConfig } from 'vite';

import laravel from 'laravel-vite-plugin';


// Put any other imports below so that CSS from your
// components takes precedence over default styles.

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/index.css', 'resources/js/index.jsx'],
            refresh: true,
        }),
    ],
});
