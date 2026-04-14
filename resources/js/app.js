import flatpickr from "flatpickr";
import 'bootstrap';
import { createApp } from 'vue';
import AutocompleteContacts from './components/AutocompleteContacts.vue';
import MarkdownEditor from './components/MarkdownEditor.vue';
import PhotoVote from './components/PhotoVote.vue';

const app = createApp({});
app.component('v-autocomplete-contacts', AutocompleteContacts);
app.component('v-md-editor', MarkdownEditor);
app.component('v-photo-vote', PhotoVote);
app.mount('#app');

// Initialise flatpickr date pickers after Vue has mounted
const startEl = document.querySelector('#start');
const finishEl = document.querySelector('#finish');
if (startEl && finishEl) {
    let st, fi;
    st = flatpickr(startEl, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true,
        onOpen: function(selectedDates, dateStr, instance) {
            instance.set('maxDate', fi.selectedDates[0]);
        },
        onChange: function(selectedDates, dateStr, instance) {
            fi.set('minDate', dateStr);
        },
    });
    fi = flatpickr(finishEl, {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true,
        onOpen: function(selectedDates, dateStr, instance) {
            instance.set('minDate', st.selectedDates[0]);
        },
        onChange: function(selectedDates, dateStr, instance) {
            st.set('maxDate', dateStr);
        },
    });
}
