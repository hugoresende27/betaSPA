import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from './Layouts/MainLayout.vue';
import {ZiggyVue} from './ziggy';
import '../css/app.css';

createInertiaApp({
  resolve: async (name) => {
    const pages = import.meta.glob('./Pages/**/*.vue') // https://vitejs.dev/guide/features.html#glob-import
    const page = await pages[`./Pages/${name}.vue`]()
    page.default.layout = page.default.layout || MainLayout

    return page
    
  },

  //function () {}
  // {el : xxx, App : xxx, props : xxx}
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mixin({ methods: { route } }) 
      .use(ZiggyVue)
      .mount(el)
  },
})
