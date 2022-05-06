<template>
    <main>
       <div class="container">
           <h1>Benvenuti in Deliveboo!!</h1>
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
        }
    },

    created() {
            axios.get('/api/items').then((response)=>{
                this.items = response.data.results.data;
            })
    }      
}
</script>

<style>

</style>
