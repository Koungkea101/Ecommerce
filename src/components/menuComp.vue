<template>
  <div class="menuContainer">
    <span class="menuItem">Menu</span>
    <router-link :to="`/page/${$route.params.nb}/section/1`" class="menuItem" active-class="activeSection">
      Section 1
    </router-link>
    <router-link :to="`/page/${$route.params.nb}/section/2`" class="menuItem" active-class="activeSection">
      Section 2
    </router-link>
    <router-link :to="`/page/${$route.params.nb}/section/3`" class="menuItem" active-class="activeSection">
      Section 3
    </router-link>
    <router-link :to="`/page/${$route.params.nb}/section/4`" class="menuItem" active-class="activeSection">
      Section 4
    </router-link>
  </div>
</template>

<style>
.menuContainer {
  width: 100%;
  height: 100%;
  border-right: 1px solid black;
  color: black;
  font-size: 25px;
}
.menuItem {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  border-bottom: 1px solid black;
  color: black;
}
.menuItem:hover {
  background-color: beige;
}
.activeSection {
  color: red;
  font-weight: bold;
}
</style>

<script>
export default {
  name: "menuComp",
};
</script>
