<template>
    <div>
        Comment
    </div>
</template>

<script>
export default {
    props: ['comment-data'],

    data() {
        return {
            editing: false
        }
    },

    mounted() {
        console.log(this.commentData);
    },

    methods: {
        updateComment() {
            alert('Saved')
            this.editing = false
        },

        deleteComment() {
            axios.delete('/comments/' + this.commentData.id)
            this.$el.remove()
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

