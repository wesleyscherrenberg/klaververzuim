import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import * as path from "node:path";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        })
    ],
    resolve: {
        alias: {
            '@fonts': path.resolve('public/fonts')
        },
    }
});
