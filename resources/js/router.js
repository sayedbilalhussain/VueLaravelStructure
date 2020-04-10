import Vue from 'vue';
import VueRouter from 'vue-router';
const bar = { template:"<v-alert type='error'>I'm bar alert</v-alert>"};
const foo = { template:"<v-alert type='error'>I'm foo alert</v-alert>"};
const user = { template:"<v-alert type='error'>I'm {{$route.param.name}}</v-alert>"}


Vue.use(VueRouter);

const routes = [
     {
         path:'/foo',
         component: foo

     },
     {
         path:'/bar',
         component: bar
     },
     {
         path:'/user:name',
         component:user
     }
];
export default new VueRouter({routes});
