<template>
    <button class="mybtn" :style="{backgroundColor: bgcolor}" >
        <div>
            Shop now <i class="arrow right"></i>
        </div>
    </button>
</template>
<script>
export default{
    name:"appButton",
    props:[
        "bgcolor"
        
    ],
}
</script>

<style scoped>
    .mybtn{
        width: 109.83px;
        height: 31px;
        border-radius: 3px;
        padding: 8px 15px 8px 15px;
        color: white;
        font-size: 12px;
    }
    .arrow {
        border: solid white;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 3px;
    }

    .right {
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
    }
</style>