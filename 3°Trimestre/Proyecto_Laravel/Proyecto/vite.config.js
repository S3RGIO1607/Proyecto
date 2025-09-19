import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/iniciosesion.css',
                'resources/css/inicioestilos.css',
                'resources/css/nosotros.css',
                'resources/css/paquetes.css',
                'resources/css/estilos.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});