<template>
    <div>
        <Header :titolo="titolo"/>


        <main>
            <ListaPost/>
        </main>
    </div>
</template>


<script>

    import Header from './Header.vue';
    import ListaPost from './Post/ListaPost.vue';

    export default {

        name: 'App',

        data(){
            return {
                titolo : 'I nostri Post'
            }
        },
        components:{
            Header,
            ListaPost
            },
    }
</script>
