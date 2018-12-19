
require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

import HomeComponent from './components/HomeComponent.vue';
import CreateTeamComponent from './components/CreateTeamComponent.vue';
import CreatePlayerComponent from './components/CreatePlayerComponent.vue';
import IndexTeamComponent from './components/IndexTeamComponent.vue';
import EditTeamComponent from './components/EditTeamComponent.vue';
import EditPlayerComponent from './components/EditPlayerComponent.vue';

const routes = [
  {
      name: 'home',
      path: '/',
      component: HomeComponent
  },
  {
      name: 'create_team',
      path: '/create_team',
      component: CreateTeamComponent
  },
  {
      name: 'create_player',
      path: '/create_player',
      component: CreatePlayerComponent
  },
  {
      name: 'teams',
      path: '/teams',
      component: IndexTeamComponent
  },
  {
      name: 'edit_team',
      path: '/edit/:id',
      component: EditTeamComponent
  },
  {
      name: 'edit_player',
      path: '/edit/:id/player',
      component: EditPlayerComponent
  }
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
