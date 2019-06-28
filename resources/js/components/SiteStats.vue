<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">
            AdinoWayne Best Riven
        </h1>
        <ul>
            <li><strong>Total Series:</strong> {{ series }} </li>
            <li><strong>Total Lession:</strong> {{ lession }}</li>
        </ul>
    </div>
</template>
<script>
export default {
    data() {
        return {
            series: 0,
            lession: 0
        };
    },
    created() {
        axios.get('http://localhost:8000/api/stats')
            .then(response => response.data)
            .then(function(data) {
                this.series = data.series;
                this.lession = data.lessions;
            }.bind(this))
    }
}
</script>

