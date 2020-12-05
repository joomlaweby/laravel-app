<template>


    <div>
        <form action="#" @submit.prevent="getMusic()">
            <input class="uk-input" placeholder="search for song" v-model="query" type="text">
        </form>

        <div v-for="song in songs" :key="song.id">
            <h2>{{ song.name }}</h2>
            <p><strong>{{ song.artist }}</strong> - {{ song.album }}</p>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            query: '',
            songs: [],
            limit: 5
        }
    },
    methods: {
        getMusic() {
            axios.get(`https://itunes.apple.com/search?term=${encodeURI(this.query)}&entity=musicTrack&limit=${this.limit}`)
                .then(response => {
                    // handle success
                    this.songs = [];
                    response.data.results.forEach(song => {
                        if (song.kind == 'song') {
                            this.songs.push(this.extractData(song));
                        }
                    })
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
    }
}
</script>
