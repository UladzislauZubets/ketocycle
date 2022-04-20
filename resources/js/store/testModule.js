import axios from 'axios'

export const testModule = {
    state: () => ({
        testData: [],
        totalSteps: null,
        currentStep: 0,

        userAnswers: [],
    }),
    getters: {
        testData: (state) => state.testData,
        totalSteps: (state) => state.totalSteps,
        currentStep: (state) => state.currentStep,

        questionTitle(state) {
            return state.currentStep - 1 >= 0 ? state.testData[state.currentStep-1].name:null;
        },
        questionType(state) {
            return state.currentStep - 1 >= 0 ? state.testData[state.currentStep-1].type:null;
        },
        questionAnswers(state) {
            return state.currentStep - 1 >= 0 ? state.testData[state.currentStep-1].answers:null;
        },

        userAnswers: (state) => state.userAnswers,
        currentAnswer: (state) => state.userAnswers[state.currentStep - 1],
    },
    mutations: {
        set_testData(state, testData) { state.testData = testData },
        set_totalSteps(state, totalSteps) { state.totalSteps = totalSteps },
        nextStep(state) { state.currentStep += 1 },
        prevStep(state) { state.currentStep -= 1 },
        set_answer(state, answer) { 
            state.userAnswers[state.currentStep - 1] = answer;
        },
    },
    actions: {
        async loadTest({state, commit}) {
            console.log('Loadting test');

            axios.get('api/questions').then(function(response) {
                if(response.data.status === true) {
                    commit('set_testData', response.data.data);
                    commit('set_totalSteps', state.testData.length + 1);
                }

            }).catch(function(error) {
                console.log(error);

            }).finally(() => {
                console.log('Test loaded successfully')

            });
        }
    },
    namespaced: true
}