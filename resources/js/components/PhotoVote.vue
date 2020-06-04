<template>

<div class="container">
<div class="row mb-3">
    <div v-for="cat in categories" class="col-sm text-center">
        <h3>{{ cat.name }}</h3>
        <p><a href="#" @click="showCategory(cat.code)" class="btn btn-outline-primary" role="button">View Category Entries</a></p>
    </div>
</div>

<div class="row mb-3" v-if="hasShortlist">
    <div class="col">
        <h2>Your Shortlist</h2>
        <p>You have shortlisted {{ this.shortlist.length }} image{{ this.shortlist.length == 1 ? '' : 's' }}.</p>
        <p><button type="button" class="btn btn-outline-secondary" @click="showShortlist" :disabled="!hasShortlist">Review My Shortlist</button></p>
    </div>
</div>

<div class="row mb-3" v-if="hasVotes & allowVotes">
    <div class="col">
        <h2>Your Vote{{ this.votes.length == 1 ? '' : 's' }}</h2>
        <p>You have voted for {{ this.votes.length }} image{{ this.votes.length == 1 ? '' : 's' }}.</p>
        <p><button type="button" class="btn btn-outline-success" @click="showVotes" :disabled="!hasVotes">Review My Votes</button></p>
        <p>To cast your vote, please send an email to Angela Brandt (BrandtA@landcareresearch.co.nz) with the following information, or 
        <a href="#" @click="sendMail">click here</a> to open a draft message in your mail client.</p>
        <p>
        <ul>
            <li v-for="vote in votes">{{ vote.title }} (code: {{ vote.id }})</li>
        </ul>
        </p>
    </div>
</div>

<div class="overlay" v-bind:class="{ 'show-overlay': showModal }">
    <a href="#" class="cancel" @click="hide"></a>
    <div class="my-modal text-center">
        <img :src="this.currItem.url" class="img-fluid img-modal">
        
        <div class="text-center">
            <p>
                {{ this.currView+1 }} of {{ this.currList.length }}: 
                {{ this.currItem.caption ? this.currItem.caption : this.currItem.title }}.
            </p>
        </div>
        
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-outline-secondary" @click="previous" :disabled="atBeginning"><<</button>
            <div class="d-flex flex-column justify-content-center flex-sm-row">
                <button type="button" class="btn" @click="toggleShortlist" 
                        v-bind:class="[this.currItem.onShortlist ? 'btn-secondary' : 'btn-outline-secondary']">
                        {{ this.currItem.onShortlist ? 'Remove from Shortlist' : 'Add to Shortlist' }}
                </button>
                <button type="button" class="btn" @click="toggleVote"
                        v-if="allowVotes" 
                        :disabled="!canVote && !this.currItem.hasVote" 
                        v-bind:class="[this.currItem.hasVote ? 'btn-success' : 'btn-outline-success']">
                        {{ this.currItem.hasVote ? 'Remove Vote' : 'Add Vote' }}
                </button>
            </div>
            <button type="button" class="btn btn-outline-secondary" @click="next" :disabled="atEnd">>></button>
        </div>
        <div class="d-flex justify-content-center" v-if="allowVotes">
            <p class="font-weight-lighter text-muted">{{ this.remainingVotes }} vote{{ this.remainingVotes == 1 ? '' : 's'}} remaining</p>
        </div>
    </div>
</div>

</div>

</template>

