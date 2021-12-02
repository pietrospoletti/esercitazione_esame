import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router';
import '../style.css'


Vue.use(VueRouter)
Vue.config.productionTip = false

import BookList from '@/components/BooksList.vue'
import BookCreate from '@/components/BooksCreate.vue'




const routes = [
  {
    path:"/book/list",
    name:"books_list",
    component: BookList
  },
  {
    path:"",
    redirect:"/book/list"
  },
  {
    path:"/book/create",
    name:"books_create",
    component: BookCreate
  },
]

const router = new VueRouter({
  mode: "history",
  routes,
});




new Vue({
  render: h => h(App),
  router,
}).$mount('#app')