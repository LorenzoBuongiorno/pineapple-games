import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Games from './pages/home.vue';
import GameShow from './pages/gameShow.vue';
import Welcome from './pages/welcome.vue';

const router = new VueRouter({
    mode: "history",
    routes: [
        {   path: "/",
            component: Welcome,
            name: "welcome",
        },
        {   path: "/games",
            component: Games,
            name: "games",
        },
        {   path: "/games/:game",
            component: GameShow, 
            name: "games.show",
            meta: { title: "Game"},
        },
		]
	});

export default router;