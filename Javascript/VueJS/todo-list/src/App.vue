<template>
    <div id="app">
        <!--<img src="./assets/logo.png">
        <HelloWorld msg="Welcome to Your Vue.js App"/>-->
        <sticky-header-component></sticky-header-component>
        <home-component></home-component>
    </div>
</template>

<script>
    //import HelloWorld from './components/HelloWorld.vue';
    import StickyHeader from './components/partials/header/StickyHeader.vue';
    import Home from './components/home/Home.vue';

    export default {
        name: 'app',
        components: {
            //"hello-world": HelloWorld,
            "sticky-header-component": StickyHeader,
            "home-component": Home
        }
    }
</script>

<style>
    /*#app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        margin-top: 60px;
    }*/
</style>