<script>
	export default {
        props: {
            categories: Array,
            images: Array,
            allowVotes: Boolean
        },
        data: function () {
            return {
                imgDat: {},
                currList: [],
                currView: 0,
                showModal: false
            }
        },
        computed: {
            hasNext: function() {
                return this.currView+1 < this.currList.length
            },
            hasPrevious: function() {
                return this.currView-1 >= 0
            },
            atEnd: function() {
                return !this.hasNext
            },
            atBeginning: function() {
                return !this.hasPrevious
            },
            currItem: function() {
                return this.currList[this.currView] ?? {}
            },
            shortlist: function() {
                return _.filter(this.imgDat, 'onShortlist');
            },
            hasShortlist: function() {
                return this.shortlist.length > 0
            },
            votes: function() {
                return _.filter(this.imgDat, 'hasVote');
            },
            hasVotes: function() {
                return this.votes.length > 0
            },
            canVote: function() {
                return this.votes.length < 3
            },
            remainingVotes: function() {
                return 3-this.votes.length
            }
        },
        methods: {
            show: function() {
                 this.showModal = true;
             },
             hide: function() {
                 this.showModal = false;
             },
             next: function() {
                 this.hasNext ? this.currView++ : null;
             },
             previous: function() {
                 this.hasPrevious ? this.currView-- : null;
             },
             toggleShortlist: function(){
                this.currItem.onShortlist = !this.currItem.onShortlist
             },
             toggleVote: function(){
                if(this.currItem.hasVote) {
                    this.currItem.hasVote = false;
                    return null;
                }
                if(this.canVote) {
                    this.currItem.hasVote = true;
                }
             },
             showCategory: function(code){
                this.currList = _.filter(this.imgDat, ['catString', _.toString(code)]);
                this.currView = 0;
                this.show();
             },
             showShortlist: function(){
                if(this.hasShortlist){
                    this.currList = this.shortlist
                    this.currView = 0;
                    this.show();
                }
             },
             showVotes: function(){
                if(this.hasVotes){
                    this.currList = this.votes
                    this.currView = 0;
                    this.show();
                }
             },
             sendMail: function(){
                var address = ['BrandtA', 'landcareresearch.co.nz']
                var subject = 'BSO Photo Competition Votes'
                var s = this.votes.length == 1 ? '' : 's'
                var bodylines = [
                    'Hello Angela,', '',
                    'I would like to cast the following vote' + s +' in the BSO photo competition:', '']
                _.forEach(this.votes, function(value) {
                    bodylines.push('    - ' + value.title + ' (code: ' + value.id + ')')
                })
                var uri = "mailto:" + address.join('@')
                uri = uri + "?&subject=" + encodeURIComponent(subject)
                uri = uri + "&body=" + encodeURIComponent(bodylines.join('\r\n'))
                document.location.href = uri;
             }
        },
        mounted: function () {
            this.imgDat =  _.map(this.images, (value, index, collection) => {
                    var parts = value.f.match(/(\d+)_(\d+)_(.+)\./m)
                    return {
                        id: parts[1] + '-' + parts[2],
                        category: _.find(this.categories, ['code', _.toInteger(parts[1])]),
                        catString: parts[1],
                        imgString: parts[2],
                        title: parts[3].replace(/_+/gm, " ").replace(/[\s.]+$/gm, ""),
                        caption: value.c.replace(/[\s.]+$/gm, ""),
                        url: value.f,
                        onShortlist: false,
                        hasVote: false
                    }
                })
        }
    }
</script>

<style>
    .overlay {
         visibility: hidden;
         position: fixed;
         top: 0;
         right: 0;
         bottom: 0;
         left: 0;
         display: flex;
         align-items: center;
         justify-content: center;
         background: rgba(0, 0, 0, .4);
         transition: opacity .3s;
         opacity: 0;
         overflow-x: hidden;
        overflow-y: auto;
     }

     /*.overlay:target {
         visibility: visible;
         opacity: 1;
     }*/

     .show-overlay {
         visibility: visible;
         opacity: 1;
     }

     .my-modal {
         position: relative;
         width: 1000px;
         max-width: 75%;
         /*height: 90%;*/
         background: white;
         border-radius: 4px;
         padding: 2.5em;
         box-shadow: 0 5px 11px rgba(36, 37, 38, 0.08);
     }

     .modal .close {
         position: absolute;
         top: 15px;
         right: 15px;
         color: grey;
         text-decoration: none;
     }

     .overlay .cancel {
         position: fixed;
         width: 100%;
         height: 100%;
     }

     .img-modal {
        max-height: 500px;
     }


</style>