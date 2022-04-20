<template>
    <section class="test-page">

        <div class="test-dialog">
            <div class="test-dialog-wrapper">
                <div class="test-dialog-header">
                    <div class="test-dialog-header-control">
                        <a @click="inTestProgressBack()" class="header-control-back">
                            <svg width="32" height="32" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M61.64 29.64L56 24L32 48L56 72L61.64 66.36L43.32 48L61.64 29.64Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                    <div class="test-dialog-header-logo">
                        <a href="#" class="header-logo">
                            <img src="../../img/logo.svg" alt="image">
                        </a>
                    </div>
                </div>
                <v-test-progress></v-test-progress>
                <div class="test-dialog-body" v-if="this.$store.state.test.currentStep === 0">
                    <v-user-form></v-user-form>
                </div>
                <div class="test-dialog-body" v-else>
                    <v-test-question></v-test-question>
                </div>
            </div>
        </div>

    </section>
</template>

<script>
    import { mapActions } from 'vuex'
    import vTestProgress from '../components/v-test-progress'
    import vUserForm from '../components/v-user-form'
    import vTestQuestion from '../components/v-test-question'

    export default {
        name: 'test',
        components: { vUserForm, vTestProgress, vTestQuestion },
        methods: {
            ...mapActions({
                loadTest: 'test/loadTest',
            }),
            inTestProgressBack: function() {
                if(this.$store.state.test.currentStep > 0) {
                    this.$store.commit('test/prevStep');
                } else if(this.$store.state.test.currentStep === 0) {
                    this.$router.push('index');
                }
            }
        },
        mounted() {
            if(this.$store.state.test.totalSteps === null)
                this.loadTest();
        },
        beforeCreate() {
            if(this.$store.state.user.sex === null) {
                this.$router.push('index');
            }
        }
    }
</script>

