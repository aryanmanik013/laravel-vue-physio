import { createRouter, createWebHistory } from "vue-router";
import ForgotPassword from '../Pages/resetPassword.vue'
const routes = [
    {
        path: "/resetPassword",
        name: "ForgotPassword",
        component: ForgotPassword,
    },

];
const router = createRouter({ history: createWebHistory(), routes });
export default router;
