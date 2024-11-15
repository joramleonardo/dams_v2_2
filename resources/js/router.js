import Vue from 'vue';
import Router from 'vue-router';


import LoginPage from './views/Login.vue';

//TICKETS


import DAMS_Ticket_Home from './views/DAMS_Home.vue';
import DAMS_Categories from './views/DAMS_Categories.vue';
import DAMS_Photos from './views/DAMS_Photos.vue';
import DAMS_Video from './views/DAMS_Video.vue';
import DAMS_Events from './views/DAMS_Events.vue';



import Ticket_Home_Admin from './views/Ticket-Home-Admin.vue';
import DAMS_Admin_Dashboard from './views/DAMS_Admin_Dashboard.vue';
import DAMS_Admin_Photo_Add from './views/DAMS_Admin_Photo_Add.vue';
import DAMS_Admin_Event_Mngmt from './views/DAMS_Admin_Event_List.vue';
import DAMS_Admin_Add_Event from './views/DAMS_Admin_Event_Add.vue';
import DAMS_Admin_Photo_Manage from './views/DAMS_Admin_Photo_Manage.vue';
import DAMS_Photo_Single_Post from './views/DAMS_Photos-Single-Post.vue';
import DAMS_Single_Photo from './views/DAMS_Single-Photo.vue';



import DAMS_Video_Single_Post from './views/DAMS_Videos-Single-Post.vue';



Vue.use(Router);

const routes = [
    
    {
        path: '/home',
        name: 'home',
        component: DAMS_Ticket_Home
    },

    {
        path: '/categories',
        name: 'categories',
        component: DAMS_Categories
    },

    {
        path: '/photos',
        name: 'photos',
        component: DAMS_Photos
    },

    {
        path: '/single-photo',
        name: 'single-photo',
        component: DAMS_Single_Photo
    },

    {
        path: '/videos',
        name: 'videos',
        component: DAMS_Video
    },

    {
        path: '/events',
        name: 'events',
        component: DAMS_Events
    },

    {
        path: '/post-details',
        name: 'post-details',
        component: DAMS_Photo_Single_Post
    },

    {
        path: '/photo-post-details',
        name: 'photo-post-details',
        component: DAMS_Photo_Single_Post
    },

    {
        path: '/video-post-details',
        name: 'video-post-details',
        component: DAMS_Photo_Single_Post
    },
    

    //ADMIN ROUTES
    {
        path: '/ticket/admin/',
        name: 'ticket-admin',
        component: Ticket_Home_Admin,
        children: [
            {
                path: '/admin/dashboard',
                name: 'admin-dashboard',
                component: DAMS_Admin_Dashboard,
            },
            {
                path: '/admin/event/management',
                name: 'admin/event/management',
                component: DAMS_Admin_Event_Mngmt,
            },
            {
                path: '/admin/add/event',
                name: 'admin/add/event',
                component: DAMS_Admin_Add_Event,
            },
            {
                path: '/admin/photo/add',
                name: 'admin-photo-add',
                component: DAMS_Admin_Photo_Add,
            },
            {
                path: '/admin/photo/manage',
                name: 'admin-photo-manage',
                component: DAMS_Admin_Photo_Manage,
            },
        ],
    },
    

    //Login Routes
    {
        path: '/login',
        name: 'login',
        component: LoginPage
    },
    {
        path: '/',
        name: '',
        component: DAMS_Ticket_Home
    }
];

const router = new Router({
    routes: routes,
    linkActiveClass: 'active'
});

export default router;