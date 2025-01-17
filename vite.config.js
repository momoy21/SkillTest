import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

export default defineConfig(({ command }) => {
    return {
        build: {
            outDir: 'dist',
        },
        server: {
            hmr: command !== 'build',
        },
    };
});
