import Vue from 'vue'

require('./bootstrap');

const app = new Vue({
    el: '#app',
    render: h => h(require('./app.vue')),
})