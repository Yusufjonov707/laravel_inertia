import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import Navigation from './Pages/navigation.vue';

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
    return pages[`./Pages/${name}.vue`];
  },
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) });
    app.use(plugin);

    // Register the Navigation component globally
    app.component('Navigation', Navigation);

    app.mount(el);
  },
});
