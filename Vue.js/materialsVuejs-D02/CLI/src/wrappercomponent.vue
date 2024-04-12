<template>
    <div class="container text-center border border-1 mt-1">
        <headercomponent :branch="{name:'alex',capacity:150,tracks:5}">
            <template v-slot:top>
                <h6>Creativa Hub</h6>
            </template>
           <template v-slot:bottom>
                <h6>2024</h6>
            </template>
            
        </headercomponent>
        <div class="row justify-content-between my-1" >
            <linkscomponent/>
               
           <!-- body component -->
           <bodycomponent/>
        </div>
        <footercomponent/>
    </div>
</template>

<script>
// step1 
import headercomponent from '@/components/headercomponent.vue';
import footercomponent from '@/components/footercomponent.vue';
import linkscomponent from '@/components/linkscomponent.vue';
import bodycomponent from '@/components/bodycomponent.vue';
export default {
    data(){
        return{

        }
    },
    methods:{

    },
    components:{
        //2 register imported component inside components member 
        headercomponent,
        footercomponent,
        linkscomponent,
        bodycomponent
    }
    
}
</script>

<style>

</style>