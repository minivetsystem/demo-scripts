<template>
    <div id="app">
        <sticky-header-component></sticky-header-component>
        <router-view></router-view>
    </div>
</template>

<script>
    import StickyHeader from './components/partials/header/StickyHeader.vue';

    export default {
        name: 'app',
        components: {
            "sticky-header-component": StickyHeader
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
