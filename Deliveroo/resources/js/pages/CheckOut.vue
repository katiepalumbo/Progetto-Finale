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
        <h3>{{this.$route.params.price}}.00</h3>

        <button type="button" class="btn btn-danger m-2" @click="testPagato()">PAGA</button>

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
        }
    },



    methods: {
        getItemCart(){
            const filtcart = this.$route.params.cart;
            const cart = this.$route.params.cart;
            const slugCart = this.$route.params.slug;
            // console.log(slug)
            console.log('/api/user/' + slugCart + '/' + cart + '/' + filtcart)

            axios.get('/api/user/' + slugCart + '/' + filtcart + '/' + filtcart).then(response => {
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
        }
    },

    created() {
        this.getItemCart();
    }

}
// console.log(this.$route.params.slug.cart)
</script>

<style>

</style>
