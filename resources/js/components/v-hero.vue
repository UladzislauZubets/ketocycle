<template>
    <section class="hero">
        <div class="container">
            <div class="hero-wrapper">
                <div class="hero-text">
                    <h1 class="hero-text-title">Fill this FREE quiz and find out your biological age</h1>
                    
                    <div class="hero-select-gender">
                        <p class="hero-select-gender-text">Select your gender:</p>
                        
                        <div class="hero-select-gender-actions">
                            <router-link :to="{ name: 'test' }" @click="this.$store.commit('user/set_sex', 'women')" class="gender-action women">
                                <span class="icon"><img src="data:image/png;base64,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"></span>
                                
                                Women click here

                                <span class="icon">
                                    <svg width="32" height="32" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M40 24L34.36 29.64L52.68 48L34.36 66.36L40 72L64 48L40 24Z" fill="black"/>
                                    </svg>
                                </span>
                            </router-link>
                            <router-link :to="{ name: 'test' }" @click="this.$store.commit('user/set_sex', 'men')"  class="gender-action men">
                                <span class="icon"><img src="data:image/png;base64,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"></span>
                                
                                Men click here
                                
                                <span class="icon">
                                    <svg width="32" height="32" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M40 24L34.36 29.64L52.68 48L34.36 66.36L40 72L64 48L40 24Z" fill="black"/>
                                    </svg>
                                </span>
                                    
                            </router-link>
                        </div>
                    </div>
                </div>
                <div class="hero-image"></div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: 'v-hero'
    }
</script>
