import './bootstrap';

import { createApp } from 'vue';
import HelloWorld from '@/components/HelloWorld.vue';

createApp({
    setup() {
        return {
            message: 'Welcome to Your Vue.js App',
        };
    },
    components: {
      'hello': HelloWorld,
    },
}).mount('#app');
