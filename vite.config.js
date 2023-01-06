import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/front/form.js',
                'resources/js/front/common.js',
                'resources/js/front/editor-create.js'
            ],
            refresh: true,
        }),
    ],
});
