import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import Components from "unplugin-vue-components/vite";
import { BootstrapVue3Resolver } from "unplugin-vue-components/resolvers";
export default defineConfig({
    plugins: [
        vue(),
        Components({
            resolvers: [BootstrapVue3Resolver()],
        }),
        laravel({
            input: ["resources/sass/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
