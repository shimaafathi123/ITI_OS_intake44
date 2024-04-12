<template>
<div>
  <div class="row g-0 text-center" >
    <ul class="breadcrumb bg-secondary text-light w-50 mx-auto py-2 d-flex justify-content-around">
        <li class="breadcrumb-item"><a href="#" class="text-light" @click="targetcomponent='home'">Home</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-light" @click="targetcomponent='contact'">Contact</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-light" @click="targetcomponent='about'">About</a></li>
    </ul>
  </div><!-- end of menue-->
  <div class="row w-50 m-auto text-center g-0">
    <keep-alive>
        <component :is="targetcomponent"/>
    </keep-alive>
  </div>
</div>
</template>

<script>
import home from '@/components/dynamiccomponents/homecomponent.vue';
import about from '@/components/dynamiccomponents/aboutcomponent.vue';
import contact from '@/components/dynamiccomponents/contactcomponent.vue';
export default {
    data(){
        return{
            targetcomponent:'home'
        }
    },
components:{
    home,about,contact
}
}
</script>

<style>

</style>