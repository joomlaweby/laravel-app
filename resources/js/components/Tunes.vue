<template>

</template>

<script>
import axios from "axios";

export default {
    methods: {
        getMusic() {
            axios.get('/user?ID=12345')
                .then(function (response) {
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
