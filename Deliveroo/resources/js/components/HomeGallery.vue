<template>
  <div class="container home-gallery-container">
        <div class="row mt-5 row-cols-10 m-auto">
            <div class="col-5">
                <div class='row'>
                    <div class="col-11 img-container casalinga">
                        <h1 class="overlay-text">Cucina Casalinga</h1>
                    </div>    
                </div>
                <div class="row mt-1">
                    <h5>HERE'S SOME INFO ABOUT THIS</h5>
                </div>
                <div class="row mt-1">
                    <a href="#">HERE'S A LINK ABOUT THIS</a>
                </div>
            </div>
            
            <div class="col-7">
                <div class='row'>
                    <div class="col-11 img-container dolci">
                        <h1 class="overlay-text">Dessert, gelati, dolci</h1>
                    </div>    
                </div>
                <div class="row mt-1">
                    <h5 class="text-right">HERE'S SOME INFO ABOUT THIS</h5>
                </div>
                <div class="row">
                    <a href="#">HERE'S A LINK ABOUT THIS</a>
                </div>
            </div>
        </div>
        <div class="row mt-5 row-cols-10 m-auto">
            <div class="col-7">
                <div class='row'>
                    <div class="col-11 img-container bevande">
                        <h1 class="overlay-text">Bevande</h1>
                    </div>    
                </div>
                <div class="row mt-1">
                    <h5>HERE'S SOME INFO ABOUT THIS</h5>
                </div>
                <div class="row">
                    <a href="#">HERE'S A LINK ABOUT THIS</a>
                </div>
            </div>
            
            <div class="col-5">
                <div class='row'>
                    <div class="col-11 img-container pane">
                        <h1 class="overlay-text">Lievitati</h1>
                    </div>     
                </div>
                <div class="row mt-1">
                    <h5 class="text-right">HERE'S SOME INFO ABOUT THIS</h5>
                </div>
                <div class="row">
                    <a href="#">HERE'S A LINK ABOUT THIS</a>
                </div>
            </div>
        </div>
        <div class="row white-space">

        </div>




  </div>
</template>

<script>
export default {

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
    }

    .white-space {
        min-height: 100px;
    }



}



</style>