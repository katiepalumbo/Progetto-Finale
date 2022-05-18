<template>
    <div class="my_container-check">

        <div class="my_check-left">
            <div class="my_container-info ms-4" v-if="users != null">

                <img class="my_img-info " :src="`${users.user_cover}`" />
                <div class="my_box-info">
                    <h2 class="my_info-name">{{users.restaurant_name}}</h2>
                    <span class="my_info-city">{{users.user_city}}</span>
                    <span class="my_info-text">
                        <span>Descrizione</span>
                        {{users.description}}
                    </span>
                </div>
                
            </div>
    
            <div class="my_container-items">
 
                <div v-for="item in items" :key="item.id" class="my_card-items">

                    <div class="my_item-img">
                        <img :src="`${item.image}`" alt="">
                    </div>

                    <div class="my_item-info">
                        <h4 class="title-info">{{item.item_name}}</h4>
                        <p class="info-item">{{item.description}}</p>
                        <div>
                            <span class="price-item">{{item.price}}€</span>
                            <button type="submit" @click="addToCart(item.id)" class="btn btn-add">Aggiungi</button>
                        </div>
                    </div>
                        
                </div>
                
            </div>
        </div>

        <div class="my_container-cart">

            <div class="box-title">
                <h2 class="my_title-cart">Carrello</h2>
            </div>
            
            <div class="my_box-cart">
                <div v-for="dato in dati2" :key="dato.name">
                    <div class="my_card-cart" v-if="dato.visible = 1">

                        <div class="box-cart-img">
                            <!-- <img src="https://c0.wallpaperflare.com/preview/603/618/344/osechi-syogatsu-new-year-january.jpg" alt=""> -->
                            <img :src="dato.image" alt="">
                        </div>

                        <div class="box-cart-info">

                            <h4>{{dato.item_name}}</h4>
                            <span class="cart-price" v-if="dato.quantity != 1">{{dato.price}}.00€</span>
                            <span class="cart-price" v-else>{{dato.price}}€</span>

                        </div>

                        <div class="box-cart-btn">

                            <button type="button" class="btn-quantity" id="subtract" @click="decrease(dato.id)">-</button>
                            <span class="quantity">{{dato.quantity}}</span>
                            <button type="button" class="btn-quantity border-top" id="add" @click="increase(dato.id)">+</button>

                            <div class="box-btn-delate">
                                <button type="submit" @click="delate(dato.id)" class="btn-delate btn">x</button>
                            </div> 

                        </div>

                    </div>
                </div>
            </div>

            <div class="box-checkout">
                <h3 class="tot">Totale</h3>
                <div class="line"></div>
                <span v-if="totale != 0">{{totale}}.00€</span>
                <span v-else>{{newTotale}}.00€</span>
                <button type="button" class="btn btn-svuota" id="add" @click="clear()" @onclick="window.location.reload()">Svuota</button>
            </div>

            <router-link class="btn btn-checkout"  :to="{name: 'checkout', params:{cart: newCart, price: totale}}">Vai al pagamento</router-link>
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
                this.dati = []
                this.totale = null

                if(this.cart[index] == undefined)  {
                    this.cart[index] = 0
                }



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
                        this.newCart = this.cart;
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

            this.cart = []

            if(this.newCart == null) {
                this.totale = 0;
            } else {
                this.totale = Number(this.newTotale)
                const vvv =  this.newCart.split(',')

                console.log(vvv)
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

            for (let index = 0; index < this.cart.length; index++) {
                if(this.cart[index] == id) {

                    this.cart[index] = 0
                    console.log(this.cart[index])
                    console.log(this.cart)
                }
            }

            this.addToCart()
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
    @import '../../sass/_variables.scss';

    .my_container-check {
        margin-top: 65.5px;
        display: flex;
        flex-direction: row;
        justify-content: center;

        .my_check-left {
            width: 70%;
            margin-top: 20px;
        }

        .my_container-info {
            width: 92%;
            height: 250px;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: row;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);

            .my_img-info {
                width: 270px;
                height: 100%;
                object-fit: cover;
            }

            .my_box-info {
                display: flex;
                flex-direction: column;
                margin-left: 25px;
                margin-top: 30px;

                .my_info-name {
                    @include title-font;
                    text-transform: uppercase;
                    color: $darkOrange;
                }

                .my_info-city {
                    @include subtitle-font;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    margin-top: 10px;
                    color: $purple;
                }

                .my_info-text {
                    @include subtitle-font;
                    margin-top: 25px;
                    width: 90%;
                    color: $purple;
                    display: flex;
                    flex-direction: column;

                    span {
                        color: $darkOrange; 
                        @include title-font;
                        margin-bottom: 0px;
                    }
                }

            }    
        }

        .my_container-items {
            width: 93.5%;
            margin-left: 15px;
            margin-top: 40px;
            margin-bottom: 40px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;

            .my_card-items {
                min-width: 413px;
                min-height: 130px;
                max-width: 413px;
                max-height: 150px;
                margin: 10px 13px;
                border-radius: 10px;
                overflow: hidden;
                display: flex;
                flex-direction: row;
                box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);

                .my_item-img {
                    width: 120px;
                    height: 100%;

                    img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }
                }

                .my_item-info {
                    width: 60%;
                    height: 100%;
                    margin-left: 20px;

                    .title-info {
                        margin-bottom: 0px;
                        @include title-font;
                        color: $darkOrange;
                        margin-top: 10px;
                    }

                    .info-item {
                        margin-bottom: 0px;
                        margin-top: 7px;
                        font-size: 14px;
                        @include subtitle-font;
                        color: $purple;
                    }

                    div {
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        margin-top: 10px;
                        margin-bottom: 5px;

                        .price-item {
                            margin-bottom: 0px;
                            font-size: 14px;
                            @include subtitle-font;
                            color: $purple;
                        }

                        .btn-add {
                            width: fit-content;
                            margin-left: 40px;
                            margin-bottom: 3px;
                            background-color: #FF4718;
                            border-radius: 4px;
                            color: #ffffff;
                            font-size: 13px;
                            font-family: "Raleway", sans-serif;
                            font-weight: 700;
                            &:hover {
                                background-color: #be2d05;
                            }
                        }   
                    }
                }
            }
        }

        .my_container-cart {
            margin-top: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 25%;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
            height: fit-content;
            min-height: 20vh;
            max-height: 80vh;
            margin-bottom: 50px;
            position: sticky;
            top: 85.5px;
            bottom: 30px;
            margin-left: 10px;


            .box-title {
                display: flex;
                justify-content: center;
                border-bottom: 1px solid $purple;
                height: 50px;
                width: 95%;
                margin-bottom: 15px;

                .my_title-cart {
                    margin-top: 10px;
                    color: $darkOrange;
                    @include title-font;
                }
            }
            

            .my_box-cart {
                width: 91%;
                max-height: 310px;
                border-radius: 5px;
                overflow-y: scroll;
                display: flex;
                flex-direction: column;
                box-shadow: -1px 7px 11px -10px rgba(0, 0, 0, 0.2);
                &::-webkit-scrollbar {
                    width: 4px;
                }
                &::-webkit-scrollbar-thumb {
                    background-color: #7b787c;
                    border-radius: 10px;
                }
                

                .my_card-cart {
                    position: relative;
                    margin-top: 15px;
                    margin-bottom: 10px;
                    width: 94%;
                    height: 72px;
                    display: flex;
                    flex-direction: row;
                    box-shadow: 0px 0px 13px -2px rgba(0, 0, 0, 0.2);
                    

                    .box-cart-img {
                        width: 95px;
                        height: 100%;

                        img {
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                        }
                    }

                    .box-cart-info {
                        width: 80%;
                        display: flex;
                        flex-direction: column;
                        margin-left: 10px;
                        margin-top: 12px;

                        h4 {
                            @include title-font;
                            font-size: 14px;
                            color: $purple;
                            margin-bottom: 0;
                        }

                        .cart-price {
                            color: $darkOrange;
                            margin-top: 10px;
                        }

                    }

                    .box-cart-btn {
                        height: 100%;
                        position: relative;
                        display: flex;
                        align-items: flex-end;
                        flex-direction: column;

                        .btn-quantity {
                            background-color: rgba($color: #9461e2, $alpha: 0.5);
                            border: 0px;
                            display:inline-block;
                            cursor:pointer;
                            color:#ffffff;
                            font-family:Arial;
                            font-size:17px;
                            width: 40px;
                            height: 50%;
                            &:hover {
                                background-color: #7048ab;
                            }
                        }

                        .quantity {
                            position: absolute;
                            top: 19px;
                            right: 50px;
                            color: $darkOrange;
                            @include title-font;
                            font-weight: 400;
                            font-size: 21px;
                        }

                        .box-btn-delate {
                            position: absolute;
                            top: -11px;
                            right: -11px;

                            .btn-delate {
                                border-radius:28px;
                                display:inline-block;
                                cursor:pointer;
                                font-family:Arial;
                                font-size:14px;
                                padding:1px 8px;
                                text-decoration:none;
                                background-color: $darkOrange;
                            }                      
                        }
                    }
                }
            }

            .box-checkout {
                height: 70px;
                width: 94%;
                display: flex;
                flex-direction: row;
                align-items: center;
                margin-top: 5px;

                .tot {
                    color: $darkOrange;
                    @include title-font;
                    font-weight: 400;
                    padding-right: 10px;
                }

                .line {
                    height: 40px;
                    margin-bottom: 4px;
                    width: 1px;
                    background-color: $darkOrange;
                }

                span {
                    color: $purple;
                    @include title-font;
                    font-weight: 400;
                    margin-left: 15px;
                    margin-bottom: 5px;
                }
            }

            .btn-checkout {
                width: 99.7%;
                background-color: #9461e2;
                border-radius: 5px;
                color: #ffffff;
                @include title-font;
                &:hover {
                    background-color: #7048ab;
                }
            }

            .btn-svuota {
                width: 25%;
                margin-left: 80px;
                background-color: $darkOrange;
                border-radius: 5px;
                color: #ffffff;
                @include title-font;
                &:hover {
                    background-color: #be2d05;
                }
            }
        }
    }

</style>
