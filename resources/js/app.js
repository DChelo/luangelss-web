import './bootstrap';
import { createApp } from 'vue';
import vSelect from 'vue-select'

// components
import TheUserList from './components/User/TheUserList.vue'
import TheProductHome from './components/Product/TheProductHome.vue'


const app = createApp({
	components: {
		TheUserList,
        TheProductHome
	}
})

app.component('v-select', vSelect)
app.mount('#app')
