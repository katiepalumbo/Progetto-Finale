<template>

    <div class="footer_container py-2">

        <div class="col-10 m-auto footer_top">
            <div class="row footer_lists justify-content-center">
                <div class="col-3 m-3 footer-block">
                    <h4 class="mb-3">Discover Deliveboo</h4>
                    <ul class="footer-menu">
                        <li class="my-1" v-for="(item, index) in discoverItems" :key="index"><a href="#">{{item.name}}</a></li>
                    </ul>
                </div>
                <div class="col-3 m-3 footer-block">
                    <h4 class="mb-3">Legal</h4>
                    <ul>
                    <li v-for="(item, index) in legalItems" :key="index"><a href="#">{{item.name}}</a></li>
                    </ul>
                </div>
                <div class="col-3 m-3 footer-block">
                    <h4 class="mb-3">Help</h4>
                    <ul>
                        <li v-for="(item, index) in helpItems" :key="index"><a href="#">{{item.name}}</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 m-auto">
                    <p class="copyright mt-1"><span><i class="fa-regular fa-copyright copyright_icon"></i></span> Copyright 2022 | Powered by Team 7</p>
                </div>
            </div> 

        </div>



</template>

<script>
//qua ci sono i dati che vengono importati da app.vue 
export default {
    name: 'MyFooter',
    props: {
        'popularTopics': Array,
        'recentTopics': Array,
        'latestReplies': Array,
    },
    data() {
        return {
            discoverItems: [
                {
                    name: 'Investors',
                    url: '/home' 
                },
                {
                    name: 'About Us',
                    url: '/home' 
                },
                                {
                    name: 'Takeaway',
                    url: '/home' 
                },
                {
                    name: 'More',
                    url: '/home' 
                },
                {
                    name: 'Newsroom',
                    url: '/home' 
                },
                {
                    name: 'Foodscene blog',
                    url: '/home' 
                },
                {
                    name: 'Engineering blog',
                    url: '/home' 
                },
                {
                    name: 'Design blog',
                    url: '/home' 
                },
                {
                    name: 'Careers',
                    url: '/home' 
                },
                {
                    name: 'Restaurant sign',
                    url: '/home' 
                },
            ],
            legalItems: [
                {
                    name: 'Terms and Conditions',
                    url: '/home' 
                },
                {
                    name: 'Privacy',
                    url: '/home' 
                },
                {
                    name: 'Cookies',
                    url: '/home' 
                },
            ],
            helpItems: [
                {
                    name: 'Contact',
                    url: '/home' 
                },
                {
                    name: 'FAQs',
                    url: '/home' 
                },
                {
                    name: 'Cuisines',
                    url: '/home' 
                },
            ],

            
        }
    }

}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

@import '../../sass/_variables.scss';


//general rules for footer

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}

.footer_container {
    background-color: #2e3333;
}

.footer-block {
    background-color: #434848;
    padding: 20px;
    max-width: 50%;

    h4 {
        @include title-font;
        color: $body-bg;
    }

    li {
        color: $body-bg;
        list-style: none;
        @include subtitle-font;
 
        

        a {
            text-decoration: none;
            color: $body-bg;
            
        }

    }

   
}
.copyright {
        color: $body-bg;
}


</style>