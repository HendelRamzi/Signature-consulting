import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from "path"
export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                'resources/js/app.js',



                // AdminLTE assets files
                "resources/css/admin/adminlte.css",
                "resources/js/admin/adminlte.js",


            ],
            refresh: true,
        }),
        
    ],

    resolve: {
        alias: {
          '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
      },
});
