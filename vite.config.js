import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // //TAILWIND
                "resources/css/app.css",
                // "resources/css/empty.css",
                "resources/js/app.js",
                // PLANTILLA
                // CSS
                "resources/assets/vendor/perfect-scrollbar.css",
                "resources/assets/css/app.css",
                "resources/assets/css/vendor-material-icons.css",
                "resources/assets/css/vendor-fontawesome-free.css",
                "resources/assets/css/vendor-flatpickr.css",
                "resources/assets/css/vendor-flatpickr-airbnb.css",
                "resources/assets/vendor/jqvmap/jqvmap.min.css",
                "resources/assets/vendor/toastr.min.css",
                // // JS
                // "resources/assets/vendor/jquery.min.js",
                // "resources/assets/vendor/popper.min.js",
                // "resources/assets/vendor/bootstrap.min.js",
                // "resources/assets/vendor/perfect-scrollbar.min.js",
                // "resources/assets/vendor/dom-factory.js",
                // "resources/assets/vendor/material-design-kit.js",
                // "resources/assets/js/toggle-check-all.js",
                // "resources/assets/js/check-selected-row.js",
                // "resources/assets/js/dropdown.js",
                // "resources/assets/js/sidebar-mini.js",
                // "resources/assets/js/app.js",
                // "resources/assets/js/app-settings.js",
                // "resources/assets/vendor/toastr.min.js",
                // "resources/assets/js/toastr.js",
                // "resources/assets/vendor/flatpickr/flatpickr.min.js",
                // "resources/assets/js/flatpickr.js",
                // "resources/assets/js/settings.js",
                // "resources/assets/vendor/moment.min.js",
                // "resources/assets/vendor/moment-range.js",
                // "resources/assets/vendor/jqvmap/jquery.vmap.min.js",
                // "resources/assets/vendor/jqvmap/maps/jquery.vmap.world.js",
                // "resources/assets/js/vector-maps.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": "/resources/js",
        },
    },
    // build: {
    //     format: "es",
    // },
});
