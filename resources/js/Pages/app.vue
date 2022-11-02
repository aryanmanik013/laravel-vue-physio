<template>
  <Login/>
  <Register/>
  <Dashboard />
  <resetPassword />
</template>

<script>
import Dashboard from "./Dashboard.vue";

import resetPassword from "./resetPassword.vue";
import Login from "./login.vue";
import Register from "./register.vue";
export default {
  data() {
    return {};
  },
  components: {
    Dashboard,
    Login,
    Register,
    resetPassword
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
