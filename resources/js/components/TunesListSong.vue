<template>
    <div>
        <transition name="fade">
            <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                <div class="uk-card-media-top">
                    <img :src="song.cover" alt="">
                </div>
                <h2 class="uk-card-title">{{ song.name }}</h2>
                <h4 class="uk-margin-remove">{{ song.artist }}</h4>
                <p>{{ song.album | shorten }}</p>
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
        </transition>

    </div>

</template>

<script>
import {truncate} from 'lodash-es';

export default {
    props: {
        song: {
            type: Object
        }
    },
    filters: {
        shorten(str, len = 55) {
            return truncate(str, {length: len})
        },
        songify(song) {
            return song.artist + ' - ' + song.name
        }
    }
}
</script>

<style>
.fade-enter {
    transform: scale(0.6);
}

.fade-enter-active {
    transition: all 0.2s ease;
}
</style>
