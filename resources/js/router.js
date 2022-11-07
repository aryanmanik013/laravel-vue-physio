import { createRouter, createWebHistory } from "vue-router";
import Login from "./Pages/login.vue";
import RegisterUser from "./Pages/register.vue";
import ForgotPassword from "./Pages/resetPassword.vue";
import Dashboard from "./Pages/Dashboard.vue";
import AllUser from "./Pages/AllUser.vue";

const routes = [
    {
        path: "/",
        name: "Login",
        component: Login,
        meta: {
            needsAuth: false,
        },
    },
    {
        path: "/registerUser",
        name: "RegisterUser",
        component: RegisterUser,
        meta: {
            needsAuth: false,
        },
    },
    {
        path: "/resetPassword",
        name: "ResetPassword",
        component: ForgotPassword,
        meta: {
            needsAuth: false,
        },
    },
    {
        path: "/dashboard",
        name: "Dashboard",
        component: Dashboard,
        meta: {
            needsAuth: true,
        },
    },
    {
        path: "/allUser",
        name: "AllUser",
        component: AllUser,
        meta: {
            needsAuth: true,
        },
    },
];
const router = createRouter({ history: createWebHistory(), routes });
router.beforeEach((to, from) => {
    if (to.meta.needsAuth && !localStorage.getItem("token")) {
        // from("/");


        return {'name' : 'Login'}
    }
    if (to.meta.needsAuth == false && localStorage.getItem("token")) {
        // from("Dashboard");

        return {'name' : 'Dashboard'}

    }
});

export default router;
