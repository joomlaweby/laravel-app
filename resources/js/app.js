/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import 'uikit';
import Vue from 'vue'
import FlashMessage from "./components/FlashMessage";
import ContentComment from "./components/ContentComment";
import Card from "./components/Card";
import Tunes from "./components/Tunes";

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
window.Vue = Vue;

const app = new Vue({
    el: '#app',
    components: {
        FlashMessage,
        ContentComment,
        Card,
        Tunes
    }
});

function flash() {
    console.log('flash');
}
