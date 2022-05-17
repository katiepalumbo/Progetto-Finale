<template>
  <div class="container home-gallery-container">
        <div class="row mt-5 row-cols-10 m-auto">
            <div class="col-5">
                <div class='row'>
                    <router-link class="col-11 img-container casalinga" :to="{name: 'menu'}">
                        <h1 class="overlay-text">Cucina Casalinga</h1>
                    </router-link>    
                </div>
                <div class="row mt-1">
                    <h5>Ti piacerebbe un piatto come lo fa mammá?</h5>
                </div>
                <div class="row mt-1">
                    <router-link :to="{name: 'menu'}">Vedi i ristoranti consigliati</router-link>
                </div>
            </div>
            
            <div class="col-7">
                <div class='row'>
                    <router-link class="col-11 img-container dolci" :to="{name: 'menu'}">
                        <h1 class="overlay-text">Dessert, gelati, dolci</h1>
                    </router-link>    
                </div>
                <div class="row mt-1">
                    <h5 class="text-right">Gelati, dolci e dessert per tutti i gusti</h5>
                </div>
                <div class="row">
                    <router-link :to="{name: 'menu'}">Vedi i ristoranti consigliati</router-link>
                </div>
            </div>
        </div>
        <div class="row mt-5 row-cols-10 m-auto">
            <div class="col-7">
                <div class='row'>
                    <router-link class="col-11 img-container bevande" :to="{name: 'menu'}">
                        <h1 class="overlay-text">Bevande</h1>
                    </router-link>    
                </div>
                <div class="row mt-1">
                    <h5>Hai sete? Perché non aggiungere una bevanda al tuo ordine?</h5>
                </div>
                <div class="row">
                    <router-link :to="{name: 'menu'}">Vedi i ristoranti consigliati</router-link>
                </div>
            </div>
            
            <div class="col-5">
                <div class='row'>
                    <router-link class="col-11 img-container pane" :to="{name: 'menu'}">
                        <h1 class="overlay-text">Lievitati</h1>
                    </router-link>   
                </div>
                <div class="row mt-1">
                    <h5 class="text-right">Se manca pane a tavola è come non aver mangiato</h5>
                </div>
                <div class="row">
                    <router-link :to="{name: 'menu'}">Vedi i ristoranti consigliati</router-link>
                </div>
            </div>
        </div>
        <div class="row white-space">

        </div>




  </div>
</template>

<script>
export default {
    name: 'HomeGallery',
    data() {
        return {
            navLinks: [
                        {
                            to : 'menu',
                            name : 'Menù',                           
                        },
                ]
            }
        },
    

}
</script>

<style scoped lang="scss">

@import '../../sass/_variables.scss';

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box
    ;
    background-color: $body-bg;
}

.home-gallery-container {
    max-width: 80%;
    margin: auto;
    position: relative;
    align-items: center;
    justify-content: center;

    .img-container {
        height: 150px;        
        background-size: cover;

    }

    .casalinga {
        background-image: url('../assets/images/tomato-basil.jpg');
        
    }

    .dolci {
        background-image: url('../assets/images/pink-cake.jpg');
        
    }

    .bevande {
        background-image: url('../assets/images/coke.jpg');
        background-position: center;
        
    }

    .pane {
        background-image: url('../assets/images/pane.jpg');
        background-position: center;
        
    }

    .overlay-text {
        color: white;
        @include title-font;
        padding: auto;
        //transform: translate (-90%, -90%);
        //position: absolute;
        background-color: transparent;
        height: 100%;
        width: 100%;
        line-height: 150px;
        text-align: center;
        text-shadow: $purple;
        text-decoration: none;
    }

    .white-space {
        min-height: 100px;
    }



}



</style>