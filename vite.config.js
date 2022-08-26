import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import livewire from '@defstudio/vite-livewire-plugin';

let inputs = [];

if (process.env.TAILWIND_CONFIG) {
    inputs = [
        'resources/js/clockwork.js',
        'resources/css/admin/admin.css'
    ];
} else {
    inputs = [
        'resources/js/app/app.js',
        'resources/css/app/app.css'
    ];
}
export default defineConfig({
    server: {
        hmr: {
            host: 'localhost'
        }
    },
    plugins: [
        laravel({
            input: inputs,
            refresh: false,
        }),
        livewire({
            refresh: ['resources/css/admin/admin.css', 'resources/css/app/app.css', 'resources/js/app/app.js']
        })
    ],
    css: {
        postcss: {
            plugins: [
                require("tailwindcss/nesting"),
                require("tailwindcss")({
                    config: process.env?.TAILWIND_CONFIG
                        ? "./tailwind-admin.config.js"
                        : "./tailwind.config.js",
                }),
                require("autoprefixer"),
            ],
        },
    },
    build: {
        outDir: process.env?.TAILWIND_CONFIG
            ? `./public/build/filament`
            : "./public/build/frontend",
    },
});
