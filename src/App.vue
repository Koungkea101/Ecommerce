<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

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
  import categoryComp from './components/categoryComp.vue';
  import ButtonComp from './components/buttonComp.vue';
  import PromotionComp from './components/promotionComp.vue';
  import axios from 'axios';

  export default {
    name: 'App',
    components: {
      categoryComp,
      ButtonComp,
      PromotionComp
    },

    data(){
      return{
        categories:[
        ],
        promotions:[
        ]
      }
    },
    //fetch categories and promotions
    mounted(){
      
      this.fetchCategories();
      this.fetchPromotions();
    },
    methods: {
      fetchCategories(){
        axios.get("http://localhost:3000/api/categories").then((result1) => {
          console.log(result1.data);
          this.categories = result1.data;
        })
      },
      fetchPromotions(){
        axios.get("http://localhost:3000/api/promotions").then((result) => {
          console.log(result.data);
          this.promotions = result.data;
        });
      }
    }
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
