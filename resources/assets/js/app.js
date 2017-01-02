import axios from 'axios';
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
Vue.component('bookform', require('./components/bookform.vue'));
// const app =
const app = new Vue({
    el: '#app'

    // data: {
    //     title: '',
    //     body: ''
    // },
    //
    // methods: {
    //     onSubmit() {
    //         axios.post('/books', this.$data)
    //         .then(this.onSuccess)
    //     },
    //
    //     onSuccess(response){
    //         alert(response.data.message);
    //
    //         this.title = '';
    //         this.body = '';
    //
    //     }
    //
    // }
});