<template>
    <div class="row">
        <fieldset class="col-md">
            <label for="contact_name" class="form-label">Contact Name</label>
            <div class="autocomplete-wrap">
                <input
                    v-model="name"
                    @input="onInput"
                    @focus="showList = true"
                    @blur="onBlur"
                    type="text"
                    class="form-control"
                    id="contact_name"
                    name="contact_name"
                    autocomplete="off"
                >
                <ul v-if="showList && filtered.length" class="autocomplete-list">
                    <li v-for="item in filtered" :key="item.name" @mousedown="select(item)">
                        <p class="fw-bold p-0 m-0">{{ item.name }}</p>
                        <p class="small p-0 m-0">{{ item.phone }}</p>
                        <p class="small p-0 m-0">{{ item.email }}</p>
                    </li>
                </ul>
            </div>
            <small class="text-muted">The person or organisation to contact (required)</small>
        </fieldset>
        <fieldset class="col-md">
            <label for="contact_email" class="form-label">Contact Email</label>
            <input v-model="email" type="email" class="form-control" id="contact_email" name="contact_email">
            <small class="text-muted">Contact email address (not required)</small>
        </fieldset>
        <fieldset class="col-md">
            <label for="contact_phone" class="form-label">Contact Phone</label>
            <input v-model="phone" type="text" class="form-control" id="contact_phone" name="contact_phone">
            <small class="text-muted">Contact phone number (not required)</small>
        </fieldset>
    </div>
</template>

<script>
export default {
    props: {
        source: { type: Array, required: true },
        model:  { type: Object, required: true },
        old:    { type: Object, required: true },
    },
    data() {
        return {
            name:     '',
            email:    '',
            phone:    '',
            showList: false,
        }
    },
    computed: {
        filtered() {
            if (!this.name) return this.source;
            const pattern = new RegExp(this.name.toLowerCase());
            return this.source.filter(item => pattern.test(item.name.toLowerCase()));
        },
    },
    created() {
        this.name  = this.model.name  || this.old.contact_name  || '';
        this.email = this.model.email || this.old.contact_email || '';
        this.phone = this.model.phone || this.old.contact_phone || '';
    },
    methods: {
        onInput() {
            this.email = '';
            this.phone = '';
            this.showList = true;
        },
        onBlur() {
            this.showList = false;
        },
        select(item) {
            this.name  = item.name;
            this.email = item.email;
            this.phone = item.phone;
            this.showList = false;
        },
    },
}
</script>

<style scoped>
.autocomplete-wrap {
    position: relative;
}

.autocomplete-list {
    position: absolute;
    z-index: 100;
    width: 100%;
    max-height: 400px;
    overflow-y: auto;
    list-style: none;
    padding: 0;
    margin: 0;
    border: 1px solid #CFD4D9;
    border-top: none;
    background: #fff;
}

.autocomplete-list li {
    padding: 10px;
    cursor: pointer;
    border-bottom: 1px solid #CFD4D9;
    text-align: left;
}

.autocomplete-list li:last-child {
    border-bottom: none;
}

.autocomplete-list li:hover {
    background-color: #eee;
}
</style>
