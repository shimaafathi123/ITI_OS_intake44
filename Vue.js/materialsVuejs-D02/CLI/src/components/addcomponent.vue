<template>
  <div>
    <button class="btn btn-success w-100 my-1" data-bs-toggle="modal" data-bs-target="#addmodal" >Add</button>
  <div class="modal fade" data-bs-backdrop="static" id="addmodal" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-center w-100">Adding New Student</h5>
                </div>
                <div class="modal-body">
                   
                    <input type="text" class="form-control my-1" placeholder="Name" v-model="stdname">
                    <input type="text" class="form-control my-1" placeholder="City" v-model="stdcity">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-bs-dismiss="modal" @click="newstudentadded">Add</button>
                    <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
  </div>
  </div>
</template>

<script>
export default {
    data(){
        return {
           
            stdname:"",
            stdcity:''
        }
    },
    methods:{
        newstudentadded(){
            // raise event using $emit(eventname,data)
            let createdstd = {name:this.stdname,city:this.stdcity};
            this.$emit("onstduentadded",createdstd);
        }
    }
}
</script>

<style>

</style>