<template>


    <div>
        <form action="#" @submit.prevent="getMusic()">
            <input class="uk-input" placeholder="search for song" v-model="query" type="text">
        </form>


        <div  class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-margin" uk-grid>
            <div v-for="song in songs" :key="song.id">
                <div class="uk-card uk-card-primary uk-card-default uk-card-body uk-card-hover">
                    <div class="uk-card-media-top">
                        <img :src="song.cover" alt="">
                    </div>
                    <h2 class="uk-card-title">{{ song.name }}</h2>
                    <p><strong>{{ song.artist }}</strong> - {{ song.album }}</p>
                    <div>
                        <figure v-if="song.audioFile">
                            <audio
                                controls
                                :src="song.audioFile">
                                Your browser does not support the
                                <code>audio</code> element.
                            </audio>
                        </figure>
                    </div>
                </div>
            </div>

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
            limit: 9
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
