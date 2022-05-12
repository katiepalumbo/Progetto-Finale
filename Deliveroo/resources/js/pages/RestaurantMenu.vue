<template>
  <div>
      <div class="row m-5">
        <div v-for="user in users" :key="user.name">
            <div class="card col-12" v-if="user.slug == test">
                <div class="card-body">
                    <h5 class="card-title">{{user.restaurant_name}}</h5>
                </div>
                <form @submit.prevent="addToCart()">
                    <div v-for="item in user.items" :key="item.id">
                    <!-- <h5>{{item.item_name}}</h5> -->
                    <input class="form-check-input" type="checkbox" v-model="cart" :value="item.id" :id="'item_' + item.id">
                    <label class="form-check-label" :for="'item_' + item.id">{{item.item_name}}</label>
                </div>
                <button type="submit" class="btn btn-primary">aggiungi al carrello</button>
                </form>
            </div>
        </div>
        <h1>carrello</h1>
        <div class="card col-12">
            
        </div>

         <!-- <div v-for="item in user.item" :key="item.id">
            <h5>{{item.item_name}}</h5>
        </div> -->
      </div>
  </div>
</template>

<script>
export default {
    name: 'RestaurantMenu',
    data: function(){
        return {
            element: null,
            users: [],
            test: this.$route.params.slug,
            cart:[],
        }
    },

    methods: {
        // getSlug(){
        //     const slug = this.$route.params.slug;
        //     // console.log(slug)
        //     // console.log('/api/users/' + slug)

        //     axios.get('/api/users/' + slug).then(response => {
        //         this.element = response.data;
        //         console.log(response.data)
        //         console.log('ddddddd')
        //     })

        //     .catch(error => {
        //         console.log(error);
        //     })

        // },

        getUsers(){
            axios.get('/api/users').then(response => {
                this.users = response.data.results;
                console.log(response.data.results)
                console.log('aaaaaaaaaaaaa')
            })

            .catch(error => {
                console.log(error);
            })

        },

        addToCart(){
            this.users = [];

                console.log('api/users/'+ this.cart)

                if(this.selected.length > 0){
                    axios.get('api/users/'+ this.cart) .then(response =>{
                        this.users = response.data.results;
                        //console.log(response.data.results)
                        //console.log('bbbbbbbbbbbb')
                    })
                }else{
                    this.getUsers();
                }

        }

    },

    mounted() {
        // this.getSlug();
        this.getUsers();
        // this.getItems();
    }
}
</script>

<style>

</style>
