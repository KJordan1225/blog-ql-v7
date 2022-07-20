import * as Vue from 'vue';
import * as VueRouter from 'vue-router';
import './bootstrap';

window.Vue = Vue;

Vue.use(VueRouter);

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});
