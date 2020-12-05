<template>
    <div>
        <tunes-search-form @add-new-songs="songs = $event"></tunes-search-form>
        <tunes-list :new-songs="songs"></tunes-list>
    </div>
</template>

<script>

import TunesSearchForm from "./TunesSearchForm";
import TunesList from "./TunesList";

export default {
    components: {
        TunesSearchForm,
        TunesList
    },
    data() {
        return {
            songs: []
        }
    },
    methods: {

    }
}
</script>
