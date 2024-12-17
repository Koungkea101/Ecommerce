<template>
    <div class="showcaseContainer">
        <h1 class="scTitle">Don't miss amazing grocery deals</h1>
        <p class="scText">Sign up for the daily newsletter</p>
        <div class="subContainer">
            <div style="display: flex; align-items: center; gap: 20px;">
                <img src="../assets/images/headerImg/message.svg" alt="" style="width: 30px;height: 30px;">
                <p style="color: #B6B6B6; font-size: 12px;">Your email address</p>
            </div>
            <button style="height: 100%;width: 149px;border-radius: 30px;border: none;background-color: #3BB77E;color: white;font-weight: 600;">Subscribe</button>
        </div>
        <img src="../assets/images/headerImg/showcasePic.png" alt="" style="width: 895px;height: 538px;position: absolute;top: 0px;right: 0px;">
    </div>
</template>

<script>
export default{
    name:"showcaseComp"
}
</script>
<style>
.showcaseContainer{
    width: 1584px;
    height: 538px;
    margin-top: 50px;
    border-radius: 30px;
    background-color: #FDC04033;
    position: relative;

}
.showcaseContainer::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("../assets/images/headerImg/showcaseBg.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    opacity: 0.2;
    z-index: 1;
}
.scTitle{
    width: 727px;
    position: absolute;
    top: 50px;
    left: 100px;
    z-index: 2;
    color: #253D4E;
    font-size: 72px;
    font-weight: 600;
}
.scText{
    width: 405px;
    position: absolute;
    top: 290px;
    left: 100px;
    z-index: 2;
    color: #7E7E7E;
    font-size: 30px;
    font-weight: 400;
}
.subContainer{
    width: 442px;
    height: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 30px;
    background-color: #FFFFFF;
    position: absolute;
    top: 390px;
    left: 100px;
    z-index: 2;
    display: flex;
    padding-left: 20px;
}
</style>