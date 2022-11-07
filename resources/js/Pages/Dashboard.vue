<template>
  <TopNAv />
  <DashboardLayout/>
<Footer/>
</template>

<script>
import DashboardLayout from "./components/DashboardMenu.vue";
import TopNAv from "./components/top_nav.vue";
import Footer from "./components/footer.vue";
export default {
  components: {
    TopNAv,
    DashboardLayout,
    Footer
  },
};
</script>

<style>
</style>
