<template>
    <div class="container">
        <div class="title">
            <div>{{ title }}</div>
        </div>
        <div class="option">
            <a href="#" class="category-item active">All</a>
            <a href="#" class="category-item">Milks & Dairies</a>
            <a href="#" class="category-item">Coffees & Teas</a>
            <a href="#" class="category-item">Pet Foods</a>
            <a href="#" class="category-item">Meats</a>
            <a href="#" class="category-item">Vegetables</a>
            <a href="#" class="category-item">Fruits</a>
        </div>
    </div>
</template>
<script>
export default{
    name:"MenuComp",
    props:[
        "title"
    ]
}
</script>
<style>
.container{
    background-color: white;
    width: 1584px;
    height: 40px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding-top: 100px;
}
.option{
    display: flex;
    gap:30px;
    align-items: center;
    justify-content: center;
}
.category-item{
    color: #253D4E;
    font-size: 16px;

}
.title{
    color: #253D4E;
    font-size: 32px;
    font-weight: bold;
}
.category-item:hover {
    color: #007bff;
    border-bottom: 2px solid #007bff;
}

.category-item.active {
    color: #007bff;
    font-weight: bold;
    border-bottom: 2px solid #007bff;
}
</style>