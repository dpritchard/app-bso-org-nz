import _ from 'lodash';
import 'bootstrap';
import Vue from 'vue' ;
// TODO:
// Find a good datetime picker for the events page
// Replace exios (on the markdown editor) with alpine / livewire
// Repalce lodash (on the photo vote page, only I think?) with ??.

Vue.component('v-autocomplete-contacts', require('./components/AutocompleteContacts.vue').default);
Vue.component('v-md-editor', require('./components/MarkdownEditor.vue').default);
Vue.component('v-photo-vote', require('./components/PhotoVote.vue').default);

const app = new Vue({
    el: '#app',
});
