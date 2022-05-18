<template>
    <!-- qua uso le props da main per poter popolare le due gallerie diverse -->
     <div class="col restaurant_card mx-auto">
        <router-link class="img-container" :to="{name: 'menu'}">
            <img :src="`${item.url}`" :alt="`${item.name}`"> 
            <p class="restaurant_name">{{item.name}}</p>   
        </router-link>
        
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

//restaurant card rules

.restaurant_card {
    max-height: 300px;
    width: 25vw;
    overflow: hidden;
    margin: 5px 0;

    .img-container {
        text-decoration: none;



        img {
            max-height: 200px;
            width: 100%;
            object-fit: cover;
            padding-bottom: 2px;
            transition: 0.80s;
            cursor: pointer;
            transform: translateY(2px) translateX(2px);
            box-shadow: #4e1f7c 0px 0px 0px;
            //transform: scale(1.1);
            &:hover {
                transform: scale(1.1);
                opacity: 1;
                
            }

            
            
        }
        .restaurant_name {
                font-size: 1.4em;
                margin-top: 5px;
                margin-bottom: 30px;
                font-weight: 600;
                padding-top: 2px;
                color: $body-bg;


            }

    }





    



}

</style>