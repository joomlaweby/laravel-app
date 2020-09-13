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
        this.newText = this.commentData.text
    },

    methods: {
        textChanged() {
            this.newText = this.$refs.input.innerText;
        },
        updateComment() {
            axios.put('/comments/' + this.commentData.id, {
                text: this.newText
            })
            this.editing = false
        },

        deleteComment() {
            axios.delete('/comments/' + this.commentData.id)
            this.$el.remove()
        },

        startEditing() {
            this.editing = true
            this.selectText()
        },

        selectText() {
            setTimeout(() => {
                let p = this.$refs.input,
                    s = window.getSelection(),
                    r = document.createRange()
                r.setStart(p, 0)
                r.setEnd(p, 1)
                s.removeAllRanges()
                s.addRange(r)
                p.focus()
            }, 0)
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

