import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Home from './Layouts/Home.vue'


// import '../../public/home_assets/app/css/app.css';











createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = page.default.layout || Home
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})
