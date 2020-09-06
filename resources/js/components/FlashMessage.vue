<template>
    <div uk-alert class="notification uk-alert-success" v-show="visible">
        <a class="uk-alert-close" uk-close></a>
        <p>{{ text }}</p>
    </div>
</template>

<script>
    export default {
        props: ['text'],

        data() {
            return {
                visible: true
            }
        },

        created() {
            if(this.text) {
                this.show();
            }
            else {
                this.hide();
            }
        },

        methods: {
            hide () {
                this.visible = false;
            },
            show () {
                this.visible = true;
                setTimeout(() => this.hide(), 3000)
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
