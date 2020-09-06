<template>
    <div uk-alert class="notification uk-alert-success">
        <a class="uk-alert-close" uk-close></a>
        <p>{{ text }}</p>
    </div>
</template>

<script>
    export default {
        props: ['text'],

        data() {
            return {
                show: true
            }
        },

        created() {
        },

        methods: {
            hide () {

            }
        }
    }
</script>

<style>
.notification {
    position: fixed;
    bottom: 50px;
    right: 50px;
}
</style>
