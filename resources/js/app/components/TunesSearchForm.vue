<template>
    <form action="#" @submit.prevent="getMusic()">
        <input class="uk-input" ref="searchInput" placeholder="search for song" v-model="query" type="text">
    </form>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            query: '',
            songs: [],
            defaultLimit: 9
        }
    },
    props: {
        limit: String
    },
    methods: {
        getMusic() {

            var countedLimit = this.$props.limit || this.defaultLimit;
            axios.get(`https://itunes.apple.com/search?term=${encodeURI(this.query)}&entity=musicTrack&limit=${countedLimit}`)
                .then(response => {
                    let iTunesSongs = response.data.results
                        .filter(song => song.kind == 'song')
                        .map(song => this.extractData(song));
                    this.$emit('add-new-songs', iTunesSongs);


                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        extractData({
                        artistName: artist,
                        trackName: name,
                        trackId: id,
                        previewUrl: audioFile,
                        artworkUrl100: cover,
                        collectionName: album
                    }) {

            return {artist, name, id, audioFile, cover, album};
        }
    },
    mounted() {
        this.$refs.searchInput.focus();
    }

}
</script>

<style>

</style>
