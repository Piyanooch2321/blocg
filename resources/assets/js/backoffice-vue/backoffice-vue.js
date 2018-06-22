import Vue from 'vue'
import App from './backoffice-vue/App.vue'

Vue.component('todo-item', {
    template: '\
      <li>\
        {{ title }}\
        <button v-on:click="$emit(\'remove\')">Remove</button>\
      </li>\
    ',
    props: ['title']
  });

new Vue({
    el: '#app',
    render: h => h(App)
  })