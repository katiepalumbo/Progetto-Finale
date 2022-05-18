<template>
    <div id="aaa">
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

        <div class="row">
            <div class="col">

                <form @submit.prevent="payment()">

                    <div class="form-group">
                        <label for="address">Via </label>
                        <input id="client_street" type="text" class="form-control"  name="client_street"  v-model="client_street" required autocomplete="client_street">
                    </div>

                    1<div class="form-group">
                        <label for="address">Città</label>
                        <input id="client_city" type="text" class="form-control"  name="client_city" v-model="client_city" required autocomplete="client_city">
                    </div>

                    <!-- <div class="form-group">
                        <label for="user_cell_number">Telefono </label>
                        <input placeholder="deve contenere almeno 10 cifre..." id="client_cell_number" type="number" class="client_cell_number" name="client_cell_number" v-model="client_cell_number" required autocomplete="client_cell_number" autofocus size="10">
                    </div>

                    <div class="form-group">
                        <label for="client_zip_code">Codice Postale</label>
                        <input placeholder="deve contenere almeno 5 cifre..." id="client_zip_code" type="number" class="client_zip_code" name="client_zip_code" v-model="client_zip_code" required autocomplete="client_zip_code" autofocus pattern="[0-9]{5}">
                    </div> -->

                    <button type="submit" class="btn btn-primary my-3">Invia</button>
                </form>

            </div>
        </div>

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
            price: this.$route.params.price,
            rest_id: this.$route.params.rest_id,
            client_street: null,
            client_city: null,
            client_cell_number: null,
            client_zip_code: null,
            error: false
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
        payment(){
            // const filtcart = this.$route.params.cart;
            const slugCart = this.$route.params.slug;
            if(this.client_street && this.client_city){
                axios.post('/api/user/' + slugCart + '/pay', {
                    client_street: this.client_street,
                    client_city: this.client_city,
                    // client_zip_code: this.client_zip_code,
                    // client_cell_number: this.client_cell_number,
                    price: this.price,
                    rest_id: this.rest_id
                }).then(response =>{
                    response.data.success == t
                    console.log('ok')
                })
                .catch(error => {
                    // handle error
                    console.log(error.response.data.errors);
                    this.errors = error.response.data.errors;
                    console.log('no')
                })
            }else{
                this.error = true;
            }
        }
    },
    created() {
        this.getItemCart();
    },
}
</script>

<style lang="scss">
    @import '../../sass/_variables.scss';
    #aaa {
        padding: 40px;
    }


</style>
