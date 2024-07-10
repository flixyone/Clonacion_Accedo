import './bootstrap'
import { createApp } from 'vue';
import Demo from './components/Demo.vue';
import Datatable from './components/Datatable.vue';


const app = createApp({
	components: {
        Demo,
        Datatable
	}
})

app.mount('#app');
