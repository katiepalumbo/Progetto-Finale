<template>
<div class="checkout">


    <div class="container">
      <!-- {{this.$route.params.slug.cart}} -->
      <!-- <div>
        {{this.$route.params.cart}}
        {{this.$route.params.slug}}
      </div> -->

        <h1>I tuoi prodotti</h1>
        <div class="row">
            <div class="my_item col-3 mx-3" v-for="finito in finale" :key="finito.id">
                <div class="row my-auto">
                    <img class="col-4" :src="`${finito.image}`" alt="">
                    <div class="col-7">
                        <h4>{{finito.item_name}}</h4>
                        <p>{{finito.description}}</p>
                        <p>{{finito.price}}</p>
                    </div>
                    
                </div>

            </div>
        </div>

        <table class="col-6 mt-4">
                <thead>
                    <tr>
                    <th scope="col">Piatto</th>
                    <th scope="col">Prezzo Singolo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="finito in finale" :key="finito.id">
                        <td>{{finito.item_name}}</td>
                        <!--<td>{{finito.quantity}}</td>-->
                        <td>{{finito.price}}</td>
                    </tr>
                    <tr>
                        <hr>
                    </tr>
                    <tr>
                        <td>Totale:</td>
                        <td class="total">{{price}}.00</td>
                    </tr>

                    <tr>
                        <td>
                            <button type="button" class="btn m-2" @click="testPagato()">PAGA ORA</button>
                            <p v-if="pagato != false">Ordine Completato - Grazie per aver comprato da Deliveboo</p>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
                </table>

        <!-- <h1 class="mt-4">Totale</h1>
        <ul v-for="finito in finale" :key="finito.id">
            <li>{{finito.item_name}}</li>
            <li>{{finito.price}}</li>
        </ul>
        <h3 class="total">{{price}}.00</h3> -->

        

        <!-- <div class="row">
            <div class="col">

                <form @submit.prevent="payment()">

                    <div class="form-group">
                        <label for="address">Via </label>
                        <input id="client_street" type="text" class="form-control"  name="client_street"  v-model="client_street" required autocomplete="client_street">
                    </div>

                    1<div class="form-group">
                        <label for="address">Città</label>
                        <input id="client_city" type="text" class="form-control"  name="client_city" v-model="client_city" required autocomplete="client_city">
                    </div> -->

                    <!-- <div class="form-group">
                        <label for="user_cell_number">Telefono </label>
                        <input placeholder="deve contenere almeno 10 cifre..." id="client_cell_number" type="number" class="client_cell_number" name="client_cell_number" v-model="client_cell_number" required autocomplete="client_cell_number" autofocus size="10">
                    </div>
                    <div class="form-group">
                        <label for="client_zip_code">Codice Postale</label>
                        <input placeholder="deve contenere almeno 5 cifre..." id="client_zip_code" type="number" class="client_zip_code" name="client_zip_code" v-model="client_zip_code" required autocomplete="client_zip_code" autofocus pattern="[0-9]{5}">
                    </div> -->

                    <!-- <button type="submit" class="btn btn-primary my-3">Invia</button>
                </form>

            </div>
        </div> -->

        




    </div>
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
        },
        testPagato() {
            this.pagato = true;
        },
    },
    created() {
        this.getItemCart();
    },
}
</script>

<style lang="scss">
    @import '../../sass/_variables.scss';


.checkout {
    background-image: url('../assets/images/pexels-lukas-349610.jpg'); 
    background-size: cover;
    width: 100vw;
    margin-top: -10px;

}
    .container {
        margin-top: 80px;
        
        

        h1 {
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            color: $purple;
        }
        

        .my_item {
            overflow: hidden;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            background-color: $body-bg;


            img {
                height: 150px;
                object-fit: cover;
                margin-left: -15px;

                
            }

            h4 {
                font-family: 'Raleway', sans-serif;
                font-weight: 700;
                line-height: 80%;
                color: $darkOrange;
                padding-top: 10px;
            }

            p {
                font-family: 'Tenor Sans', sans-serif;
                line-height: 80%;
                color: $purple;
            }
        }

        thead {
            font-family: 'Tenor Sans', sans-serif;
            color: $purple;

        }

        tbody {
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            color: $darkOrange;
        }

        .btn {
            background-color: $purple;
            color: $body-bg;
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            padding: 10px 100px;
            
        }
    }

</style>