<template>
  <div class="wholeCategory">
    <div class="pageCategory">
      <!-- Header Component -->
      <headerComp />

      <!-- Page Header with Dynamic Title -->
      <PageHeaderComp :title="categoryTitle" :sub-title="categorySubTitle" />
    </div>
  </div>
</template>

<script>
import headerComp from "@/components/headerComp.vue";
import PageHeaderComp from "@/components/pageHeaderComp.vue";

export default {
  name: "CategoryView",
  components: {
    headerComp,
    PageHeaderComp,
  },
  data() {
    return {
      categoryTitles: {
        coke: { title: "Coke & Milk", subTitle: "Coke & Milk" },
      },
    };
  },
  computed: {
    // Extract categoryId from the route
    categoryId() {
      return this.$route.params.categoryId;
    },
    categoryTitle() {
      return this.categoryTitles[this.categoryId]?.title || "Category";
    },
    categorySubTitle() {
      return (
        this.categoryTitles[this.categoryId]?.subTitle || "Explore Our Products"
      );
    },
  },
};
</script>

<style>
.wholeCategory {
  width: 1912px;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  gap: 50px;
  align-items: center;
  /* background-color: #f4f4f4; */
  background-color: aqua;
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
</style>
