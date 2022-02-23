<template>
    <div>
        this is hello page
        the masaage is {{massage}}
        <button @click="sayHi()"> click me1</button>
    </div>
</template>


<script>
export default {
    data() {
        return {
            massage:'hey',
        }
    },
    methods:{
        sayHi(){
            console.log('hey');
        }
    }
}
</script>