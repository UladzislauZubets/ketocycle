<template>
    <section class="index-page">
        <v-header></v-header>
        <v-hero></v-hero>
    </section>
</template>

<script>
    import vHeader from '../components/v-header'
    import vHero from '../components/v-hero'

    export default {
        components: { vHeader, vHero },
        name: 'index'
    }
</script>
