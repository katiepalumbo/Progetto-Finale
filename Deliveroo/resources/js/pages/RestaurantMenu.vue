<template>
  <div>
      <div class="row m-5">
        <div v-for="user in users" :key="user.name">
            <div class="card col-4" v-if="user.slug == test">
                <div class="card-body">
                    <h5 class="card-title">{{user.restaurant_name}}</h5>
                </div>
                <div v-for="item in user.items" :key="item.id">
                    <h5>{{item.item_name}}</h5>
                </div>
            </div>
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
            items:[],
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

        // getItems(){
        //     axios.get('/api/items').then(response => {
        //         this.items = response.data.results.data;
        //         // console.log(response.data.results.data)
        //         // console.log('items')
        //     })

        //     .catch(error => {
        //         console.log(error);
        //     })

        // },

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
