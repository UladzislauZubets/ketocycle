<template>
    <section class="result">
        <v-page-logo></v-page-logo>

        <section class="test-result">
            <h1 class="test-result-title">Your personalized Keto Diet is ready!</h1>

            <ul class="test-result-line">
                <li class="test-result-item">
                    <div class="test-result-icon" v-if="this.$store.state.user.sex === 'women'">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAACmElEQVRYhe2WTUhUURTHf+fNU5tUGAqJqFZGoCtn+iKkyMKRWvgBjdoipFUQQY2bgjaDkBHFzODOqJURMWJtihr7oJVGRrYJF7UIKpNaqGilOe+dFo4iojNvPhICz+6c+79/fvdy33lHyCJO+a8Xz4oZRWkA/qB0V1ZPXgmFQnamXmY2ALOYd1AaFwtCx/tBjwAdmXoZmW44eTS6BWhYXhfVM5l6ZQWgBeoGZIWlDWsCcO9J8JOKDC+vC/pgTQAAbEtPLIFQRR+aLrM9G6+VrtJRNB6OeAoK8bkwZqwpa7h3sP33mgAEasPnReQcsHNJ2QbeIdIZi1/o+2cALf7oVUUvpZCoCm298WBP3gFa6iI+VYZI/26mE8Ku+/HgNye+jh+hrUST+l8pZD+BEhMuO/V1BNBaG94jcFCVl4C1mk5hBPiB0lZff600bwC2GKcBROQ5sKqxQAVCDCgpmilqzgtAKBQyQJuASVX9kkZeLMhrAFFtygvAyCvPbmAr8FQMKtI6qloCHxBqAgfC7pwBVDkCIEocxZdeL14V+oGNUmwcyhkAtAZAXDwDvGnlol4RXgDg0uocAVRQ9oKMJQub0wKAzzbmBgBU2Z8TQKAuUg5sAh2yLE1/+vnwkHC7gc8C+0BTNrvUN2AblQAq8saAKocAiFgLXdPT6g9vT6VNOZKZc4kBq9DoctnmLUvsbqd9W1S9KkYnYn8cm51K2ZId/wua/ZFR5j/HtKHwuLc/eNyJ1tFQGgjEXDr5NQQgoqWo3EguvQV2AGXAhMLFpGbCiS9kMw8c6yoTy/o+n2kfSBVQDozG+oPbMvXLaiTLZ6wDrAP8fwAFhplYTFQsYCFPrLgh3wB3H50dR4kB4yLSo8htYFrhZjYAfwFyM9UqhIp6kgAAAABJRU5ErkJggg==">
                    </div>
                    <div class="test-result-icon" v-else-if="this.$store.state.user.sex === 'men'">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAACIUlEQVRYhe2XMWgUURCGv3m3m5wIwVMQ0plGknRWgoVlTrFTTsUUFulElEtjJWwUbBRzpJAUKQTFqFGjhcURhAhaRmzERrgmoBC9XGFi7rL3xsJVLocX366r1U01b/af/337GB67QsI4c+xWLgzrs6pshE1/bP7F+S9JfLwkTSdGbgyGYf0Zyn4BvMzmDiCfxEviNhTyN4+Iyiywq7WuonvmyuPVuH4mbgPK5fbNgabvZTW2VxIAEXP7N+X5e8/Prf4XgIflizOg46AVYAVhxs9kxpJsDglmYPToVF/DhnttU2xr3fMzMnSwWgmCwHbq/WuAk/nSJVQngN4Okg+qFOYWim9TBzg1MjmqcNdB+rHRYPjpYrHm4us0A0EQGEWvumiBfr9XLjhq3QDevcodAhkAvkXD1yneA4jq6VQBRJqHo+ylitnmaHUhSoaO5yf7UwNAZBhA0KXtZVIB+QTgYQdTA1DYDWCR7Y4/0uryj8QMpAYgSA7AiP38Zy01ABH6UgMAzQFo02w4iGsAVtmZJkAPgBpcbrk6gICfGoBg6pG40w3YEpoFUNTltFyHUNcBrNq2t9IpYHmrVjwAwaynBiDodZD7fk92se3JKhBuLek06OMwY564eceMQr70RlQPRMsJ4CywD0CE4oNysRTHL/4XUcrRBegCdAG6APH/jNC1n7kiawq/1li+/nsA5RqwAizhNe6I6BWgCryub/Iort93z6esYk1T1IwAAAAASUVORK5CYII=">
                    </div>
                    <span class="test-result-title">{{ this.$store.state.user.sex }}</span>
                </li>
                <li class="test-result-item">
                    <div class="test-result-icon">
                        {{ this.$store.state.user.age }} 
                    </div>
                    <span class="test-result-title">Age (real)</span>
                </li>
                <li class="test-result-item">
                    <div class="test-result-icon warning">
                        35 
                    </div>
                    <span class="test-result-title">Age (metabolic)</span>
                </li>
                <li class="test-result-item">
                    <div class="test-result-icon">
                        {{ this.$store.state.user.height }}  
                    </div>
                    <span class="test-result-title" v-bind:innerText="[ this.$store.state.user.isImperial ? 'Height (in)':'Height (sm)' ]"></span>
                </li>
                <li class="test-result-item">
                    <div class="test-result-icon">
                        {{ this.$store.state.user.weight }}  
                    </div>
                    <span class="test-result-title" v-bind:innerText="[ this.$store.state.user.isImperial ? 'Weight (lb)':'Weight (kg)' ]"></span>
                </li>
            </ul>
        </section>

        <v-app></v-app>
    </section>
</template>

<script>
    import vApp from '../components/v-app'
    import vPageLogo from '../components/v-page-logo'

    export default {
        components: { vPageLogo, vApp },
        name: 'result',
        beforeCreate() {
            // if(this.$store.state.user.sex === null) {
            //     this.$router.push('index');
            // }
        }
    }
</script>
