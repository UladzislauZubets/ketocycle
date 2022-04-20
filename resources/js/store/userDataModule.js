export const userDataModule = {
    state: () => ({
        sex: null,
        age: null,
        height: null,
        weight: null,
        email: null,
        isImperial: false,
    }),
    getters: {
        sex: (state) => state.sex,
        age: (state) => state.age,
        height: (state) => state.height,
        weight: (state) => state.weight,
        email: (state) => state.email,
        isImperial: (state) => state.isImperial,
    },
    mutations: {
        set_sex(state, sex) { state.sex = sex },
        set_age(state, age) { state.age = age },
        set_height(state, height) { state.height = height },
        set_weight(state, weight) { state.weight = weight },
        set_email(state, email) { state.email = email },
        set_isImperial(state, isImperial) { state.isImperial = isImperial },
    },
    actions: {},
    namespaced: true
}