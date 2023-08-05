// Import Vue and Vue Router
import Vue from 'vue';
import VueRouter from 'vue-router';
// Import your Vue components
import CompaniesList from './components/CompaniesList.vue';
import CompanyForm from './components/CompanyForm.vue';
import EmployeesList from './components/EmployeesList.vue';
import EmployeeForm from './components/EmployeeForm.vue';

// Use Vue Router
Vue.use(VueRouter);

// Define routes
const routes = [
    { path: '/companies', component: CompaniesList },
    { path: '/companies/create', component: CompanyForm },
    { path: '/companies/:id/edit', component: CompanyForm },
    { path: '/employees', component: EmployeesList },
    { path: '/employees/create', component: EmployeeForm },
    { path: '/employees/:id/edit', component: EmployeeForm },
];

// Create the router instance
const router = new VueRouter({
    mode: 'history', // Use history mode for clean URLs
    routes,
});

// Create and mount the Vue instance
const app = new Vue({
    el: '#app',
    router,
});