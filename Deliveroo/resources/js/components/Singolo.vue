<template>
    <div class="my_card">

        <router-link :to="{name: 'restaurant', params:{slug: slug}}">

             <div class="my_card-header">
                <!-- <img v-if="user_cover.contains(https)" :src="user_cover" alt="url-img">
                <img v-else src="resources/js/assets/images/cake.jpg"  alt="url-image"> -->
                <img :src="user_cover" alt="rover" />
            </div>

            <div class="my_card-body">
            
                <h4 class="card-title">{{title}}</h4>

                <div class="box-tag">
                    <span class="my_tag" v-for="test in type" :key="test.id">
                        {{test.name}}
                    </span>
                </div>

            </div>

        </router-link>

    </div> 
    
</template>

<script>
export default {
    name: "Singolo",
    props: ['title', 'type', 'slug', 'user_cover'],

    data () {
        return {   
        }           
        
    }
}
</script>

<style lang="scss" >

    @import '../../sass/_variables.scss';

    .my_card {
        margin: 10px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        position: relative;
        display: flex;
        width: 210px;
        height: 260px;

        .my_card-header {
            height: 100%;
            

            img {
                height: 100%;
                width: 100%;
                object-fit: cover;
                transition: 0.90s;
                outline: 1px solid rgba(255, 255, 255, 0.5);
                opacity: 0.8;
                outline-offset: -8px;
            }
        }

        img:hover{
            transform: scale(1.30);
            opacity: 1;
        }

        .my_card-body {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-start;
            position: absolute;
            bottom: 0px;
            width: 100%;
            height: 110px;
            z-index: 3;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 15px;
            padding-top: 15px;
            background-color: rgba(0, 0, 0, 0.5);
            

            .box-tag {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;

                .my_tag {
                    background: #cccccc;
                    border-radius: 50px;
                    background-color: #FF4718;
                    font-size: 10px;
                    margin: 3px 2px;
                    color: #fff;
                    padding: 2px 10px;
                    text-transform: uppercase;
                }
            }

            .card-title {
                text-transform: uppercase;
                margin: 6px 4px;
                color: #fff;
                @include title-font;
            }
        }

        .btn-card {
            background-color: #9538f2; 
            box-shadow: #4e1f7c 2px 2px 0px;
            margin-top: 7px;
            text-transform: uppercase;
            text-decoration: none;
            color: #fff;
            margin-left: 4px;
            padding: 6px 8px;
            font-size: 13.5px;
            border-radius: 8px;
            transition: transform 200ms, box-shadow 200ms;
        }

        .btn-card:hover {
            transform: translateY(2px) translateX(2px);
            box-shadow: #4e1f7c 0px 0px 0px;
        }
    }

</style>


