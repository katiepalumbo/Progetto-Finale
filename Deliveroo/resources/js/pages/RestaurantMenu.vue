<template>
  <div>
      <div class="row m-5">
        <!-- <div class="col-4 " v-for="item in items" :key="item.id" >
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{item.item_name}}</h5>
                    {{$route.params.slug}}
                </div>
            </div>
        </div> -->
      </div>
  </div>
</template>

<script>
export default {
    name: 'RestaurantMenu',
    data: function(){
        return {
            element: null
        }
    },

    methods: {
        getUsers(){
            const slug = this.$route.params.slug;
            console.log(slug)
            console.log('/api/users/' + slug)

            axios.get('/api/users/' + slug).then(response => {
                this.element = response.data.results;
                console.log(response.data)
                console.log('ddddddd')
            })

            .catch(error => {
                console.log(error);
            })

        },

        // getSlug(){
        //     const slug = this.$route.params.slug;
        //     console.log('api/users/' + slug);
        //     console.log(slug);

        //     axios.get('api/users/'+slug).then(response => {

        //         this.element = response.data.results;
        //         console.log(response);
        //         console.log('cccccccccccc');

        //     });

        // },
    },

    mounted() {
        this.getUsers();
        // this.getSlug();
    }
}
</script>

<style>

</style>
