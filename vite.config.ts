import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
  plugins: [
    vue(),
    laravel({
      input: ["resources/css/app.scss", "resources/js/app.ts"],
      refresh: true,
    }),
  ],
  resolve: {
    alias: {
      "ziggy-js": path.resolve("vendor/tightenco/ziggy"),
    },
  },
});
