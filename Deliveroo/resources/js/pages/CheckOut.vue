<template>
    <div>
      <!-- {{this.$route.params.slug.cart}} -->
      <!-- <div>
        {{this.$route.params.cart}}
        {{this.$route.params.slug}}
      </div> -->

        <h1>I tuoi prodotti</h1>
        <div class="row">
            <div class="card col-3" v-for="finito in finale" :key="finito.id">
                <h3>{{finito.item_name}}</h3>
                <h6>{{finito.description}}</h6>
            </div>
        </div>

        <h1 class="mt-4">Totale</h1>
        <h3>{{price}}.00</h3>

        <button type="button" class="btn btn-danger m-2" @click="testPagato($item.order)">PAGA</button>

        <h3 v-if="pagato != false">HAI PAGATO</h3>


    </div>
</template>

<script>
export default {
    name: 'CheckOut',
    data: function(){
        return {
            finale: [],
            pagato: false,
            price: this.$route.params.price
        }
    },



    methods: {
        getItemCart(){
            const filtcart = this.$route.params.cart;
            const slugCart = this.$route.params.slug;
            // console.log(slug)
            console.log('/api/user/' + slugCart + '/' + filtcart)

            axios.get('/api/user/' + slugCart + '/' + filtcart).then(response => {
                this.finale = response.data.results;

                console.log(response.data.results);
                console.log('wwwwwwwwww');
            })

            .catch(error => {
                console.log(error);
            })

        },

        testPagato() {
            this.pagato = true;

            const order = this.$route.params.cart;
            const filtcart = this.$route.params.cart;
            const slugCart = this.$route.params.slug;
            // console.log(slug)
            console.log('/api/user/' + slugCart + '/' + filtcart + '/'  + order)

            axios.post('/api/user/' + slugCart + '/' + filtcart + '/'  + order).then(response => {

                console.log(response.data.results);
                console.log('wwwwwwwwww');
            })

            .catch(error => {
                console.log(error);
            })


        }
    },

    created() {
        this.getItemCart();
    },

}
// console.log(this.$route.params.slug.cart)
</script>

<style>

</style>
