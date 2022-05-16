<template>
  <div>
      <JumboHome/>
      <IntroText/>
      <HomeGallery/>
      <!-- <div class="gallery-container mt-3">
            <div class="col-10 m-auto gallery">
                <div class="row row-cols-4">
                    <Gallery :galleryOneItems="galleryOneItems" :item="item" 
                    v-for="(item, index) in galleryOneItems" :key="index"/>
                </div>
            </div>
        </div> -->

  </div>
</template>

<script>
import JumboHome from '../components/JumboHome.vue'
import Main from '../components/Main.vue'
import IntroText from '../components/IntroText.vue'
//import Gallery from '../components/Gallery.vue'
import HomeGallery from '../components/HomeGallery.vue'

export default {
    name: 'Home',
    components: {
      Main,
      JumboHome,
      IntroText,
      HomeGallery,

    },

    data () {
      return {
        galleryOneItems: [
                {
                    url: '../../images/chinese.jpg',
                    date: 'October 11 | 2 comments',
                    name: 'Chinese',
                    text: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam, cumque provident totam omnis, magnam dolores dolorum corporis.'
                },
                {
                    url: '../../images/italian.jpg',
                    date: 'October 11 | comments off',
                    name: 'Italian',
                    text: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam, cumque provident totam omnis, magnam dolores dolorum corporis.'
                },
                {
                    url: '../../images/mexican.jpg',
                    date: 'October 11 | 2 comments',
                    name: 'Mexican',
                    text: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam, cumque provident totam omnis, magnam dolores dolorum corporis.'
                },
                {
                    url: '../../images/food.jpg',
                    date: 'October 11 | 2 comments',
                    name: 'Food',
                    text: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam, cumque provident totam omnis, magnam dolores dolorum corporis.'
                },
            ],
            galleryTwoItems : [
                {
                    url: '../assets/images/food.jpg',
                    date: 'October 11 | 2 comments',
                    name:'This is Another Title',
                    text: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam, cumque provident totam omnis, magnam dolores dolorum corporis.'
                },
                {
                    url:'../../img/post_feat_img_21-320x202.jpg',
                    date: 'October 11 | comments off',
                    name:'This is Another Title',
                    text: 'This is some text from the article. This is some more text from the article. More text.'
                },
                {
                    url:'../../img/post_feat_img_20-320x202.jpg',
                    date: 'October 11 | comments off',
                    name:'This is Another Title',
                    text: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam, cumque provident totam omnis, magnam dolores dolorum corporis.'
                },

            ],
        }
}}
</script>

<style scoped lang="scss">
@import '../../sass/_variables.scss';

//general rules

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: $body-bg;
    font-family: 'Raleway', sans-serif;
    font-weight: 700;
}
    


</style>