<template>
    <div class="whole">
      <div class="page">
        <MenuComp title="Featured Categories"></MenuComp>
        <div style="display: flex; flex-direction: row; gap: 30px">
          <categoryComp
            v-for="category in formatImgCategories"
            :key="category"
            :image="category.image"
            :title="category.name"
            :num-item="category.productCount"
            :bgcolor="category.color"
          ></categoryComp>
        </div>
        <div style="display: flex; gap: 30px">
          <PromotionComp
            v-for="promotion in formatImgPromotions"
            :key="promotion"
            :image="promotion.image"
            :title="promotion.title"
            :bgcolor="promotion.color"
            :bgcolorBtn="promotion.buttonColor"
            :promotion="promotion.title"
          ></PromotionComp>
        </div>
        <MenuComp title="Popular Products"></MenuComp>
        <div class="popularProduct">
          <table>
            <tbody>
              <tr v-for="(row, rowIndex) in chunkedProducts" :key="rowIndex">
                <td v-for="product in row" :key="product.name">
                  <productComp
                    :name="product.name"
                    :price="product.price"
                    :size="product.size"
                    :rating="product.rating"
                    :discountPercentage="product.promotionAsPercentage"
                  ></productComp>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import { mapState } from "pinia";
  
  import categoryComp from "../components/categoryComp.vue";
  import ButtonComp from "../components/buttonComp.vue";
  import PromotionComp from "../components/promotionComp.vue";
  import MenuComp from "../components/MenuComp.vue";
  import productComp from "../components/productComp.vue";
  
  import axios from "axios";
  import { useProductStore } from "../stores/product";
  
  export default {
    name: "App",
    components: {
      categoryComp,
      ButtonComp,
      PromotionComp,
      MenuComp,
      productComp,
    },
    setup() {
      const store = useProductStore();
  
      return { store };
    },
  
    data() {
      return {
        currentGroupName: "Meats",
      };
    },
    //fetch categories and promotions
    async mounted() {
      await this.store.fetchProducts();
      await this.store.fetchGroups();
      await this.store.fetchCategories();
      await this.store.fetchPromotions();
  
      console.log(
        "product: ",
        this.store.getProductsByGroup(this.currentGroupName)
      );
  
      //testing getter
      console.log(
        "groupName: ",
        this.store.getCategoriesByGroup("Milks & Diaries")
      );
      console.log("Fruits: ", this.store.getProductsByGroup("Fruits"));
      console.log("categoryId: ", this.store.getProductsByCategory(2));
      console.log("popular: ", this.popularProducts);
    },
    methods: {
      fetchCategories() {
        axios.get("http://localhost:3000/api/categories").then((result1) => {
          // console.log(result1.data);
          this.categories = result1.data;
        });
      },
      fetchPromotions() {
        axios.get("http://localhost:3000/api/promotions").then((result) => {
          // console.log(result.data);
          this.promotions = result.data;
        });
      },
      fetchProducts() {
        axios.get("http://localhost:3000/api/products").then((result) => {
          // console.log("Allproducts",result.data);
          this.products = result.data;
        });
      },
    },
  
    computed: {
      ...mapState(useProductStore, {
        popularProducts: "getPopularProducts",
        categories(store) {
          return this.store.getCategoriesByGroup(this.currentGroupName);
        },
  
        products(store) {
          console.log();
          return this.store.getProductsByGroup(this.currentGroupName);
        },
  
        chunkedProducts() {
          const chunkSize = 5; //num of column
          const chunks = [];
          for (let i = 0; i < this.store.products.length; i += chunkSize) {
            chunks.push(this.store.products.slice(i, i + chunkSize));
          }
          return chunks;
        },
  
        // add http://localhost:3000/ before image value this fix the image not showing
        formatImgCategories() {
          return this.store.categories.map((category) => ({
            ...category,
            image: `http://localhost:3000/${category.image}`,
          }));
        },
        formatImgPromotions() {
          return this.store.promotions.map((promotion) => ({
            ...promotion,
            image: `http://localhost:3000/${promotion.image}`,
          }));
        },
      }),
    },
  };
  </script>
  
  <style scoped>
  .whole {
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    gap: 50px;
    align-items: center;
    background-color: #f4f4f4;
  }
  .page {
    width: 100%;
    max-width: 1812px;
    min-height: 100%;
    display: flex;
    flex-direction: column;
    gap: 50px;
    align-items: center;
    background-color: white;
  }
  table {
    border-spacing: 24px;
  }
  .popularProduct {
    width: 1584px;
    height: 828px;
  }
  </style>
  