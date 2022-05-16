<template>
  <div class="container home-gallery-container">
        <div class="row mt-5 row-cols-10 m-auto">
            <div class="col-5">
                <div class='row'>
                    <div class="col-11 img-container">
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
                    <div class="col-11 img-container">
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
                    <div class="col-11 img-container">
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
                    <div class="col-11 img-container">
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

    .img-container {
        height: 150px;        
        background-image: url('../assets/images/italian.jpg');
        background-size: cover;

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
    }

    .white-space {
        min-height: 100px;
    }



}



</style>