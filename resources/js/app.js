require('./bootstrap');

import Vue from 'vue'
window.Vue = Vue;


import VueAxios from 'vue-axios';
import axios from 'axios';

import TransactionCategories from './components/TransactionCategories'

Vue.use(VueAxios, axios);

const app = new Vue({
  el: '#app',
  components: {
    TransactionCategories
  }
})