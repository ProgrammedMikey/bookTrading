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
Vue.component('tabs', require('./components/tabs.vue'));

Vue.component('tab', {
        template: `
                <div v-show="isActive"><slot></slot></div>           
            `,

            props: {
                    name: { required: true},
                    selected: { default: false}
                },
    data() {
        return {isActive: false};
    },

    mounted() {
        this.isActive = this.selected;
    }
    });

const app = new Vue({
    el: '#app'
});

$('.like').on('click', function(event){
    event.preventDefault();
    var bookID = event.target.parentNode.parentNode.parentNode.dataset['postid'];
    var isLike = event.target.previousElementSibling == null;
    $.ajax({
        method: 'POST',
        url: urlLike,
        data: {isLike: isLike, bookID: bookID, _token: token }
    })
        .done(function() {
            event.target.innerText = isLike ? event.target.innerText == 'Offer to trade' ? 'Pending!' : 'Offer to trade' : '';
        });
});
