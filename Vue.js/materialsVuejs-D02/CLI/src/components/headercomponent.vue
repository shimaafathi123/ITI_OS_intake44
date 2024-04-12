<template>
   <div class="row">
   <div class="col-12 py-2 bg-info">
            
                  <slot name="top"/>
                        <h4 class="text-center">Welcome to our application</h4>
                        <p>Branch Name : {{branch.name}}</p>
                    <slot name="bottom"/>
                    <slot>
                              <p>Write your comments here</p>
                     </slot>
    </div>
          </div>
</template>

<script>
export default {
data(){
      return{

      }
},
props:["branch"]
}
</script>

<style>

</style>