<template>
   <div class="col-9">
 
    <addcomponent @onstduentadded="addStudent"/>
    <table class="table table-striped table-bordered text-center">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <tr v-for="student in students" :key="student.id">
                <td>{{student.id}}</td>
                <td>{{student.name}}</td>
                <td>{{student.city}}</td>
                <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#updatemodal" @click="filldata(student)">Update</button> &nbsp;|&nbsp; <button class="btn btn-danger" @click=deletestudent(student.id)>Delete</button></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4">Total # Of Students = {{students.length}}</th>
            </tr>
        </tfoot>
    </table>
    <!-- update modal -->
     <div class="modal fade" data-bs-backdrop="static" id="updatemodal" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-center w-100">Updating</h5>
                </div>
                <div class="modal-body">
                   <input type="text" class="form-control my-1" placeholder="ID" v-model="stdid" disabled> 
                    <input type="text" class="form-control my-1" placeholder="Name" v-model="stdname">
                    <input type="text" class="form-control my-1" placeholder="City" v-model="stdcity">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-bs-dismiss="modal" @click="updatestudent">update</button>
                    <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
  </div>


    </div>

    

</template>

<script>
// import students from '../students';
import addcomponent from './addcomponent.vue'
export default {
    async created(){
        // fetch api call : load all students data from http://localhost:5000/students
        let resp=await fetch("http://localhost:5000/students");
            let allstds=await resp.json();
            this.students=allstds;
    },
    data(){
        return {
            stdid:0,
            stdname:'',
            stdcity:'',
            students:[]
        }
    },
    methods:{
        filldata(_std){
            this.stdid=_std.id;
            this.stdname=_std.name;
            this.stdcity=_std.city;
        },
        async updatestudent(){
            let updatedobject = {id:this.stdid,name:this.stdname,city:this.stdcity};
            await fetch(`http://localhost:5000/students/${this.stdid}`,{
                method:"PUT",
                headers:{
                    "Content-Type":"application/json"
                },
                body:JSON.stringify(updatedobject)
            });
            this.students.find(std=>std.id==this.stdid).name=this.stdname;
            this.students.find(std=>std.id==this.stdid).city=this.stdcity;
        },
        async deletestudent(_id){
            // delete from DB
           await fetch(`http://localhost:5000/students/${_id}`,{
            method:"DELETE"
           });
           // Delete from UI
          // this.students.splice(this.students.findIndex(std=>std.id==_id),1);
          this.students=this.students.filter(std=>std.id!=_id);
        },
        async addStudent(_data){
            // console.log("from body component " ,_data);
            let newstd={id:Number(this.students[this.students.length-1].id)+100,name:_data.name,city:_data.city};
           await fetch("http://localhost:5000/students",{
            method:"POST",
            headers:{
                "Content-Type":"application/json"
            },
            body:JSON.stringify(newstd)
           })
            // update UI
            this.students.push(newstd);
        }
    },
    components:{
        addcomponent
    }
}
</script>

<style>

</style>