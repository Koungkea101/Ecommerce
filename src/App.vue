<template>
  <div class="appContainer">
    <HeaderComp/>
    <router-view/>
    <FooterComp/>
  </div>
  
</template>
<style>
.appContainer{
  width: 1920px;
  height: 1080px;
  border:1px solid black;
  border-radius: 30px;

}
</style>

<script>
import { RouterView } from 'vue-router';
import HeaderComp from './components/headerComp.vue';
import FooterComp from './components/footerComp.vue';
import MenuComp from './components/menuComp.vue';

export default {
  name: 'App',
  components: {
    RouterView,
    HeaderComp,
    FooterComp,
    MenuComp
  }
}
</script>