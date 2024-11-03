<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=NestMart:wght@400&display=swap"></link>

<template>
    <div class="promoCard" :style="{backgroundColor: bgcolor}">
        <img :src="image" alt="" class="img" :style="{width: width, height: height,top: top,left: left}">
        <div class="textContainer">
            <h1 class="title">{{ title }}</h1>
            <ButtonComp :bgcolor="bgcolorBtn" class="btn"></ButtonComp>
        </div>
    </div>
</template>
<script>
import ButtonComp from './buttonComp.vue';

export default{
    name:"promotion",
    props:[
        "title",
        "image",
        "bgcolor",
        "bgcolorBtn",
        "width",
        "height",
        "top",
        "left"
    ],
    components:{
        ButtonComp,
    }
};
</script>
<style scoped>
.promoCard{
    width: 512px;
    height: 300px;
    border: 2px solid white;
    position: relative;
    overflow: hidden;
}
.textContainer{
    width: 271px;
    height: 146px;
    position: absolute;
    top: 75px;
    left: 48px;
}
.img{
    
    position: absolute;
    
}
.title {
    width: 271px;
    height: 92px;
    font-size: 24px;
    font-weight: 700;
    color: black;
    font-family: 'NestMart', sans-serif;
}
.btn{
    position: absolute;
    top: 130px;
    left: 0px;
}

@font-face {
    font-family: 'NestMart';
    src: url('/path/to/fonts/NestMart-Heading4.woff2') format('woff2'),
         url('/path/to/fonts/NestMart-Heading4.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

</style>