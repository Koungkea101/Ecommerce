<template>
    <div class="headerContainer">
        <div class="logo">
            <img src="@/assets/images/headerImg/icon.png">
            <div class="logoText">
                <p id="melon">Melon</p>
                <p id="mart">Mart & Grocegy</p>
            </div>
        </div>
        <searchBoxComp class="searchBox"/>
        <div class="menuItemContainer">
            <div class="menuItemSubCon">
                <MenuItemComp class="menuItem" img1="/images/headerImg/user.svg" text="Account" color="#7E7E7E"/>
                <MenuItemComp class="menuItem" img1="/images/headerImg/compare.svg" text="Compare" color="#7E7E7E"/>
                <MenuItemComp class="menuItem" img1="/images/headerImg/wishlist.svg" text="Wishlist" color="#7E7E7E"/>
                <MenuItemComp class="menuItem" img1="/images/headerImg/cart.svg" text="Cart" color="#7E7E7E"/> 
            </div>
        </div>
        <div class="categoryContainer">
            <button style="display: flex; justify-content: center; align-items: center ;gap: 10px; width: 250px; height: 45px; border-radius: 8px; border: none; background-color: #3BB77E; color: white;">
                <img src="../assets/images/headerImg/category.svg" alt="" style="width: 16px; height: 16px;">
                <p>Browse All Categories</p>
                <img src="../assets/images/headerImg/dropdown-white.svg" alt="" >
            </button>
            <div style="margin-left: 35px;display: flex; gap: 20px;">
                <MenuItemComp :categoryId="'coke'" class="menuItem" img1="/images/headerImg/fire.svg" text="Hot Deals" color="#1B1B1B" fontW="600"/>
                <MenuItemComp :categoryId="'coke'" class="menuItem" text="Home" color="#1B1B1B" fontW="600"/>
                <MenuItemComp :categoryId="'coke'" class="menuItem" text="Food" img2="/images/headerImg/dropdown.svg" color="#1B1B1B" fontW="600"/>
                <MenuItemComp :categoryId="'coke'" class="menuItem" text="Vegetables" img2="/images/headerImg/dropdown.svg" color="#1B1B1B" fontW="600"/>
                <MenuItemComp :categoryId="'coke'" class="menuItem" text="Drink" color="#1B1B1B" fontW="600"/>
                <MenuItemComp :categoryId="'coke'" class="menuItem" text="Cookies" color="#1B1B1B" fontW="600"/>
                <MenuItemComp :categoryId="'coke'" class="menuItem" text="Meat & Seafood" img2="/images/headerImg/dropdown.svg" color="#1B1B1B" fontW="600"/>
                <MenuItemComp :categoryId="'coke'" class="menuItem" text="Bakery" color="#1B1B1B" fontW="600"/>
            </div>
            <div class="helpSpportContainer">
                <img src="../assets/images/headerImg/hotline.svg" alt="">
                <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <p style="color: #3BB77E; font-weight: 600;font-size: 24px;">099 777 888</p>
                    <p style="color: #7E7E7E; font-weight: 400;font-size: 12px">24/7 Support Center</p>
                </div>
            </div>
        </div>
         
        
    </div>
</template>
<script>
import MenuItemComp from './menuItemComp.vue';
import searchBoxComp from './searchBoxComp.vue';



export default{
    name:"headerComp",
    components:{
        searchBoxComp,
        MenuItemComp,
    }
    // props:[],
}
 
</script>
<style scoped>
/* font Quicksand */
@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Kdam+Thmor+Pro&family=Quicksand:wght@300..700&family=Rammetto+One&family=Rowdies:wght@300;400;700&display=swap');
/* font Montserrat */
@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Kdam+Thmor+Pro&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&family=Rammetto+One&family=Rowdies:wght@300;400;700&display=swap');


.headerContainer{ 
    width: 100%;
    height: 97px;
    /* border: 1px solid black; */
    margin-top: 40px;
    display: flex;
    align-items: center;

    position: relative;
}
.logo{
    display: flex;
    gap: 15px;
}
.logoText{
    display: flex;
    flex-direction: column;
    align-items: start;
}
#melon{
    font-family: "Quicksand", serif;
    font-weight: 700;
    font-style: normal;
    font-size: 40px;
    line-height: 50px;
    color: #3BB77E;
}
#mart{
font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: 600;
  font-style: normal;
  font-size: 10.9px;
  line-height: 18.2px;
  color: #253D4E;
}

.searchBox{
    position: absolute;
    left: 300px;
}
.menuItemContainer{
    width: 401px;
    height: 30px;
    position: absolute;
    right: 0px;
    /* border: 1px solid black;  */

}
.menuItemSubCon{
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-right: 10px;
}
.categoryContainer{
    position: absolute;
    left: 0px;
    top: 120px;
    width: 100%;
    height: 70px;
    align-items: center;
    display: flex;
    padding-left: 5px;
    
}
.helpSpportContainer{
   
    height: 45px;
    margin-left: auto;
    display: flex;
    gap: 3px;
    
}

</style>