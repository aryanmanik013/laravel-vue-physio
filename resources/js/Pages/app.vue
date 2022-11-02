<template>
  <Login v-if="LoginShow" />
  <Register v-if="registerUser" />
  <Dashboard v-if="dashboardShow" />
  <resetPassword v-if="resetPassword" />
  <AllUser/>
</template>

<script>
import Dashboard from "./Dashboard.vue";

import resetPassword from "./resetPassword.vue";
import Login from "./login.vue";
import Register from "./register.vue";
import AllUser from "./AllUser.vue";
export default {
  data() {
    return {
      LoginShow: true,
      registerUser: true,
      dashboardShow: true,
      resetPassword: true,
    };
  },
  components: {
    Dashboard,
    Login,
    Register,
    resetPassword,
    AllUser
  },
};
</script>
<style>
body {
  background-image: url("assets/media/auth/bg10.jpeg");
}
[data-theme="dark"] body {
  background-image: url("assets/media/auth/bg10-dark.jpeg");
}
</style>
