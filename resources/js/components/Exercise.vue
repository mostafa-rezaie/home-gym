<template>
  <div class="container">
    <div class="box flex justify-center">
      <div class="w-2/3 items-center justify-center">
        <img :src="imageSrc" alt="" />

        image container the chosen plan is {{ plan }}
      </div>
      <div class="w-1/3 items-center justify-center">time container</div>
    </div>
    
  </div>
</template>

<script>
export default {
  data() {
    return {
      exerciseName: ["ex1", "ex2", "ex3"],
      imageSrc: "gifs/1/1.gif",
    };
  },
  props: {
    plan: Number,
  },
  methods: {
    changeUrl() {
      console.log("hey");
    },
    sayHi(){
        console.log('say hi');
    }
  },
  mounted(){
      this.sayHi()
  }
};
</script>