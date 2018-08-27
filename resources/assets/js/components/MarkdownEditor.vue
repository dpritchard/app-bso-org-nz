<template>
<div>
    <div class="nav nav-pills mb-2" role="tablist">
        <button id="edit-tab"
                v-bind:class="['btn', 'btn-sm',  edit ? 'btn-secondary' : 'btn-outline-secondary', 'mr-2']"
                @click="toggleEdit"
                type="button"
                role="tab"
                aria-controls="edit"
                :aria-selected="edit">
                <i class="far fa-edit" :aria-selected="edit"></i> Edit
        </button>
        <button id="preview-tab"
                v-bind:class="['btn', 'btn-sm', !edit ? 'btn-secondary' : 'btn-outline-secondary', 'mr-auto']"
                @click="toggleEdit(); updatePreview()"
                type="button"
                role="tab"
                aria-controls="preview"
                :aria-selected="!edit">
                <i class="far fa-eye" :aria-selected="!edit"></i> Preview
        </button>
        <button v-show="edit"
                class="btn btn-sm btn-outline-secondary dropzone-click-trigger"
                type="button">
                <i class="fas fa-file-upload"></i> Drag to the editor or click here.
        </button>
    </div>

    <div class="tab-content">
        <div id="edit" v-bind:class="['tab-pane', 'fade', { active: edit, show: edit }]" role="tabpanel" aria-labelledby="edit-tab">
            <div>
                <textarea
                    ref="editor"
                    id="editor"
                    class="form-control"
                    v-model="value"
                    name="body"
                    rows="10">
                </textarea>
            </div>
        </div>
        <div id="preview" v-bind:class="['tab-pane', 'fade', { active: !edit, show: !edit }]" v-html="preview" role="tabpanel" aria-labelledby="preview-tab"></div>
    </div>
</div>
</template>

<script>
import Dropzone from 'dropzone' //eslint-disable-line
Dropzone.autoDiscover = false
export default {
    data() {
        return {
            edit: true,
            value: '',
            preview: '',
            dropzoneSettings: {
                url: "/admin/file",
                createImageThumbnails: false,
                clickable: ".dropzone-click-trigger"
            }
        }
    },
    props: {
        input: {
            type: String
        }
    },
    methods: {
        toggleEdit() {
            // console.log(event.target);
            if (event.target.getAttribute('aria-selected')) {
                return
            }
            this.edit = !this.edit
        },
        updatePreview() {
            axios.post('/api/render-md', {
                input: this.value,
            })
            .then((response) => {
                // console.log(response);
                this.preview = response.data;
            })
            .catch((error) => {
                if (error.response) {
                    // The request was made and the server responded with a status code
                    // that falls out of the range of 2xx
                    console.log(error.response);
                    this.preview = '<code>Markdown preview failed (' + error.response.data.message + ')</code>';
                } else if (error.request) {
                    // The request was made but no response was received
                    // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
                    // http.ClientRequest in node.js
                    console.log(error.request);
                    this.preview = '<code>Markdown preview failed (request failed to send)</code>';
                } else {
                    // Something happened in setting up the request that triggered an Error
                    console.log(error);
                    this.preview = '<code>Markdown preview failed (' + error.message + ')</code>';
                }
            })
        },
        placeholderText(file) {
            return '[Uploading: ' + file.name + ']'
        },
        errorText(file) {
            return '[Error Uploading File (see log for details): ' + file.name + ']'
        },
        setPlaceholder(file) {
            this.insertAtCursor(this.placeholderText(file))
        },
        replacePlaceholder(file, replacement) {
            // console.log("REPLACING");
            this.value = this.value.replace(this.placeholderText(file), replacement);
        },
        insertAtCursor(insert){
            // get cursor's position:
            let startPos = this.$refs.editor.selectionStart;
            let endPos = this.$refs.editor.selectionEnd;
            let cursorPos = startPos;
            let tmpStr = this.$refs.editor.value;

            // insert:
            this.value = tmpStr.substring(0, startPos) + insert + tmpStr.substring(endPos, tmpStr.length);

            // move cursor:
            setTimeout(() => {
                cursorPos += insert.length;
                this.$refs.editor.selectionStart = this.$refs.editor.selectionEnd = cursorPos;
            }, 10);
        }
    },
    mounted() {
        this.token = document.head.querySelector('meta[name="csrf-token"]').content;
        if (!this.token) {
            console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
        }
        this.value = this.input
        this.dropzone = new Dropzone(this.$refs.editor, this.dropzoneSettings)
        this.dropzone.on('sending', (file, xhr, formData) => {
            console.log('SEND')
            formData.append('_token', this.token)
            this.setPlaceholder(file)
        })
        this.dropzone.on('success', (file, response) => {
            setTimeout(() => {
                this.replacePlaceholder(file, response.md_link)
                this.dropzone.removeFile(file)
            }, 2000);
        })
        this.dropzone.on('error', (file, message, xhr) => {
            setTimeout(() => {
                console.log(message);
                console.log(xhr);
                this.replacePlaceholder(file, this.errorText(file))
                this.dropzone.removeFile(file)
            }, 2000);
        })
    }
}
</script>

<style>
#preview {
    min-height: 250px;
    padding: 0.375rem 0.75rem;
    font-size: 0.9rem;
    line-height: 1.6;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
}
</style>
