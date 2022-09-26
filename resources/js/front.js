
 require('./bootstrap');

 window.Vue = require('vue');
 

 
 //Vue.component('example-component', require('./components/ExampleComponent.vue').default);
 
import App from './components/App.vue';
 
 const root = new Vue({
     el: '#root',
     render: h => h(App)
 });
 