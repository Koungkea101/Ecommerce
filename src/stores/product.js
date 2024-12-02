import { defineStore, mapState } from 'pinia';
import axios from 'axios';

export const useProductStore = defineStore('product', {
  state: () => ({
    groups: [],
    products: [],
    promotions: [],
    categories: [],
  }),

  getters: {
    getCategoriesByGroup: (state) => {
      return(groupName)=> state.categories.filter(category => category.group === groupName);
    },
    getProductsByGroup: (state) => {
      return (groupName)=>state.products.filter(product => product.group === groupName);
    },

    getProductsByCategory: (state) => {
      return (categoryName)=>state.products.filter(product => product.categoryId === categoryName);
    },
    getPopularProducts: (state) => {
      return state.products.filter(product => product.countSold > 10);
    }
  },

  actions: {
    async fetchGroups() {
      try {
        const response = await axios.get("http://localhost:3000/api/groups");
        this.groups = response.data;
        console.log(this.groups);
      } catch (error) {
        console.error("Error fetching groups:", error);
      }
    },
    
    async fetchProducts() {
      try {
        const response = await axios.get("http://localhost:3000/api/products");
        this.products = response.data;
      } catch (error) {
        console.error("Error fetching categories:", error);
      }
    },
    async fetchCategories() {
      try {
        const response = await axios.get("http://localhost:3000/api/categories");
        this.categories = response.data;
      } catch (error) {
        console.error("Error fetching categories:", error);
      }
    },
    async fetchPromotions() {
      try {
        const response = await axios.get("http://localhost:3000/api/promotions");
        this.promotions = response.data;
      } catch (error) {
        console.error("Error fetching promotions:", error);
      }
    },
  },
});