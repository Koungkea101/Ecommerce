<template>
    <div class="headerContainer">
        <h1 style="color: black; font-size: 30px;">header</h1>
        <div style="display: flex; color: black; font-size: 25px; gap: 30px;">

            <router-link to="/page/1" class="pageLink" active-class="activePage">Page 1</router-link>
            <router-link to="/page/2" class="pageLink" active-class="activePage">Page 2</router-link>
            <router-link to="/page/3" class="pageLink" active-class="activePage">Page 3</router-link>
        </div>
    </div>
</template>
<style>
.headerContainer{
    width: 100%;
    height: 15%;
    border-bottom: 1px solid black;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px;
}

.pageLink {
  text-decoration: none;
  border-radius: 15px;
  font-size: large;
  padding: 15px 30px;
  background-color: white;
  color: black;
  text-align: center;
}

.pageLink:hover {
  background-color: beige;
}
.activePage {
  color: red;
  font-weight: bold;
}
</style>
<script>
export default {
    name: 'headerComp',
}
</script>