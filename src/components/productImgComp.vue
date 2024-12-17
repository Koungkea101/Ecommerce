<template>
    <div class="proPic" :style="{width: width,height: height,border: border}">
        <img :src="image" alt="" :style="{width: widthImg,height: heightImg}" class="productImg">
    </div>
</template>
<script>
export default{
    name:"productImg",
    props: [
        "image",
        "width",
        "height",
        "widthImg",
        "heightImg",
        "border"
    ]
}
</script>
<style>
.proPic{
    /* background-color: aqua;   */
    border: 2px solid #E5E5E5;
    border-radius: 15px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}
.productImg{
    object-position: center;
    object-fit: cover;
    
}
</style>