<template>
  <div class="row">
    <fieldset class="form-group col-md">
      <label for="contact_name">Contact Name</label>
      <v-autocomplete
        v-model="item"
        @update-items="updateItems"
        @item-selected="itemSelected"
        @change="change"
        :items="items" :get-label="itemToValue"
        :min-len="0" :auto-select-one-item="false"
        :component-item='template'
        :input-attrs="{
            class: 'form-control',
            id: 'contact_name',
            name: 'contact_name',
            type: 'text'
        }">
      </v-autocomplete>
      <small class="text-muted">The person or organisation to contact (required)</small>
    </fieldset>
    <fieldset class="form-group col-md">
      <label for="contact_email">Contact Email</label>
      <input v-model="email" type="email" class="form-control" id="contact_email" name="contact_email">
      <small class="text-muted">Contact email address (not required)</small>
    </fieldset>
    <fieldset class="form-group col-md">
      <label for="contact_phone">Contact Phone</label>
      <input v-model="phone" type="text" class="form-control" id="contact_phone" name="contact_phone">
      <small class="text-muted">Contact phone number (not required)</small>
    </fieldset>
  </div>
</template>

<script>
import ItemTemplate from './AutocompleteContactsTemplate.vue'
import Autocomplete from 'v-autocomplete';

export default {
  data () {
    return {
      item: {},
      items: [],
      email: '',
      phone: '',
      template: ItemTemplate
    }
  },
  components: {
    'v-autocomplete': Autocomplete
  },
  props: {
    source: {
      type: Array,
      required: true
    },
    model: {
      type: Object,
      required: true
    },
    old: {
      type: Object,
      required: true
    }

  },

  created() {
    this.items = this.source;
    this.item.name = this.model.name || this.old.contact_name || ''
    this.item.email = this.email = this.model.email || this.old.contact_email || ''
    this.item.phone = this.phone = this.model.phone || this.old.contact_phone || ''
  },

  methods: {
    itemToValue (item) {
      if (item) {
        return item.name
      }
    },
    change() {
      this.email = null;
      this.phone = null;
    },
    itemSelected(item) {
      this.email = item.email;
      this.phone = item.phone;
    },
    updateItems(text) {
      if (text) {
        this.items = this.source.filter((item) => {
          return (new RegExp(text.toLowerCase())).test(item.name.toLowerCase())
        });
      }
    },
  }
}
</script>

<style>
/* .v-autocomplete .v-autocomplete-input-group .v-autocomplete-input {
font-size: 1.5em;
padding: 10px 15px;
box-shadow: none;
border: 1px solid #157977;
width: calc(100% - 32px);
outline: none;
background-color: #eee;
} */

/* .v-autocomplete .v-autocomplete-input-group.v-autocomplete-selected .v-autocomplete-input {
color: #008000;
background-color: #f2fff2;
} */

.v-autocomplete .v-autocomplete-list {
  width: 100%;
  text-align: left;
  border: none;
  border-top: none;
  max-height: 400px;
  overflow-y: auto;
  border-bottom: 1px solid #CFD4D9;
}

.v-autocomplete .v-autocomplete-list .v-autocomplete-list-item {
  cursor: pointer;
  background-color: #fff;
  padding: 10px;
  border-bottom: 1px solid #CFD4D9;
  border-left: 1px solid #CFD4D9;
  border-right: 1px solid #CFD4D9;
}

.v-autocomplete .v-autocomplete-list .v-autocomplete-list-item:last-child {
  border-bottom: none;
}

.v-autocomplete .v-autocomplete-list .v-autocomplete-list-item:hover {
  background-color: #eee;
}

pre {
  text-align: left;
  white-space: pre-wrap;
  background-color: #eee;
  border: 1px solid #c0c0c0;
  padding: 20px !important;
  border-radius: 10px;
  font-family: monospace !important;
}

.left {
  text-align: left;
}

.note {
  border-left: 5px solid #ccc;
  padding: 10px;
}

</style>
