import { createApp, h } from "vue";
import { createPinia } from "pinia";
import { createInertiaApp } from "@inertiajs/vue3";
import { createPersistedStatePlugin } from "pinia-plugin-persistedstate-2";
import { ZiggyVue } from "ziggy-js";
import { Ziggy } from "@/ziggy";

import "./bootstrap";

import "../css/app.scss";

const appName = window.document.getElementsByTagName("title")[0]?.innerText;

const pinia = createPinia();
const installPersistedStatePlugin = createPersistedStatePlugin();
pinia.use((context) => installPersistedStatePlugin(context));

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  progress: {
    color: "#624BFF",
  },
  resolve: (name) => {
    const pages = import.meta.glob("./pages/**/*.vue", { eager: true });
    return pages[`./pages/${name}.vue`] as any;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(pinia)
      .use(ZiggyVue, Ziggy as any)
      .mount(el);
  },
});
