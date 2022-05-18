<template>

    <div class="footer_container py-2">

        <div class="col-10 m-auto footer_top">
            <div class="row footer_lists justify-content-center">
                <div class="col-3 m-3 footer-block">
                    <h4 class="mb-3">Discover Deliveboo</h4>
                    <ul class="footer-menu">
                        <li v-for="(item, index) in discoverItems" :key="index"><a href="#">{{item.name}}</a></li>
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




// .all_caps_footer {
//     @include all-caps-footer;
// }

// //top footer text rules

// .info_text {
//     h6 {
//         padding: 10px 0;
//         margin-top: 10px;
//     }
//     p {
//         font-size: x-small;
//         color: $body-bg;
//     }   

// }

//top footer menu rules

// .footer-menu {
//     @include flex-column;
//     background-color: #434848;

//     h6 {
//     padding: 10px;
//     margin-top: 10px;
//     }
//     ul {                
//         list-style-type: none;
//         padding: 0;

//         li {                
//             display: block;
//             margin: 0 10px;
//             font-size: 11px;
//             min-height: 20px;
//             padding-bottom: 5px;
//             border-bottom: 1px solid $orange;
//             &:hover {
//                 border-bottom: 1px solid $body-bg;
//             }


//             .list_decoration {
//                 width: 10px;
//                 min-height: 20px;
//                 margin-right: 2px;
//                 float: left;
//                 font-size: 0.8em;
//                 font-weight: 400;
//             }


//             a {
                
//                 text-decoration: none;
//                 color: $body-bg;
//                 padding: 0;
//                 &:hover {                        
//                     color: $orange;
//                 }
//             }
//         }
//     }
// }




// //bottom footer rules

// .footer_bottom_container {
//     height: 50px;
//     border-top: 1px solid slategray;

//     .copyright {
//         color: $third;
//         font-size: xx-small;

//         .copyright_icon {
//             padding-bottom: 2px;
//         }

        

//         a {
//             color: $orange;
//             text-decoration: none;
//             &:hover {
//                 color: $body-bg;
//             }
//         }
//     }

//     // .footer-right {
//     //     li {
//     //         @include li-menu-horizontal;
//     //         margin: 15px 5px;

//     //         .fa-facebook-f {
//     //             @include brand-icons;
//     //             padding: 10px;
//     //             background-color: #3c5997;
//     //         }

//     //         .fa-twitter {
//     //             @include brand-icons;
//     //             background-color: #56acee;
//     //             padding: 10px;
//     //         }

//     //         .fa-instagram {
//     //             @include brand-icons;
//     //             background-color: #3f729b;
//     //             padding: 10px;
//     //         }

//     //         .fa-youtube {
//     //             @include brand-icons;
//     //             background-color: #ce201f;
//     //             padding: 10px;
//     //         }
//     //     }
//     // }
//}

</style>