<template>
    <form @submit="checkInitData"
        class="form" 
        method="POST" 
        action="/"
        novalidate="true"
    >

        <div class="step step-1">
            <div class="test-dialog-calculator">
                <button @click="changeMetric('Imperial', $event)"
                    type="button"
                    class="calculator-button"
                    v-bind:class="[ this.isImperial ? 'active':'' ]">
                    Imperial
                </button>
                <button @click="changeMetric('Metric', $event)"
                    type="button"
                    class="calculator-button"
                    v-bind:class="[ this.isImperial ? '':'active' ]">
                    Metric
                </button>
            </div>

            <div class="inputs-data">
                <h2 class="test-dialog-body-title">Measurements</h2>
                <p class="test-dialog-body-description">Let's start with some basic details, which will help us accurately determine your metabolic age.</p>

                <div class="input-group">
                    <p v-if="errors.age"
                        class="error-message">
                        {{ errors.age }}
                    </p>
                    <input v-model="age"
                        type="number"
                        max="200" min="1" step="0.1"
                        name="age" id="age"
                        placeholder="Age" required/>
                    <label for="age">years</label>
                </div>

                <div class="input-group">
                    <p v-if="errors.height"
                        class="error-message">
                        {{ errors.height }}
                    </p>
                    <input v-model="height"
                        type="number"
                        max="999" min="1" step="0.1"
                        name="height" id="height"
                        placeholder="Height" required/>
                    <label for="height"
                        v-bind:innerText="[ this.isImperial ? 'inches':'cm' ]"></label>
                </div>

                <div class="input-group">
                    <p v-if="errors.weight"
                        class="error-message">
                        {{ errors.weight }}
                    </p>
                    <input v-model="weight"
                        type="number"
                        max="999" min="1" step="0.1"
                        name="weight" id="weight"
                        placeholder="Weight" required/>
                    <label for="weight" v-bind:innerText="[ this.isImperial  ? 'pounds':'kg' ]"></label>
                </div>

                <div class="input-group">
                    <p v-if="errors.email"
                        class="error-message">
                        {{ errors.email }}
                    </p>
                    <input v-model="email"
                        type="email"
                        name="email" id="email"
                        placeholder="Email Address" required/>
                </div>

                <button type="sumit" class="submit-button">Next</button>
            </div>
        </div>
    </form>
</template>

<script>
    import { mapMutations } from 'vuex'

    export default {
        name: 'v-user-form',
        data() {
            return {
                errors: [],

                age: this.$store.state.user.age,
                height: this.$store.state.user.height,
                weight: this.$store.state.user.weight,
                email: this.$store.state.user.email,

                isImperial: this.$store.state.user.isImperial,
            }
        },
        methods: {
            ...mapMutations({
                set_age: 'user/set_age',
                set_height: 'user/set_height',
                set_weight: 'user/set_weight',
                set_email: 'user/set_email',
                set_isImperial: 'user/set_isImperial',

                next: 'test/nextStep',
            }),
            
            checkInitData: function(event) {
                if(this.age
                    && this.height
                    && this.weight
                    && this.email) {
                    
                    this.startTest();

                    event.preventDefault();
                    return true;
                }

                this.errors = [];

                if(!this.age) {
                    this.errors.age = 'Please, enter your age';
                } else if(!this.validNumber(1, 200, this.age)) {
                    this.errors.age = 'Please, enter your valid age';
                }
                if(!this.height) {
                    this.errors.height = 'Please, enter your height';
                } else if(!this.validNumber(1, 999, this.height)) {
                    this.errors.height = 'Please, enter your valid height';
                }
                if(!this.weight) {
                    this.errors.weight = 'Please, enter your weight';
                } else if(!this.validNumber(1, 999, this.weight)) {
                    this.errors.weight = 'Please, enter your valid weight';
                }
                if(!this.email) {
                    this.errors.email = 'Please, enter your email';
                } else if(!this.validEmail(this.email)) {
                    this.errors.email = 'Please, enter your valid email';
                }

                event.preventDefault();
            },
            validNumber: function(min, max, number) {
                let re = /^(\+)?\d+(\.)?\d*$/;
                return re.test(number) && parseFloat(number) >= min && parseFloat(number) <= max ? true:false;
            },
            validEmail: function (email) {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            },
            changeMetric: function(metric, event) {
                if(event.target.classList.contains('active')) {
                    return true;
                }

                if(metric === 'Imperial') {

                    this.isImperial = true;

                    if(this.height) {
                        this.height = parseFloat((this.height * 0.39).toFixed(2));
                    }
                    if(this.weight) {
                        this.weight = parseFloat((this.weight * 2.2).toFixed(2));
                    }
                } else if(metric === 'Metric') {

                    this.isImperial = false;

                    if(this.height) {
                        this.height = parseFloat((this.height / 0.39).toFixed(2));
                    }
                    if(this.weight) {
                        this.weight = parseFloat((this.weight / 2.2).toFixed(2));
                    }
                }
            },
            startTest: function () {
                this.fillData();
                this.next();
            },
            fillData: function() {
                this.set_age(this.age);
                this.set_email(this.email);
                this.set_height(this.height);
                this.set_weight(this.weight);
                this.set_isImperial(this.isImperial);
            },
        },
    }
</script>
