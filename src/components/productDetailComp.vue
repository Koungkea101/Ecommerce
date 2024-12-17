<template>
  <div class="proDetail">
    <div
      style="
        width: 101px;
        height: 29px;
        background-color: #def9ec;
        color: #3bb77e;
        font-size: 14;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
      "
    >In Stock
    </div>
    <h1 style="
        width: 650px;
        color: #253D4E;
        font-size: 40px;
        font-weight: 600;">{{productTitle}}
    </h1>
    <div class="productRating">
        <img src="../assets/images/starsrating.png" alt="">
        <div style="color: #7E7E7E; font-size: 12px; font-weight: 400; line-height: 18px;">(4.0)</div>
    </div>
    <div style="display: flex;justify-content: center;align-items: center;gap:40px;width: 281px;height: 78px;">
        <div style="color: #3BB77E;font-size: 72px;font-weight: 600;">$38</div>
        <div style="color: #B6B6B6;font-size:32px;font-weight: 600;">$42</div>
    </div>
    <p style="width: 650px; font-size: 18px;color: #7E7E7E;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi? Officia doloremque facere quia. Voluptatum, accusantium!</p>
    
    <div style="height: 50px; display: flex; gap:10px">
      <!-- quantity -->
      <div style="height: 100%; width: 117px;border: 1.75px solid #3BB77E;border-radius: 7px;display: flex; justify-content: space-between; padding-left: 10px; padding-right: 10px;align-items: center;">
        <div style="width: 70%; text-align: center;">
          <p style="font-size: 20px;font-weight: 600px;color: #3BB77E;">1</p>
        </div>
        <div style="display: flex; flex-direction: column;gap:10px;width: 30%;">
          <img src="../assets/images/arrow-up.svg" alt="" style="width: 30px; height: 15px;">
          <img src="../assets/images/arrow-down.svg" alt="" style="width: 30px; height: 15px;">
        </div>
      </div>
      <!-- add to cart btn  -->
      <button style="width: 175.5px; border-radius: 4px; background-color: #3BB77E; color: white;border: none;display: flex; justify-content: center;align-items: center; gap:10px">
        <img src="../assets/images/cart-white.svg" alt="" style="width: 20px;height: 20px;">
        <p>Add To Cart</p>
      </button>
      <!-- other btn -->
      <div class="otherBtn">
        <img src="../assets/images/heart.svg" alt="" >
      </div>
      <div class="otherBtn">
        <img src="../assets/images/share.svg" alt="">
      </div>
    </div>

    <div style="color: black;">
      <table>
        <tbody>
          <tr>
            <td>Vendor :</td>
            <td>Nest Mart</td>
          </tr>
          <tr>
            <td>SKU :</td>
            <td>FWM15VKT</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>
<script>
export default {
  name: "productImg",
  props: ["image","productTitle"],
};
</script>
<style>
.proDetail {
  width: 865px;
  height: 696px;
  /* background-color: aqua;   */
  border-radius: 15px;
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: start;
  padding-left: 48px;
  gap:30px;
}
.productRating{
    display: flex;
    gap: 5px;
    width: 106px;
    height: 18px;
    align-items: center;
}
.otherBtn{
  width: 50px;
  height: 50px;
  border: 1px solid #F2F3F4;
  border-radius: 5px;
  display: flex;
  justify-content: center;
  align-items: center;
}

th:nth-child(1),
    td:nth-child(1) {
      font-weight: bold;
    }

th:nth-child(2),
td:nth-child(2) {
  color: #B6B6B6;
}
td{
  padding-left: 10px;
  padding-right: 10px;
  font-size: 18px;
}
</style>
