<template>
    <div>
        <h1 class="font-mormal text-3xl text-grey-darkest leading-none mb-12">
            Your Achievements
        </h1>
        <ul>
            <li v-for="achievement in achievenments"
                v-text="achievement"
            ></li>
        </ul>
    </div>
</template>
<script>
export default {
    data() {
        return { achievenments: []};
    },
    created() {
        axios.get('http://localhost:8000/api/achievenments')
             .then(response => {
                 this.achievenments = response.data;
                 console.log(this.achievenments)
             })
    }
}
</script>

