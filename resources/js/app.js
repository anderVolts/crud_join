/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
import moment from 'moment';
Vue.filter('formatDate', function(value) {
    if (value) {
        moment.locale('pt-br')
        return moment(String(value)).format('DD/MM/YYYY HH:mm')
    }
});

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('categoria-component', require('./components/CategoriaComponent').default);
Vue.component('produto-componet', require('./components/ProdutoComponent').default);
Vue.component('categoria-list', require('./components/CategoriaListComponent').default);
Vue.component('produto-component', require('./components/ProdutoComponent').default);
Vue.component('produto-list', require('./components/ProdutoListComponent').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
