import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from './pages/home.vue';
import GameShow from './pages/gameShow.vue';

const router = new VueRouter({
    mode: "history",
    routes: [
        {   path: "/",
            component: Home,
            name: "homepage",
        },
        {   path: "/games/:game", 
            component: GameShow, 
            name: "games.show",
            meta: { title: "Game"},
        },
		]
	});

export default router;