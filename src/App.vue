<template>
  <div class="page">
    This is my first VueJs Project
    <div style="display: flex; flex-direction: row; gap:30px">
      <categoryComp v-for="category in categories" :key="category" :image="category.image" :title="category.name" :num-item="category.productCount" :bgcolor="category.color"></categoryComp>
    
    </div>
    <div style="display: flex; gap: 30px;">
      <PromotionComp v-for="promotion in promotions" :key="promotion" :image="promotion.image" :title="promotion.title" :bgcolor="promotion.color"
       :bgcolorBtn="promotion.buttonColor" :promotion="promotion.title"></PromotionComp>
    </div>
    
    
  </div>
  
</template>

<script>


  import { mapState } from 'pinia';
  import categoryComp from './components/categoryComp.vue';
  import ButtonComp from './components/buttonComp.vue';
  import PromotionComp from './components/promotionComp.vue';
  import axios from 'axios';
  import { get } from 'spotify';
  import { useProductStore } from './stores/product';

  export default {
    name: 'App',
    components: {
      categoryComp,
      ButtonComp,
      PromotionComp
    },
    setup() {
      const store = useProductStore();


      return { store };
    },

    data(){
      return{
        categories:[
        ],
        promotions:[
        ],
        currentGroupName: 'Meats',
      }
    },
    //fetch categories and promotions
    async mounted(){
      
      await this.fetchCategories();
      await this.fetchPromotions();
      await this.store.fetchProducts();
      await this.store.fetchGroups();
      await this.store.fetchCategories();

      console.log("product: ",this.store.getProductsByGroup(this.currentGroupName));
      console.log("All product: ",this.store.products);

      //testing getter
      console.log("groupName: ",this.store.getCategoriesByGroup("Milks & Diaries"));
      console.log("Fruits: ",this.store.getProductsByGroup("Fruits"));
      console.log("categoryId: ",this.store.getProductsByCategory(2));
      console.log("popular: ", this.popularProducts);


    },
    methods: {
      fetchCategories(){
        axios.get("http://localhost:3000/api/categories").then((result1) => {
          // console.log(result1.data);
          this.categories = result1.data;
        })
      },
      fetchPromotions(){
        axios.get("http://localhost:3000/api/promotions").then((result) => {
          // console.log(result.data);
          this.promotions = result.data;
        });
      }
    },

    computed: {
      ...mapState(useProductStore, {
        popularProducts:'getPopularProducts',
        categories(store){
          return this.store.getCategoriesByGroup(this.currentGroupName);
          
        },
        
        products(store) {
          console.log()
          return this.store.getProductsByGroup(this.currentGroupName); 
        },

      })
    },
    
  };
</script>

<style scoped>
.page{
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 50px;
  align-items: center;
}
</style>
