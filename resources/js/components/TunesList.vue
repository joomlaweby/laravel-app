<template>
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid uk-text-center uk-grid-match uk-margin" uk-grid>
        <tunes-list-song v-for="song in newSongs" :song="song" :key="song.id"></tunes-list-song>
    </div>
</template>

<script>
import TunesListSong from "./TunesListSong";

export default {
    components: {
        TunesListSong
    },
    methods: {},
    props: [
        'new-songs'
    ]
}
</script>
