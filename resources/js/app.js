import "./bootstrap";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";

// import "vuetify/styles";
import { md3 } from "vuetify/blueprints";
import { createVuetify } from "vuetify";
import "vuetify/dist/vuetify.min.css";
createInertiaApp({
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        const vuetify = createVuetify({
            // blueprint: md3,
            // theme: {
            //     defaultTheme: "dark",
            // },
        });

        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(vuetify)
            .mount(el);
    },
});
