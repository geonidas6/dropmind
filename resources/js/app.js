import { createApp } from 'vue';
import MapPage from './pages/MapPage.vue';
import DropPage from './pages/DropPage.vue';

const routes = {
  '/map': MapPage,
  '/drop': DropPage,
};

const path = window.location.pathname;
const Page = routes[path] || MapPage;

createApp(Page).mount('#app');
