<template>
  <div class="filtraggio-container">
      <div class="filtraggio-title">
          <h1>Ti serve ancora qualche idea?</h1>
      </div>
        <div class="row">
            <div class="col-8 m-auto">
               <form action="" class="row" @submit.prevent="filteredType()">
                   <div class="col">
                    <div class="row"  v-for="typex in types" :key="typex.id">
                        <div>
                            <input class="form-check-input" type="checkbox" v-model="selected" :value="typex.id" :id="'typex_' + typex.id">
                            <label class="form-check-label" :for="'typex_' + typex.id">{{typex.name}}</label>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Cerca</button>
                    </div>
                    </div>
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

            //     navLinks: [
            //     {
            //         to : 'restaurant-menu',
            //         name : 'menu',
            //     },
            // ]
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

.filtraggio-title {
    @include title-font;
    width: 90%;
    margin: auto;

}



</style>