<template>
    <div class="searchBoxContainer">
        <div style="display: flex; gap: 10px;">
            <p id="allCat">All Categories</p>
            <img src="../assets/images/headerImg/dropdown.svg" alt="">
        </div>
        <div class="vertical-line"></div>
        <p id="searchText">Search for items</p>
        <img src="../assets/images/headerImg/search.svg" alt="" style="position: absolute; right:20px">
    </div>
</template>
<script>
export default{
    name:"searchBoxComp"
    
}
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Kdam+Thmor+Pro&family=Quicksand:wght@300..700&family=Rammetto+One&family=Rowdies:wght@300;400;700&display=swap');


.searchBoxContainer{
    width: 700px;
    height: 50px;
    border: 2px solid #BCE3C9;
    border-radius: 5px;
    display: flex;
    align-items: center;
    padding: 10px;
    gap: 20px;

    position: relative;
}
#allCat{
    font-family: "Quicksand", serif;
    font-weight: 700;
    font-style: normal;
    font-size: 14px;
    line-height: 20px;
    color: #253D4E;
}
#searchText{
    font-family: "Quicksand", serif;
    font-weight: 500;
    font-style: normal;
    font-size: 12px;
    line-height: 18px;
    color: #B6B6B6;
}

.vertical-line {
  width: 1px; /* Width of the line */
  height: 15px; /* Height of the line */
  background-color: #CACACA; /* Color of the line */
}
</style>