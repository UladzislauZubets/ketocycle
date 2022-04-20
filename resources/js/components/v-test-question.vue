<template>
    <div class="form">
        <div class="step">

            <h2 class="test-dialog-body-title">{{ this.questionTitle }}</h2>
            
            <label class="custom-radio" v-for="answer in this.questionAnswers" :key="answer.id">
                <input @click="answerSelected"
                    :id="answer.id"
                    :type="this.questionType"
                    :name="this.currentStep-1"
                    :value="answer.title"
                    :checked="this.currentAnswer == answer.id">
                <span>{{ answer.title }}</span>
            </label>
        </div>
        
    </div>
</template>

<script>
    import { mapMutations, mapGetters } from 'vuex'

    export default {
        name: 'v-test-question',
        methods: {
            ...mapMutations({
                set_answer: 'test/set_answer',
                next: 'test/nextStep',
            }),

            answerSelected: function(event) {
                this.set_answer(event.target.id);

                if(this.currentStep + 1 === this.totalSteps) {
                    setTimeout(() => {
                        this.$router.push('result');
                    }, 1000);
                } else {
                    setTimeout(this.next, 1000);
                }
                
            }
        },
        computed: {
            ...mapGetters({
                totalSteps: 'test/totalSteps',
                currentStep: 'test/currentStep',
                currentAnswer: 'test/currentAnswer',

                questionTitle: 'test/questionTitle',
                questionType: 'test/questionType',
                questionAnswers: 'test/questionAnswers',
            })
        }
    }
</script>
