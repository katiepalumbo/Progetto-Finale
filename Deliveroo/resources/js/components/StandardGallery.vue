<template>
    <!-- qua uso le props da main per poter popolare le due gallerie diverse -->
     <div class="col article_card mx-auto">
        <img :src="`${item.url}`" :alt="`${item.name}`">
        <p class="article_title">{{item.name}}</p>
        <!-- <p class="article_date">{{item.date}}</p>
        <p class="article_preview">{{item.text}}</p> -->
    </div>

</template>

<script>

//sotto troviamo le props passate da home
export default {
    name: 'StandardGallery',
    props: {
        'galleryOneItems': Array,
        //'galleryTwoItems': Array,
        'item' : Object
    }

}
</script>

<style scoped lang="scss">
@import '../../sass/_variables.scss';

//general rules

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: $darkOrange;
    
}

//article card rules

.article_card {
    max-height: 300px;
    width: 25vw;
    overflow: hidden;
    margin: 5px 0;


    img {
        width: 100%;
        object-fit: cover;
        padding-bottom: 2px;
        border-bottom: 2px solid transparent;
        &:hover {
            border-bottom: 2px solid $purple;
            cursor: pointer;
            
        }
    }

    .article_title {
        font-size: 1.2em;
        margin-top: 10px;
        font-weight: 600;
        padding-top: 2px;
        color: $body-bg;

    }



}

</style>