<template>
    <div @click="navToRoute" class="menuItemCon">
        <img v-if="img1" :src="img1" style="width: 20px; height: 20px;">
        <p id="text" :style="{color: color, fontWeight: fontW}">{{ text }}</p>
        <img v-if="img2" :src="img2">
    </div>
</template>
<script>

export default{
    name:"menuItemComp",
    props:[
        "img1",
        "img2",
        "text",
        "color",
        "fontW",
        "categoryId"
    ],
    methods: {
        navToRoute(){
            if(this.categoryId){
                this.$router.push(`/categories/${this.categoryId}`);
            }
        }
    }
}
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Kdam+Thmor+Pro&family=Quicksand:wght@300..700&family=Rammetto+One&family=Rowdies:wght@300;400;700&display=swap');


.menuItemCon{
    height: 30px;
    display: flex;
    align-items: center;
    border-radius: 20px;
    padding-left: 10px;
    padding-right: 10px;
    
    /* background-color:black; */
    
}
.menuItemCon:hover{
    background-color: #3BB77E;
    
}
#text{
    font-family: "Quicksand", serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    line-height: 24px;
}
</style>