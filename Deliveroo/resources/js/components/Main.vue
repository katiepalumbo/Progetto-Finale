<template>
    <main>
       <div class="container">
           <h1>Benvenuti in Deliveboo!!</h1>
           <div class="row">
                <div class="col">
                    <ul>
                        <li v-for="type in types" :key="type.id">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label" for="">{{type.name}}</label>
                        </li>
                    </ul>

                </div>
            </div>
           <div class="row m-5">
               <div class="col-4 " v-for="item in items" :key="item.id" >
                   <div class="card">
                       <div class="card-body">
                           <h5 class="card-title">{{item.item_name}}</h5>
                       </div>
                   </div>
                </div>
            </div>
       </div>
    </main>


</template>

<script>
export default {
    name: 'Main',

    data() {
        return {
            items:[],
            types:[],
        }
    },

    created() {
        axios.get('/api/items').then((response)=>{
            this.items = response.data.results.data;
        }),

        axios.get('/api/types').then((response)=>{
            this.types = response.data.results.data;
            
        })

    }      
}
</script>

<style>

</style>
