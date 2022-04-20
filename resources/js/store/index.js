import * as VueX from 'vuex'

import createPersistedState from "vuex-persistedstate";

import { userDataModule } from './userDataModule'
import { testModule } from './testModule'

const store = new VueX.Store({
    modules: {
        user: userDataModule,
        test: testModule,
    },
    plugins: [createPersistedState()]
})

export default store