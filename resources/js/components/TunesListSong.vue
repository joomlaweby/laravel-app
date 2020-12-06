<template>
    <div>
        <transition name="fade">
            <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                <div class="uk-card-media-top">
                    <img :src="song.cover" alt="">
                </div>
                <h2 class="uk-card-title">{{ song.name }}</h2>
                <h4 class="uk-margin-remove">{{ song.artist }}</h4>
                <p>{{ song.album }}</p>
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
export default {
props: {
    song: {
        type: Object
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
