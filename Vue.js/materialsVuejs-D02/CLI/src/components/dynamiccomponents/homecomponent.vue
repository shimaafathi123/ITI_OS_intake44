<template>
<div>
  <h4 class="bg-danger text-light">Home Component</h4>
  <p>Counter : {{counter}}</p>
  <button class="btn btn-primary my-2" @click=counter++>Increase</button>
</div>
</template>

<script>
export default {
    created(){
        alert("home created");
    },
    unmounted(){
          alert("home unmounted");
    },
    activated(){
        alert("home activated");
    },
    deactivated(){
        alert("home deactivated");
    },
    data(){
        return {
            counter:10
        }
    }
}
</script>

<style>

</style>