<template>
    <div class="pageHeaderContainer">
        <h1 style="color: #253D4E; font-size: 48px; font-weight: 600;">{{title}}</h1>
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">{{subTitle}}</a></li>
        </ul>
    </div>
</template>
<script>
export default{
    name:"pageHeaderComp",
    props:[
        "title",
        "subTitle"
    ]
}
</script>
<style>
.pageHeaderContainer{
    width: 1584px;
    height: 235px;
    background-color: #3BB77E33;
    position: relative;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
    padding-left: 70px;
    
}
.pageHeaderContainer::before{
    content: "";
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background-image: url("../assets/images/headerImg/pageHeaderBg.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    opacity: 0.08;
    z-index:1;
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