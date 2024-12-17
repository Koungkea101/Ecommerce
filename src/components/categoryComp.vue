<template>
    <div @click="navToCat" class="catCard" :style="{backgroundColor: bgcolor}">
        <img :src="image" alt="" class="img">
        <div class="textContainer">
            <h1 class="title">{{ title }}</h1>
            <p class="nItem">{{ numItem }} items</p>
        </div>
        
    </div>
</template>
<script>
import axios from 'axios';

export default{
    name: "categoryCard",
    props: [ 
        "title",
        "image",
        "numItem",
        "bgcolor",
        
    ],
    methods: {
        navToCat(){
            // if(this.categoryId){
            //     this.$router.push(`/categories/${this.categoryId}`);
            // }
            this.$router.push(`/categories/coke`);
        }
    }
}
</script>
<style scoped>
.img{
    width: 120px;
    height: 120px;

}
.title{
    font-weight: bold;
    font-size: 16px;
    width: auto;
    height: 20px;
    color: #000;
    
}
.nItem{
    color: #888;
    font-size: 12px;
    height: 18px;
}
.catCard{
    width: 136px;
    height: 177px;
    border: 1px solid #ddd;
    top: -108px;
    left: 33px;
    border-radius: 10px;
    text-align: center;
}
.textContainer{
    height: 38.96px;
    border: 1px solid;
    display: flex;
    flex-direction: column;
    padding-bottom: 10px;
}
</style>