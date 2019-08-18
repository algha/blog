<template>
  <div id="app">
    <Header />
    <route-view> </route-view>
  </div>
</template>

<script>
import Header from "./components/Header.vue";
export default {
  name: "App",
  components: {
    Header
  }
};
</script>

<style></style>
