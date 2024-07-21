import { createApp, h, DefineComponent } from "vue";
import { createPinia } from "pinia";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createPersistedStatePlugin } from "pinia-plugin-persistedstate-2";
import { defineCustomElements } from "@ionic/pwa-elements/loader";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";

import "./bootstrap";

import "../css/app.scss";

const appName = window.document.getElementsByTagName("title")[0]?.innerText;

defineCustomElements(window);

const pinia = createPinia();
const installPersistedStatePlugin = createPersistedStatePlugin();
pinia.use((context) => installPersistedStatePlugin(context));

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) => resolvePageComponent(`./pages/${name}.vue`, import.meta.glob<DefineComponent>("./pages/**/*.vue")),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .mount(el);
  },
  progress: {
    color: "#624BFF",
  },
});
