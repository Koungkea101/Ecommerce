<script setup lang="ts">
import MenuComp from '../components/menuComp.vue';
</script>

<template>
    <div class="homeContainer">
        <div style="width: 20%; height: 100%;">
            <MenuComp/>
        </div>
        <div class="contentWrapper">
            <router-view />
        </div>
        
    </div>
</template>
<style>
.homeContainer{
    height: 70%;
    display: flex;
    justify-content: space-between;
    align-items: center;

    /* background-color: aqua; */

}
.contentWrapper {
  width: 80%;
  height: 100%;
  padding: 20px;
  /* background-color: aqua; */
}
</style>