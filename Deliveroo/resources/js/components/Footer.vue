<template>

    <!-- all'interno del footer ho 2 sezioni (top e bottom) -- il top contiene i menu 
    che vengono popolati in modo dinamico con dati passati tramite props da app.vue -->
    <div class="footer_container">

        <!-- inizio footer top con info e menu -->
        <div class="col-8 m-auto footer_top">
            <div class="row footer_lists">

                <!-- footer text -->
                <div class="col info_text">
                    <h6 class="all_caps_footer">deliveboo</h6>
                    <p class="footer_text_block">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Cumque, illo iste optio atque molestias distinctio, 
                        enim modi tempora asperiores rem voluptate, blanditiis iure! 
                        Ullam fuga earum libero voluptas, dicta excepturi.</p>
                </div>

                <!-- footer menu lists - ci sono 3 in tutto -- questi menu vengono popolati dai dati in app.vue -->
                <div class="col menu_list">
                    <h6 class="all_caps_footer">Popular Topics</h6>
                    <!-- uso v-for per tutti i menu per popolarli in modo dinamico
                    <ul class="menu-col" v-for="(popularTopic, a) in popularTopics" :key="a">
                        <li><a href="#" target="_blank" rel="noopener">{{popularTopic}}</a></li>
                    </ul>
                </div>
                <div class="col menu_list">
                    <h6 class="all_caps_footer">Recent Topics</h6>
                    <ul class="menu-col" v-for="(recentTopic, a) in recentTopics" :key="a">
                        <li><a href="#" target="_blank" rel="noopener">{{recentTopic}}</a></li>
                    </ul>
                </div>
                <div class="col menu_list">
                    <h6 class="all_caps_footer">Latest Replies</h6>
                    <ul class="menu-col" v-for="(latestReply, a) in latestReplies" :key="a">
                        <li><a href="#" target="_blank" rel="noopener">{{latestReply}}</a></li>
                    </ul>
                </div>
                <div class="col menu_list">
                    <h6 class="all_caps_footer">Popular Topics</h6>
                    -->
                    <ul class="menu-col" >
                        <li><a href="#" target="_blank" rel="noopener">Popular Topic 1</a></li>
                        <li><a href="#" target="_blank" rel="noopener">Popular Topic 2</a></li>
                        <li><a href="#" target="_blank" rel="noopener">Popular Topic 3</a></li>
                        <li><a href="#" target="_blank" rel="noopener">Popular Topic 4</a></li>
                    </ul>
                </div> 
                <div class="col menu_list">
                    <h6 class="all_caps_footer">Recent Topics</h6>
                    <ul class="menu-col" >
                        <li><a href="#" target="_blank" rel="noopener">Recent Topic 1</a></li>
                        <li><a href="#" target="_blank" rel="noopener">Recent Topic 2</a></li>
                        <li><a href="#" target="_blank" rel="noopener">Recent Topic 3</a></li>
                        <li><a href="#" target="_blank" rel="noopener">Recent Topic 4</a></li>
                    </ul>
                </div>
                <div class="col menu_list">
                    <h6 class="all_caps_footer">Latest Replies</h6>
                    <ul class="menu-col" >
                        <li><a href="#" target="_blank" rel="noopener">Latest Reply 1</a></li>
                        <li><a href="#" target="_blank" rel="noopener">Latest Reply 2</a></li>
                        <li><a href="#" target="_blank" rel="noopener">Latest Reply 3</a></li>
                        <li><a href="#" target="_blank" rel="noopener">Latest Reply 4</a></li>
                    </ul>
                </div>


            </div>
        </div>

        <!-- inizio footer bottom -->
        <div class="footer_bottom_container">
            <div class="col-8 m-auto">
                <div class="row footer_bottom">

                    <!-- copyright information -->
                    <div class="col-9 m-auto">
                        <p class="copyright"><span><i class="fa-regular fa-copyright copyright_icon"></i></span> Copyright 2022 | Powered by Team 7</p>
                    </div>

                    <!-- social media icons -->
                    <!-- <div class="col-3">
                        <div class="row">
                            <ul class="menu-row footer-right">
                                <li><a href="#" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank" rel="noopener"><i class="fa-brands fa-twitter"></i></a></li>            
                                <li><a href="#" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
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

.all_caps_footer {
    @include all-caps-footer;
}

//top footer text rules

.info_text {
    h6 {
        padding: 10px 0;
        margin-top: 10px;
    }
    p {
        font-size: x-small;
        color: $purple;
    }   

}

//top footer menu rules

.menu_list {
    @include flex-column;

    h6 {
    padding: 10px;
    margin-top: 10px;
    }
    ul {                
        list-style-type: none;
        padding: 0;

        li {                
            display: block;
            margin: 0 10px;
            font-size: 11px;
            min-height: 20px;
            padding-bottom: 5px;
            border-bottom: 1px solid $orange;
            &:hover {
                border-bottom: 1px solid $purple;
            }


            .list_decoration {
                width: 10px;
                min-height: 20px;
                margin-right: 2px;
                float: left;
                font-size: 0.8em;
                font-weight: 400;
            }


            a {
                
                text-decoration: none;
                color: $indigo;
                padding: 0;
                &:hover {                        
                    color: $orange;
                }
            }
        }
    }
}


//bottom footer rules

.footer_bottom_container {
    height: 50px;
    border-top: 1px solid $blue;

    .copyright {
        color: $indigo;
        font-size: xx-small;

        .copyright_icon {
            padding-bottom: 2px;
        }

        

        a {
            color: $orange;
            text-decoration: none;
            &:hover {
                color: $purple;
            }
        }
    }

    .footer-right {
        li {
            @include li-menu-horizontal;
            margin: 15px 5px;

            .fa-facebook-f {
                @include brand-icons;
                padding: 10px;
                background-color: #3c5997;
            }

            .fa-twitter {
                @include brand-icons;
                background-color: #56acee;
                padding: 10px;
            }

            .fa-instagram {
                @include brand-icons;
                background-color: #3f729b;
                padding: 10px;
            }

            .fa-youtube {
                @include brand-icons;
                background-color: #ce201f;
                padding: 10px;
            }
        }
    }
}

</style>