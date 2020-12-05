<template>
    <form action="#" @submit.prevent="getMusic()">
        <input class="uk-input" placeholder="search for song" v-model="query" type="text">
    </form>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            query: ''
        }
    },
    methods: {
        getMusic() {
            axios.get(`https://itunes.apple.com/search?term=${encodeURI(this.query)}&entity=musicTrack&limit=15`)
                .then(response => {
                    // handle success
                    console.log(response);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        }
    }
}
</script>
