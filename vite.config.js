import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig(({ command }) => {
    return {
        plugins: [],
        build: {
            outDir: command === 'build' ? 'dist' : 'public/build',
        },
    };
});
