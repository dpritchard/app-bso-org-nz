// New (December 2023) imports:
import flatpickr from "flatpickr";
import 'bootstrap';

// Vue2 is dead. Need to migrate away or up to Vue3.
// TODO:
// [x] Find a good datetime picker for the events page (Done 2023-12-26)
// [ ] Replace the autocomplete (contacts) dropdown on the events page
// [ ] Replace axios (on the markdown editor) with livewire (?). Review Dropzone (seems to be working OK.)
// [ ] Replace lodash (on the photo vote page, only I think?) with ??.

import _ from 'lodash';
import Vue from 'vue' ;
Vue.component('v-autocomplete-contacts', require('./components/AutocompleteContacts.vue').default);
Vue.component('v-md-editor', require('./components/MarkdownEditor.vue').default);
Vue.component('v-photo-vote', require('./components/PhotoVote.vue').default);
const app = new Vue({
    el: '#app',
});
