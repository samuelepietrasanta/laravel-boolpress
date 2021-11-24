<template>
  <div>


          <CardPost class="mb-4" v-for="post in posts" :key="post.id" :post="post"/>
     
      
      


  </div>
</template>

<script>
import CardPost from './CardPost.vue'

export default {
    name:'ListaPost',

    data(){
        return{
            posts:[],

        }
    },
    components:{
        CardPost
    },

    methods:{
        getListaPost(){
            axios.get('http://127.0.0.1:8000/api/posts/')
            .then((risposta)=>{
                this.posts = risposta.data.posts
                console.log(this.posts)


            })
        }
    },

    created() {
        this.getListaPost();
    }

}
</script>

<style>

</style>