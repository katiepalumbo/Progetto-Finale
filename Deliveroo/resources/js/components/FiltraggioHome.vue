<template>
  <div class="filtraggio-container col-11 mx-auto my-5">
      <div class="filtraggio-title">
          <h3>Ti serve ancora qualche idea?</h3>
      </div>
        <div class="row">
            <div class="col-10 m-auto">
               <form action="" class="row" @submit.prevent="filteredType()">
                    <div class="col"  v-for="typex in types" :key="typex.id">
                        <div class="row d-inline-flex">
                            <!-- <input  class="form-check-input row" type="checkbox" v-model="selected" :value="typex.id" :id="'typex_' + typex.id"> -->
                            <router-link class="form-check-label btn type-button mx-5 my-2" :to="{name: 'menu'}" :for="'typex_' + typex.id">{{typex.name}}</router-link>
                        </div>
                    </div>
                    <!-- <div>
                        <button type="submit" class="btn btn-primary">Cerca</button>
                    </div> -->
               </form>
            </div>
            </div>

  </div>
</template>

<script>
export default {
    name: 'FiltraggioHome',
    data() {
            return {
                types: null,
                //selected: [],
                //users: [],

                 navLinks: [
                 {
                    to : 'restaurant-menu',
                   name : 'menu',
                },
             ]
            };
        },
    methods: {

        getTypes(){
                // prelevo tutte le tipologie
                axios.get('api/types').then(response =>{
                    this.types = response.data.results;
                })
            },
    },

    created(){
            this.getTypes();

        },
}
</script>

<style scoped lang="scss">

@import '../../sass/_variables.scss';

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: $body-bg;
}

.filtraggio-container {

    .filtraggio-title {
        
        width: 90%;
        margin: auto 15px;

        h3 {
            @include title-font;
            margin-bottom: 25px;


        }

    }

    .type-button {
        background-color: $purple;
        @include all-caps-button;
    }
}



</style>