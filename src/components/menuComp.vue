<template>
    <div class="menuContainer">
        <span class="menuItem">Menu</span>
        <span class="menuItem">Section 1</span>
        <span class="menuItem">Section 2</span>
        <span class="menuItem">Section 3</span>
        <span class="menuItem">Section 4 </span>
    </div>
</template>
<style>
.menuContainer{
    width: 100%;
    height: 100%;
    /* background-color: aqua; */
    border-right: 1px solid black;
    color: black;
    font-size: 25px;
}
.menuItem{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-bottom: 1px solid black;
}
.menuItem:hover{
    background-color: beige;
}
</style>
<script>
export default{
    name: 'menuComp'
}
</script>