import './bootstrap';

import "../sass/app.scss";

import { createApp } from "vue";
import Test from '../components/Test.vue';

const app = createApp({});

app.component('test', Test);

app.mount("#app");