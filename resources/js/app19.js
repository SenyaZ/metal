import Lingallery from 'lingallery';


window.Vue = require('vue').default;






Vue.component('button-menu', require('./components/ButtonMenu8.vue').default);
Vue.component('button-konst', require('./components/ButtonMenuKonst8.vue').default);
Vue.component('button-konst-head', require('./components/ButtonKonstHead8.vue').default);
Vue.component('main-zamer', require('./components/MainZamer9.vue').default);
Vue.component('zamer-card', require('./components/ZamerCard8.vue').default);

Vue.component('lingallery', Lingallery);



const app = new Vue({
    el: '#app',
});



