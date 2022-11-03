import "./bootstrap";

import { createApp } from "vue";

// import "bootstrap/dist/cssbootstrap.css";
// import "bootstrap-vue-3/dist/bootstrap-vue-3.css";
import router from "./router.js";
import App from "./layouts/app.vue";

createApp(App).use(router).mount('#app');

// const app  = createApp({});
// import MainFile from "./Pages/app.vue";

// app.component('MainFile',MainFile);

// app.mount('#app');

// createApp(app).mount("#app");
