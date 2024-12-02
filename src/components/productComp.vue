<template>
    <div class="productContainer">
        <div class="discount">
            -{{ discountPercentage }}%
        </div>
        <div class="productImg">
            <img src="../assets/images/corn.jpg" alt="">
        </div>
        <div class="productDetail">
            <p style="color: #7E7E7E; font-size: 12px; font-weight: 400;">Hodo Foods</p>
            <p style="color: #253D4E; font-size:14px; font-weight: 700;">{{ name }}</p>
            <div class="productRating">
                <img src="../assets/images/starsrating.png" alt="">
                <div style="color: #7E7E7E; font-size: 12px; font-weight: 400; line-height: 18px;">({{ rating }}.0)</div>
            </div>
            <div style="color: #7E7E7E; font-size: 12px; font-weight: 400; line-height: 18px;">{{size}}</div>
            <div class="priceContainer">
                <div class="productPrice"> 
                    <div style="color: #3BB77E; font-size: 20px; line-height: 32px; font-weight: 800;">$ {{price}}</div>
                    <div style="color: #7E7E7E; font-size: 12px; line-height: 20px;">$2.80</div>
                </div>
                <div class="quatity">
                    <img src="../assets/images/Add button.png" alt="">
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    name:"productComp",
    props:[
        "name",
        "price",
        "size",
        "rating",
        "discountPercentage",
    ]
}
</script>
<style>
.productContainer{
    width: 298px;
    height: 402px;
    border: 1px solid #BCE3C9;
    background-color: white;
    border-radius: 10px;
    position: relative;
    
}
.discount{
    padding-top: 10px;
    padding-right:15px;
    padding-bottom: 10px;
    padding-left: 15px;
    
    width: 58px;
    height: 32px;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 30px;
    background-color: #3BB77E;
    color: white;
    font-size: 12px;
    font-weight: 400;
    line-height: 12px;
    position: absolute;
    top: 20px;
}
.productImg{
    width: 213px;
    height: 135.94px;
    margin-top: 61.81px;
    margin-left: 37.11px;
    background-color: antiquewhite;
    overflow: hidden;
}
.productImg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.productDetail{
    width: 261px;
    height: 148px;
    margin-left: 19px;
    margin-top: 30px;
    color: white;
}
.priceContainer{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.productRating{
    display: flex;
    gap: 5px;
    width: 106px;
    height: 18px;
    align-items: center;
}
.productPrice{
    display: flex;
    align-items: center;
    gap: 5px;

}
</style>
