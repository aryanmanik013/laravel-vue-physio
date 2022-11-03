import { createRouter, createWebHistory } from "vue-router";
import Login from "./Pages/login.vue";
import RegisterUser from "./Pages/register.vue";
import ForgotPassword from "./Pages/resetPassword.vue";
import Dashboard from "./Pages/Dashboard.vue";
import AllUser from "./Pages/AllUser.vue";

const routes = [
    {
        path: "/login",
        name: "login",
        component: Login,
    },
    {
        path: "/registerUser",
        name: "registerUser",
        component: RegisterUser,
    },
    {
        path: "/resetPassword",
        name: "resetPassword",
        component: ForgotPassword,
    },
    {
        path: "/dashboard",
        name: "dashboard",
        component: Dashboard,
        meta: {
            needsAuth: true,
        },
    },
    {
        path: "/allUser",
        name: "allUser",
        component: AllUser,
    },
];

// routes.beforeEach((to, from, next) => {
//     if (to.meta.needsAuth) {
//         next("/login");
//     } else {
//         next();
//     }
// });

const router = createRouter({ history: createWebHistory(), routes });
export default router;
