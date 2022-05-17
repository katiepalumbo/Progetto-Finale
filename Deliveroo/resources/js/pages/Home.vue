<template>
  <div>
      <JumboHome/>
      <IntroText :introText1="introText1" :text="text" v-for="(text, index) in introText1" :key="index"/>
      <HomeGallery/>
      <IntroText :introText2="introText2" :text="text" v-for="(text, index) in introText2" :key="index"/>
      <div class="gallery-container">
            <div class="col-10 m-auto gallery">
                <!-- <div class="row orange-space pt-5"><h1>Ordini tu, lo portiamo noi!</h1></div> -->
                <div class="row row-cols-4 mt-3">
                    <StandardGallery :galleryOneItems="galleryOneItems" :item="item" 
                    v-for="(item, index) in galleryOneItems" :key="index"/>
                </div>
            </div>
      </div>
      <FiltraggioHome/>
      

  </div>
</template>

<script>
import JumboHome from '../components/JumboHome.vue'
import Main from '../components/Main.vue'
import IntroText from '../components/IntroText.vue'
import StandardGallery from '../components/StandardGallery.vue'
import HomeGallery from '../components/HomeGallery.vue'
import FiltraggioHome from '../components/FiltraggioHome.vue'

export default {
    name: 'Home',
    components: {
      Main,
      JumboHome,
      IntroText,
      HomeGallery,
      StandardGallery,
      FiltraggioHome,

    },

    data () {
      return {
          types: null,
                selected: [],
                //users: [],

                navLinks: [
                {
                    to : 'restaurant-menu',
                    name : 'menu',
                },
            ],
        introText1:[
          {
            small: 'piatti per ogni gusto',
            big: 'Deliveboo ti suggerisce'
          },
        ],
        introText2:[
          {
            small: 'imbarazzo della scelta?',
            big: 'Ecco i nostri ristoranti più gettonati'
          },
        ],
        galleryOneItems: [
                {
                    url: '../../images/hamburger.jpg',
                    name: 'McBooleans',
                },
                {
                    url: '../../images/italian.jpg',
                    name: 'Pasta FaBool',
                },
                {
                    url: '../../images/chinese.jpg',
                    name: 'BamBool Lounge',
                },
                {
                    url: '../../images/mexican.jpg',
                    name: 'Los Tres Booleaners',
                },
                {
                    url: '../../images/hamburger.jpg',
                    name: 'McBooleans',
                },
                {
                    url: '../../images/italian.jpg',
                    name: 'Pasta FaBool',
                },
                {
                    url: '../../images/chinese.jpg',
                    name: 'Bambool Lounge',
                },
                {
                    url: '../../images/mexican.jpg',
                    date: 'October 11 | 2 comments',
                    name: 'Los Tres Booleaners',
                },
                                {
                    url: '../../images/hamburger.jpg',
                    name: 'McBooleans',
                },
                {
                    url: '../../images/italian.jpg',
                    name: 'Pasta FaBool',
                },
                {
                    url: '../../images/chinese.jpg',
                    name: 'BamBool Lounge',
                },
                {
                    url: '../../images/mexican.jpg',
                    date: 'October 11 | 2 comments',
                    name: 'Los Tres Booleaners',
                },
            ],
            galleryTwoItems : [
                {
                    url: '../../images/food.jpg',
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
    },
    methods:{
                getUsers(){
                axios.get('/api/users').then(response => {
                    this.users = response.data.results;
                    // console.log(response.data.results)
                    // console.log('aaaaaaaaaaaaa')
                })

                .catch(error => {
                    console.log(error);
                })

            },
    },
}
</script>

<style scoped lang="scss">
@import '../../sass/_variables.scss';

//general rules

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Raleway', sans-serif;
    font-weight: 700;
}

.gallery-container {
      background-color: $darkOrange;
      margin-top: -20px;
      margin-bottom: 20px;
      padding-bottom: 40px;

    
}

.orange-space {
  background-color: $orange;
  min-height: 100px;
  @include title-font;

}


    


</style>