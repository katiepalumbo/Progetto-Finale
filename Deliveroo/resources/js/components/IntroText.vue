<template>
    <!-- inizio forums intro text -- può essere riusato se si utilizzano 
    le props da main per popolare il testo in caso ci fosse bisogno -->
    <div class="forum-intro-text-container">
            <div class="col-11">
                <div class="row forum-intro-text">
                    <h6 class="all_caps_title">{{text.small}}</h6>
                    <h1>{{text.big}}</h1>
                </div>
        </div>
    </div>
  
</template>

<script>
export default {
    name: 'IntroText',
    props: {
        'introText1': Array,
        'introText2': Array,
        'text': Object
    }

}
</script>

<style scoped lang="scss">

@import '../../sass/_variables.scss';


//all intro text rules
.forum-intro-text-container {
    min-height: 150px;
    background-color: $darkOrange;
    

    .forum-intro-text {
        color: $body-bg;
        text-align: left;
        padding: 40px 0 10px 0;
        width: 80%;
        margin: auto;
        

        .all_caps_title {
            @include all-caps-title;
        }

        h1 {
            font-weight: 700;
        }

    }

    //accent divider rules

    .orange_divider {
        width: 80%;
        height: 2px;
        background-color: $orange;
        align-self: flex-start;
    }
}

</style>