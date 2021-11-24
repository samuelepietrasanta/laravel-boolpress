<template>

    <div>
        <h1 class="text-center mb-5 p-2"> {{titolo}} </h1>
    </div>
  
</template>

<script>
export default {
    name:'Header',
    props:{
        'titolo' : String
    },

}
</script>

<style>

</style>