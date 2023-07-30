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


                // Website styles
                    // Header style
                    "resources/css/headers/header.css",
                    "resources/css/headers/header2.css",
                    
                    // Footer style
                    "resources/css/footers/style.css",

                    // Agence style
                    "resources/css/agence/style.css",

                    // Contact style
                    "resources/css/contact/style.css",
                    "resources/css/contact/cta.css",

                    // Service style
                    "resources/css/service/style.css",

                    // Portfolio style
                    "resources/css/portfolio/style.css",

                    // reference style
                    "resources/css/reference/style.css",

                    // 360 style
                    "resources/css/360/style.css",
   
       


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
