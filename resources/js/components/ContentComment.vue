<template>
    <div>
        Comment
    </div>
</template>

<script>
export default {
    data () {
        return {
            editing: false
        }
    },

    methods: {
        updateComment() {
            alert('Saved')
        }
    }
}
</script>


<style lang="scss" scoped="">
[contenteditable='true'] {
    box-shadow: 0 2px 0 #000;
    outline: none;
}
</style>

