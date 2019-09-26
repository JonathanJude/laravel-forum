/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
import UserComment from "./components/UserComment";
import Topic from "./components/Topic";
import Flash from "./components/Flash";

window.Vue = require("vue");

Vue.component("flash", Flash);
Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component("user-comment", UserComment);
Vue.component("topic", Topic);

const app = new Vue({
    el: "#app"
});
