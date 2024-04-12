<template>
  <h4 class="bg-primary text-light">About Component</h4>
</template>

<script>
export default {
 created(){
        alert("about created");
    },
    unmounted(){
          alert("about unmounted");
    },
    activated(){
        alert("about activated");
    },
    deactivated(){
        alert("about deactivated");
    },
}
</script>

<style>

</style>