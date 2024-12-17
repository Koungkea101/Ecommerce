<template>
    <div class="wholeCategory">
        <div class="pageCategory">
            <headerComp/>
            
            <div class="productDetailContainer">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Seeds of Change Organic</a></li>
                </ul>
                <div style="display: flex;">
                    <ProductImgComp image="/images/mango.jpeg" width="865px" height="696px" widthImg="784px" heightImg="421px" border="2px solid #E5E5E5"/>
                    <ProductDetailComp :productTitle="productTitle"/>
                </div>
                <div style="display: flex; gap: 25px; align-items: center; padding-bottom: 68px;">
                    <button style="width: 54px; height: 40px; border-radius: 30px; background-color: #3BB77E; border: none;">
                        <img src="../assets/images/arrow-back.svg" alt="">
                    </button>
                    <ProductImgComp image="/images/orange.png" width="118px" height="118px" widthImg="106px" heightImg="84px" border="1px solid #3BB77E"/>
                    <ProductImgComp image="/images/drysheet.png" width="118px" height="118px" widthImg="106px" heightImg="84px"/>
                    <ProductImgComp image="/images/strawberry.png" width="118px" height="118px" widthImg="106px" heightImg="84px"/>
                    <ProductImgComp image="/images/melon.png" width="118px" height="118px" widthImg="106px" heightImg="84px"/>
                    <button style="width: 54px; height: 40px; border-radius: 30px; background-color: #F2F3F4; border: none;">
                        <img src="/images/arrow-forward.svg" alt="">
                    </button>
                </div>
                <div class="productInfo">
                    <div style="display: flex; margin-top: 50px; margin-left: 70px; gap: 25px;">
                        <div class="productDescription" style="color: #3BB77E;">Description</div>
                        <div class="productDescription" style="color: #B6B6B6;">Additional Info</div>
                        <div class="productDescription" style="color: #B6B6B6;">Reviews (3)</div>
                    </div>
                    <div style="width: 1440px; height: 158px; color: #7E7E7E; font-size: 16px; margin-top: 38px; margin-left: 70px;">
                        Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.

                        Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because. 
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</template>
<script>
import headerComp from '@/components/headerComp.vue';
import ProductDetailComp from '@/components/productDetailComp.vue';
import ProductImgComp from '@/components/productImgComp.vue';


export default {
    name: "ProductView",
    components: {
        headerComp,
        ProductImgComp,
        ProductDetailComp,
    },
    data() {
        return {
            productTitles: {
                mango: {productTitle:"Seed of Change Organic Quinoa, Brown"},
            },
        };
    },
    computed: {
        // Extract categoryId from the route
        productId() {
            return this.$route.params.productId;
        },
        productTitle() {
            return this.productTitles[this.productId]?.productTitle || "Product Title";
        },
        
    },
}
</script>
<style>
.wholeCategory {
    width: 1919px;
    /* width: 100%; */
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    gap: 50px;
    align-items: center;
    background-color: #f4f4f4;
}
.pageCategory {
    width: 100%;
    min-height: 100%;
    display: flex;
    flex-direction: column;
    gap: 130px;
    align-items: center;
    background-color: white;
}
.productDetailContainer{
    display: flex;
    flex-direction: column;
    gap:20px;
}
.productInfo{
    width: 1583px;
    height: 324px;
    border: 1px solid #F2F3F4;
    border-radius: 15px;

    
}
.productDescription{
    width: 187px;
    height: 45px;
    border: 1px solid #F2F3F4;
    border-radius: 30px;
    padding: 15px 30px 15px 30px;
    box-shadow: 5px 5px 10px lightgray;

    
    font-size: 18px;
    display: flex;
    justify-items: center;
    align-items: center;
}
.breadcrumb {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    padding: 0;
    margin: 0;
}

.breadcrumb li {
    display: flex;
    align-items: center;
    font-size: 16px;
}

.breadcrumb li a {
    color: #7E7E7E;
    text-decoration: none;
    padding: 0 5px;
}

.breadcrumb li a:hover {
    text-decoration: underline;
}

.breadcrumb li::after {
    content: ">";
    color: #6c757d;
    margin: 0 5px;
}

.breadcrumb li:last-child::after {
    content: "";
}

.breadcrumb li:last-child a {
    color: #6c757d;
    pointer-events: none;
    cursor: default;
}
</style>