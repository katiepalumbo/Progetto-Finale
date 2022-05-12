<template>
    <main>
       <div class="container">
           <h1>Benvenuti in Deliveboo!!</h1>
           <div class="row">
               <form action="" class="row" @submit.prevent="filteredType()">
                    <div v-for="typex in types" :key="typex.id">
                        <div>
                            <input class="form-check-input" type="checkbox" v-model="selected" :value="typex.id" :id="'typex_' + typex.id">
                            <label class="form-check-label" :for="'typex_' + typex.id">{{typex.name}}</label>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Cerca</button>
                    </div>
               </form>
            </div>

            <div class="row m-5">
               <div class="col-4 " v-for="user in users" :key="user.id">
                    <Singolo
                        :title='user.restaurant_name'
                        :type='user.type'
                        :slug='user.slug'
                    />

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
            ]
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
                    console.log(response.data.results)
                    //console.log('aaaaaaaaaaaaa')
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

<style>

</style>
