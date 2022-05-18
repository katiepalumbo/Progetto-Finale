<template>
    <main>

       <div class="my_container-menu">

           <div class="my_row-menu-1">

               <form action="" class="my_box" @submit.prevent="filteredType()">
                    <div class="my_box-input" v-for="typex in types" :key="typex.id">
                        <div class="my_input-item checkbox path">
                            <input class="my_input" type="checkbox" v-model="selected" :value="typex.id" :id="'typex_' + typex.id">
                            <label class="my_label-input" :for="'typex_' + typex.id">{{typex.name}}</label>
                        </div>
                    </div>
                    <div class="box-btn">
                        <button type="submit" class="btn-header">Cerca</button>
                    </div>
               </form>

            </div>

            <div class="my_box-title">
                <h1 class="menu-title">Benvenuto nella sezione ristoranti!</h1>
                <span class="menu-text">Seleziona un ristorante per scoprire il menù!</span>
            </div>

            <div class="my_row-menu-2">

                <div class="my_box-items">
                    <div class="my_col-menu " v-for="user in users" :key="user.id">

                        <Singolo
                            :title='user.restaurant_name'
                            :type='user.type'
                            :slug='user.slug'
                            :user_cover='user.user_cover'
                        />

                    </div>
                </div>
                    
            </div>
       </div>

    </main>
</template>

<script>
    import Singolo from '../components/Singolo.vue'

    export default {
        name: "Menu",
        components: {
            Singolo
        },

        data() {
            return {
                types: null,
                selected: [],
                users: [],

                navLinks: [
                    {
                        to : 'restaurant-menu',
                        name : 'menu',
                    },
                ],

            };
        },

        methods:{

            getTypes(){
                // prelevo tutte le tipologie
                axios.get('api/types').then(response =>{
                    this.types = response.data.results;
                })
            },

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

            filteredType(){
                this.users = [];

                console.log('api/users/'+ this.selected)

                if(this.selected.length > 0){
                    axios.get('api/users/'+ this.selected) .then(response =>{
                        this.users = response.data.results;
                        //console.log(response.data.results)
                        //console.log('bbbbbbbbbbbb')
                    })
                }else{
                    this.getUsers();
                }

            }
        },

        created(){
            this.getTypes();
            this.getUsers();
        },
    }
</script>

<style lang="scss">

    @import '../../sass/_variables.scss';

    .my_container-menu {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        position: relative;

        .my_row-menu-1 {
            width: 15%;
            height: calc(100vh - 65.6px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
            background-clip: $body-bg;
            display: flex;
            justify-content: center;
            align-items: center;
            position: sticky;
            top: 65.6px;

            .my_box {
                width: 100%;
                display: flex;
                flex-direction: column;
                
                .my_box-input {
                    width: 100%;

                    .my_label-input {
                        font-size: 13px;
                        color: #FF4718;
                        margin-top: 2px;
                        margin-left: 20px;
                        cursor: pointer;
                    }

                    .my_input-item {
                        display: flex;
                        flex-direction: row-reverse;
                        justify-content: space-between;
                        align-items: center;
                        margin: 2.5px 0px;
                        @include title-font;

                        .my_input {
                            margin-right: 15px;
                            margin-top: 2px;
                        }

                    }
                }

                .box-btn {
                    height: 40px;
                }

                .btn-header {
                    width: fit-content;
                    margin-left: 20px;
                    margin-bottom: 3px;
                    margin-top: 5px;
                    background-color: $purple;
                    border-radius: 4px;
                    border: 0px;
                    padding: 7px 10px;
                    color: #ffffff;
                    font-size: 13px;
                    font-family: "Raleway", sans-serif;
                    font-weight: 700;
                    &:hover {
                        background-color: #7048ab;
                    }
                }
            }
        }

        .my_row-menu-2 {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 150px;
            margin-bottom: 40px;
            position: relative;
            top: 0;
            width: 85%;
            align-self: flex-end;

            .my_box-items {
                display: flex;
                flex-direction: row;
                justify-content: center;
                margin-top: 26px;
                flex-wrap: wrap;
                width: 100%;
                align-self: flex-end;
            }

            .my_col-menu {
                padding: 10px 10px;
            }
        }

        .my_box-title {
            display: flex;
            width: 84%;
            flex-direction: column;
            align-items: center;
            position: absolute;
            top: 90px;
            right: 0;

            .menu-title {
                color: #9538f2;
                @include title-font;
            }

            .menu-text {
                color: #FF4718;
                @include subtitle-font;
            }
        }
    }

</style>
