<template>

    <div class="p-4">
        <h5>{{post.titolo}}</h5>
        <p>{{post.contenuto}}</p>
    </div>
  

</template>

<script>
export default {
    name:'CardPost',
    props:['post'],
        

}
</script>

<style>

</style>