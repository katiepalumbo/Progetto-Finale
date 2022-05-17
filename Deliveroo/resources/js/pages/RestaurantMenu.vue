<template>
    <div>
        <div class="row m-5">
            <h2>Nome ristorante</h2>
            <div class="card col-12">
                <div class="card-body" v-if="users != null">
                    <h5 class="card-title">{{users.restaurant_name}}</h5>
                    <img class="card-img-top" :src="`${users.user_cover}`">
                </div>
            </div>

            <h1>{{newCart}}</h1>
            <button type="button" class="btn btn-danger col col-2" id="add" @click="clear()" @onclick="window.location.reload()">PULISCI CARRELLO</button>
            <div class="flex">

                <div action="" class="row first-box" >
                    <div class="p-2 col-4" v-for="item in items" :key="item.id">
                        <div class="card p-4">
                            <!--<img class="card-img-top" :src=>-->
                            <h1>{{item.item_name}}</h1>
                            <span class="py-2">{{item.description}}</span>
                            <h4 class="py-2">{{item.price}}</h4>
                            <img :src="`${item.image}`" alt="">
                            <span>AGGIUNGI PIATTO</span>
                            <button type="submit" @click="addToCart(item.id)" class="btn btn-warning">test</button>

                            <!-- <input class="form-check-input box" type="checkbox" v-model="cart" :value="item.id" :id="'item_' + item.id"> -->


                        </div>
                    </div>
                    <!-- <div>
                        <button type="submit" class="btn btn-warning mt-4">AGGIUNGI PIATTI AL CARRELLO</button>
                    </div> -->
                </div>

                <div class="carrello">
                    <h1 class="m-2">carrello</h1>
                    <!-- <div class="card-box" v-if="dati != []">
                        <div class="card" v-for="dato in dati" :key="dato.name">
                            <div v-if="dato.visible = 1">
                                <h3>{{dato.item_name}}</h3>
                                <h5>{{dato.price}}</h5>
                            </div>
                        </div>

                    </div> -->

                    <div class="card-box">
                        <div class="card" v-for="dato in dati2" :key="dato.name">
                        <div ></div>
                            <div v-if="dato.visible = 1">
                                <h3>{{dato.item_name}}</h3>

                                <h5 v-if="dato.quantity != 1">{{dato.price}}.00€</h5>
                                <h5 v-else>{{dato.price}}</h5>

                                <h5>{{dato.quantity}}</h5>
                                <button type="submit" @click="delate(dato.id)" class="btn btn-danger">delate</button>

                                <button type="button" class="btn btn-danger" id="subtract" @click="decrease(dato.id)">-</button>
                                <button type="button" class="btn btn-danger" id="add" @click="increase(dato.id)">+</button>

                            </div>
                        </div>

                    </div>

                    <h1 class="mt-4">Totale</h1>

                    <h3 v-if="totale != 0">{{totale}}.00</h3>
                    <h3 v-else>{{newTotale}}.00</h3>

                    <router-link class="btn btn-primary"  :to="{name: 'checkout', params:{cart: newCart, price: totale}}">vai al pagamento</router-link>
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
            users: [],
            items: [],

            dati: [],
            dati2: [],
            altriDati: [],

            test: this.$route.params.slug,
            cart:[],

            totale: null,
            totale2: null,
            newTotale: null,

            newCart: null,

            aaa: null,
            bbb: null,

            event: {},



        }
    },

    methods: {
        getSlug(){
            const slug = this.$route.params.slug;
            // console.log(slug)
            // console.log('/api/users/' + slug)

            axios.get('/api/user/' + slug).then(response => {
                this.users = response.data.users;
                this.items = response.data.items;
                // console.log(response.data.users);
                console.log(response.data.items);
                // console.log('ddddddd');
            })

            .catch(error => {
                console.log(error);
            })

        },

        addToCart(id){
            const slug = this.$route.params.slug;
            this.cart.push(id);

            var arrTwo = this.cart;
            const filteredArray = arrTwo.filter(function(ele , pos){
                return arrTwo.indexOf(ele) == pos;
            })
            console.log(filteredArray);

            this.cart = filteredArray


            // for (let index = 0; index < filteredArray.length; index++) {
            //     if(filteredArray[index] != id) {
            //         this.dati.push(response.data.results)
            //         console.log(filteredArray[index]);
            //     }
            // }

            for (let index = 0; index < this.cart.length; index++) {
                console.log(this.cart[index]);
                this.dati2 = []
                this.dati = []
                this.totale = null

                axios.get('/api/user/' + slug + '/' + this.cart[index]) .then(response =>{

                    this.dati.push(response.data.results)

                    this.dati2=this.dati.flat()

                    const array1 = response.data.price;

                    const initialValue = 0;
                    const sumWithInitial = array1.reduce(
                    (previousValue, currentValue) => previousValue + currentValue,
                        initialValue
                    );

                    console.log(sumWithInitial);
                    this.totale += sumWithInitial;

                    if (localStorage.totale) {
                        this.newTotale = localStorage.totale;
                    }

                    if (localStorage.cart) {
                        this.newCart = localStorage.cart;
                    }
                })

            }


        },

        getItemCart(){

            const cart = this.newCart;
            const slug = this.$route.params.slug;
            console.log('/api/user/' + slug + '/' + cart + '/' + this.newCart)
            console.log(this.newCart)

            axios.get('/api/user/' + slug + '/' + cart + '/' + this.newCart).then(response => {
                this.dati.push(response.data.results);
                this.dati2=this.dati.flat()

                console.log(response.data.results);
                console.log('wwwwwwwwww');
            })

            // .catch(error => {
            //     console.log(error);
            // })

            this.cart = []

            if(this.newCart == null) {
                this.totale = 0;
            } else {
                this.totale = Number(this.newTotale)
                // this.$newCart = explode(",", this.$newCart);
                // this.cart = this.newCart.split(',')

                const vvv = this.newCart.split('')

                for (let index = 0; index < vvv.length; index++) {

                    if(this.newCart[index] != ',') {
                        this.ggg = Number(this.newCart[index])
                        this.cart.push(this.ggg)
                    }

                    // console.log(this.aaa[index])
                    console.log('ppppppppppppppppp')

                }
            }
        },

        increase(id) {

            for (let index = 0; index < this.dati2.length; index++) {
                if(this.dati2[index].id == id) {
                    this.element = Number(this.dati2[index].quantity);
                    this.price = Number(this.dati2[index].price);

                    if(this.element == 20){
                        this.test = 20
                        this.test2 = this.price
                    } else if (this.element == 1) {
                        this.test = this.element + 1
                        this.test2 = (this.price * this.test)
                    } else {
                        this.test = this.element + 1
                        this.test2 = (this.price + (this.price/(this.test-1)))
                    }

                    this.dati2[index].quantity = this.test;
                    this.dati2[index].price = this.test2;

                    // console.log(this.element)
                    // console.log(this.price)

                    this.totale += (this.test2/(this.test));
                    console.log(this.totale);

                    if (localStorage.totale) {
                        this.newTotale = localStorage.totale;
                    }
                }
            }
        },

        decrease(id) {

            for (let index = 0; index < this.dati2.length; index++) {
                if(this.dati2[index].id == id) {
                    this.element = Number(this.dati2[index].quantity);
                    this.price = Number(this.dati2[index].price);

                    if(this.element == 1){
                        this.test = 1
                        this.test2 = this.price
                    } else if (this.element == 20){
                        this.test = this.element - 1
                        this.test2 = (this.price * this.test)
                    } else {
                        this.test = this.element - 1
                        this.test2 = (this.price - (this.price/(this.test+1)))
                    }


                    this.dati2[index].quantity = this.test;
                    this.dati2[index].price = this.test2;

                    // console.log(this.element)
                    // console.log(this.price)

                    this.totale -= this.price;
                    console.log(this.totale);

                    if (localStorage.totale) {
                        this.newTotale = localStorage.totale;
                    }

                    if(this.totale < 0) {
                        this.totale = 0
                    }
                }
            }
        },

        delate(id) {

            for (let index = 0; index < this.dati2.length; index++) {
                if(this.dati2[index].id == id) {

                    this.dati2[index] = {}
                    console.log(this.dati2[index])
                    console.log(this.dati2)
                }
            }
        },

        clear() {
            this.newCart = [],
            this.cart = []
            window.location.reload()
        }

    },

    mounted() {

        this.getItemCart();

        if (localStorage.totale) {
            this.newTotale = localStorage.totale;
        }

        this.aaa = this.newTotale;
        this.bbb = this.newCart;

    },

    watch: {
        cart(newCart) {
        localStorage.cart = newCart;
        console.log(localStorage);
        },

        totale(newTotale) {
        localStorage.totale = newTotale;
        console.log(localStorage);
        }

    },

    created() {
        this.getSlug();
        this.addToCart();

        if (localStorage.cart) {
            this.newCart = localStorage.cart;
        }

        if (localStorage.totale) {
            this.newTotale = localStorage.totale;
        }
    }
}
</script>

<style lang="scss" scoped>

.card-img-top {
    max-width: 50px;
}
.flex{
    display: flex;

    .first-box{
        width: 60%;
        padding: 0px 30px;
        overflow-y: auto;
    }
    .carrello{
        width: 40%;
        height: 510px;
        background-color: aqua;

        margin: 10px 0px;

        .card-box{
            height: 320px;
            overflow-y: auto;
            margin: 10px;
        }

        .card{
            margin: 10px;

        }
    }

    .box{
        width: 100%;
        height: 30px;
        text-align: center;
    }
}

</style>
