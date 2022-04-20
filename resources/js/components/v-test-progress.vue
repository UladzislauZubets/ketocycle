<template>
    <div class="test-dialog-progress">
        <div class="progress-position"
            v-bind:style="{ width: (((this.$store.state.test.currentStep + 1) / this.$store.state.test.totalSteps) * 100) + '%' }"></div>
    </div>
</template>

<script>
    export default {
        name: 'v-test-question',
    }
</script>
