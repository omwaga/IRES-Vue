import Home from './components/Home';
import About from './components/About';
import Contact from './components/Contact';
import NotFound from './components/NotFound';
import Login from './components/Auth/Login';
import Register from './components/Auth/Register';
import Calendar from './components/Calendar/Calendar.vue';
import Companies from './components/Companies/Companies';

export default {
    mode: 'history',

    routes: [

        {
            path: '*',
            component: NotFound
        },

        {
            path: '/',
            component: Home
        },

        {
            path: '/about',
            component: About,
            name: 'about'
        },

        {
            path: '/login',
            component: Login,
            name: 'login'
        },

        {
            path: '/register',
            component: Register,
            name: 'register'
        },

        {
            path: '/training-calendar',
            component: Calendar,
            name: 'calendar'
        },

        {
            path: '/companies',
            component: Companies,
            name: 'companies'
        },

        {
            path: '/contact-us',
            component: Contact,
            name: 'contact'
        },
    ]
};
