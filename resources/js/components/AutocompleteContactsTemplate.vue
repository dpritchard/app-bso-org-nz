<template>
<div>
    <p class="font-weight-bold p-0 m-0">{{ item.name }}</p>
    <p class="small p-0 m-0">{{item.phone}}</p>
    <p class="small p-0 m-0">{{item.email}}</p>
</div>
</template>

<script>
export default {
    props: {
        item: {
            required: true
        },
        searchText: {
            required: true
        }
    }
}
</script>
