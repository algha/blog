<template>
  <div id="app">
    <app-header />
    <div>
     <transition name='fade'>
       <router-view></router-view>
     </transition>
   </div>
  </div>
</template>

<script>
import Header from "./components/Header.vue";
export default {
  name: "App",
  components: {
    'app-header' : Header,
  }
};
</script>

<style></style>
