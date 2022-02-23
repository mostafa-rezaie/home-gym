<template>
  <div>
      <div>
      this is the prograss bar
and the plan number is {{title}}

    <vue-ellipse-progress :progress=".50" :size="250" color="blue" >
        <p slot="legend-caption"> good job</p>
    </vue-ellipse-progress>
    
      </div>
      </div>
</template>

<script>
export default {
    name :'progress',
    data() {
        return {
            progress:number,
        }
    },
    props:{
        title:Number,
    }
}
</script>