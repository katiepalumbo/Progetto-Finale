<template>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{title}}<b>: nome</b></h5>
            <h5 class="card-title">{{slug}}<b>: slug</b></h5>

            <h5 class="card-title" v-for="test in type" :key="test.id">
                <span>
                    {{test.name}}<b>: tag</b>
                </span>
            </h5>


            <router-link class="btn btn-primary"  :to="{name: 'restaurant', params:{slug: slug}}">link</router-link>

        </div>
    </div>
</template>

<script>
export default {
    name: "Singolo",
    props: ['title', 'type', 'slug'],
}
</script>

<style>

</style>
