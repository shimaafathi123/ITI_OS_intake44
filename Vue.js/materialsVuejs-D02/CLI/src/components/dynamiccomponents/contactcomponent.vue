<template>
  <h4 class="bg-warning ">contact Component</h4>
</template>

<script>
export default {
 created(){
        alert("contact created");
    },
    unmounted(){
          alert("contact unmounted");
    },
    activated(){
        alert("contact activated");
    },
    deactivated(){
        alert("contact deactivated");
    },
}
</script>

<style>

</style>