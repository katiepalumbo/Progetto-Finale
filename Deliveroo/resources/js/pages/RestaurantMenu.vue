<template>
  <div>
      <div class="row m-5">
        <div class="col-4 " v-for="item in items" :key="item.id" >
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{item.item_name}}</h5>
                    {{$route.params.slug}}
                </div>
            </div>
        </div>
      </div>
  </div>
</template>

<script>
export default {
    name: 'RestaurantMenu',
    data: function(){
        return {
            items:[],
        }
    },

    methods: {

        getItems() {
            axios.get('http://127.0.0.1:8000/api/items/').then((response) => {

              this.items = response.data.results;

            });
        },
    },

    created: function(){
        this.getItems();
    }
}
</script>

<style>

</style>