import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //TAILWIND
                "resources/css/app.css",
                "resources/js/app.js",

                //PLANTILLA
                "resources/assets/vendor/perfect-scrollbar.css",
                "resources/assets/css/app.css",
                "resources/assets/css/vendor-material-icons.css",
                "resources/assets/css/vendor-fontawesome-free.css",
                "resources/assets/vendor/jquery.min.js",
                "resources/assets/vendor/popper.min.js",
                "resources/assets/vendor/bootstrap.min.js",
                "resources/assets/vendor/perfect-scrollbar.min.js",
                "resources/assets/vendor/dom-factory.js",
                "resources/assets/vendor/material-design-kit.js",
                "resources/assets/js/toggle-check-all.js",
                "resources/assets/js/check-selected-row.js",
                "resources/assets/js/dropdown.js",
                "resources/assets/js/sidebar-mini.js",
                "resources/assets/js/app.js",
                "resources/assets/js/app-settings.js",
                //
                // "resources/assets/vendor/list.min.js",
                // "resources/assets/js/list.js",
                // "resources/assets/js/flatpickr.js",
                // "resources/assets/vendor/jquery.mask.min.js",
                // "resources/assets/vendor/quill.min.js",
                // "resources/assets/js/quill.js",
                // "resources/assets/vendor/dropzone.min.js",
                // "resources/assets/js/dropzone.js",
                // "resources/assets/vendor/select2/select2.min.js",
                // "resources/assets/js/select2.js",
                // "resources/assets/vendor/moment.min.js",
                // "resources/assets/vendor/fullcalendar/fullcalendar.min.js",
                // "resources/assets/js/fullcalendar.js",
                // "resources/assets/vendor/jquery-ui.min.js",
            ],
            refresh: true,
        }),
    ],
});
