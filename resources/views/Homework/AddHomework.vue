<template>
    <div>
        <div class="form" id="bar">
            <div class="toplink">
                <h2 class="stuName">
                    Homework
                </h2>
                <h4 class="stuLink">
                    <a href="" style="text-decoration:none;color:#1b5e20;">Home </a> > Homework
                </h4>
            </div>
            <hr style="margin-bottom: -0.5rem;">

            <div class="card">
                <div class="card-header">
                    <h6>Select Criteria</h6>
                </div>
                <div class="card-body">
                    <div class="row" id="row" style="margin: 0px;">
                        <div class="col-sm-4 col-lg-4 col-12 ">
                            <label for="name" class="title">Class
                                <strong>*</strong>
                            </label>
                            <select class="inputbox" name="class">
                                <option selected disabled>Select Class</option>
                                <option value="Class 1">Class 1</option>
                                <option value="Class 2">Class 2</option>
                                <option value="Class 3">Class 2</option>
                            </select>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-12">
                            <label for="name" class="title">Section
                            </label>
                            <select class="inputbox" name="class">
                                <option selected disabled>Select Section</option>
                                <option value="Section A">Section A</option>
                                <option value="Section B">Section B</option>
                                <option value="Section C">Section C</option>
                            </select>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-12">
                            <label for="name" class="title">Subject
                            </label>
                            <select class="inputbox" name="class">
                                <option selected disabled>Select Subject</option>
                                <option value="Subject 1">Subject 1</option>
                                <option value="Subject 2">Subject 2</option>
                                <option value="Subject 3">Subject 3</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button class="searchButton">Search</button>
                        </div>
                    </div>
                </div>

                <div class="sub-header">
                    <h6>Homework List</h6>
                    <button class="add" data-toggle="modal" data-target="#AddHomework">Add</button>
                </div>
                <div class="card-body">
                    <input type="text" placeholder="Search..." class="searchText">
                    <div class="copyRows">
                        <div class="row" id="copyRow">
                            <div class="col-2">
                            <a href="#" title="Copy">
                                <i class="fa fa-copy"></i>
                            </a>
                            </div>
                            <div class="col-2">
                                <a href="#" title="Excel">
                                <i class="fa fa-file-excel-o"></i>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="#" title="PDF">
                                <i class="fa fa-file-pdf-o"></i>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="#" title="Print">
                                <i class="fa fa-print"></i>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="#" title="Columns">
                                <i class="fa fa-columns"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">            
                        <table class="table table-hover table-striped" id="studenttable">
                            <thead>
                                <tr>
                                    <th class="all" nowrap>Class</th>
                                    <th class="all" nowrap>Section</th>
                                    <th class="all" nowrap>Subject</th>
                                    <th class="all" nowrap>Homework Date</th>
                                    <th class="all" nowrap>Submission Date</th>
                                    <th class="all" nowrap>Evaluation Date</th>
                                    <th class="all" nowrap>Created By</th>
                                    <th class="all" style="text-align:right;" nowrap>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="active">
                                    <td class="all" nowrap>
                                        Class 1
                                    </td>
                                    <td class="all" nowrap>
                                        Section 1
                                    </td>
                                    <td class="all" nowrap>
                                        Subject 1
                                    </td>
                                    <td class="all" nowrap>
                                        07/02/2018
                                    </td>
                                    <td class="all" nowrap>
                                        07/02/2018
                                    </td>
                                    <td class="all" nowrap>

                                    </td>
                                    <td class="all" nowrap>

                                    </td>
                                    <td style="text-align:right;min-width: 80px">
                                        <i class="fa fa-list pen"  data-toggle="modal" data-target="#EvaluateHomework">
                                            <span class="penLabel">Detail</span>
                                        </i>
                                        <i class="fa fa-pencil pen">
                                            <span class="penLabel">Edit</span>
                                        </i>
                                        <i class="fa fa-trash time">
                                            <span class="timeLabel">Delete</span>
                                        </i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Start Add Homework  -->
        <div class="modal" id="AddHomework">
            <div class="modal-dialog modal-lg">
                <div class="modal-content modal-media-content">
                     <div class="sub-header" style="padding: 0px 15px;margin: 0px;">
                        <h6>Homework List</h6>
                        <i class="fa fa-times time modal_close_btn" data-dismiss="modal"></i>
                    </div>
                    <div class="modal-body" style="padding: 10px 0px;">
                        <div class="row" id="row" style="margin: 0px;">
                            <div class="col-lg-4 col-12">
                                <label for="name" class="title">Class
                                    <strong>*</strong>
                                </label>
                                <select class="inputbox" name="class">
                                    <option selected disabled>Select Class</option>
                                    <option value="Class 1">Class 1</option>
                                    <option value="Class 2">Class 2</option>
                                    <option value="Class 3">Class 2</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="name" class="title">Section
                                    <strong>*</strong>
                                </label>
                                <select class="inputbox" name="class">
                                    <option selected disabled>Select Section</option>
                                    <option value="Section A">Section A</option>
                                    <option value="Section B">Section B</option>
                                    <option value="Section C">Section C</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="name" class="title">Subject
                                    <strong>*</strong>
                                </label>
                                <select class="inputbox" name="class">
                                    <option selected disabled>Select Subject</option>
                                    <option value="Subject 1">Subject 1</option>
                                    <option value="Subject 2">Subject 2</option>
                                    <option value="Subject 3">Subject 3</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="uploadDate">Homework Date</label>
                                <input type="date" class="inputbox" id="uploadDate">
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="uploadDate">Submission Date</label>
                                <input type="date" class="inputbox" id="uploadDate">
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="faPhoto">Attach Document</label>
                                <input type="file" class="inputbox" id="faPhoto">
                            </div>
                            <div  class="col-sm-12 col-lg-12 col-12" style="margin-top: 10px">
                                <wysiwyg />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="padding: 10px 15px;">
                        <button class="save btn-dark" style="margin: 0px;">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Homework  -->
        <!-- Start Evaluate Homework  -->
        <div class="modal" id="EvaluateHomework">
            <div class="modal-dialog modal-lg">
                <div class="modal-content modal-media-content">
                     <div class="sub-header" style="padding: 0px 15px;margin: 0px;">
                        <h6>Evaluate List</h6>
                        <i class="fa fa-times time modal_close_btn" data-dismiss="modal"></i>
                    </div>
                    <div class="modal-body" style="padding: 0px">
                        <div class="row" id="row" style="margin: 0px;">
                            <div class="col-lg-8 col-12" style="padding: 15px">
                                <div class="alert alert-primary">
                                    Homework already evaluated, now you can update evaluation.
                                </div>

                                <div class="row" id="row" style="margin: 0px;align-items: center;">
                                    <div class="col-lg col-12" style="padding: 0px;">
                                        <div style="margin-bottom: 5px;">
                                            <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                                <span style="font-weight: bold">Students List</span>
                                            </p>
                                        </div>
                                        <div style="padding: 15px;height: 450px;background-color: #eae6e6;">
                                            <div class="row" style="margin: 0px;margin-bottom: 10px">
                                            <div class="col-10" style="padding: 0px;">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="border-radius: unset;">
                                                            <i class="fa fa-search" style="font-size: 12px;"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control inputbox" placeholder="Search">
                                                </div>
                                            </div>
                                            <div class="col-2" style="padding: 0px;">
                                                <button @click="checkStudent()" class="btn_check_box" style="float: right;">
                                                    <i v-if="!checkUnCompleted" class="fa fa-square-o"></i>
                                                    <i v-if="checkUnCompleted" class="fa fa-check-square-o"></i>
                                                </button>
                                            </div>
                                        </div>
                                            <div style="height: 382px;background-color: white;overflow-y: scroll;">
                                                <div v-for="(item, index) in showStudents">
                                                    <div @click="clickStudent(index)" v-if="!item.active" class="div_noactive">
                                                        {{item.name}}
                                                    </div>
                                                    <div @click="clickStudent(index)" v-if="item.active" class="div_active">
                                                        {{item.name}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-12" style="text-align: center;padding: 5px 0px;">
                                        <div style="text-align: center;">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-12 div_remove_student">
                                                    <button @click="goUnCompleted()" class="btn_check_box btn_check_small">
                                                        <i class="fa fa-angle-left" style="font-size: 19px;font-weight: bold;"></i>
                                                    </button>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-12 div_remove_student">
                                                    <button @click="goCompleted()" class="btn_check_box btn_check_small1">
                                                        <i class="fa fa-angle-right" style="font-size: 19px;font-weight: bold;"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg col-12" style="padding: 0px;">
                                        <div style="margin-bottom: 5px;">
                                            <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                                <span style="font-weight: bold">Homework Completed</span>
                                            </p>
                                        </div>
                                        <div style="padding: 15px;height: 450px;background-color: #eae6e6;">
                                            <div class="row" style="margin: 0px;margin-bottom: 10px">
                                            <div class="col-10" style="padding: 0px;">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" style="border-radius: unset;">
                                                                <i class="fa fa-search" style="font-size: 12px;"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control inputbox" placeholder="Search">
                                                    </div>
                                                </div>
                                                <div class="col-2" style="padding: 0px;">
                                                    <button  @click="checkCompletedStudent()" class="btn_check_box" style="float: right;">
                                                        <i v-if="!checkCompleted" class="fa fa-square-o"></i>
                                                        <i v-if="checkCompleted" class="fa fa-check-square-o"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div style="height: 382px;background-color: white;overflow-y: scroll;">
                                                <div v-for="(item, index) in showCompletedStudents">
                                                    <div @click="clickCompletedStudent(index)" v-if="!item.active" class="div_noactive">
                                                        {{item.name}}
                                                    </div>
                                                    <div @click="clickCompletedStudent(index)" v-if="item.active" class="div_active">
                                                        {{item.name}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding: 0px 15px;margin-top: 15px;align-items:flex-end;">
                                    <div class="col-sm-12 col-md-12 col-lg" style="padding: 0;">
                                        <label for="uploadDate">Evaluation Date</label>
                                        <input type="date" class="inputbox" id="uploadDate">
                                    </div> 
                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg" style="padding: 0;">
                                        <button class="save btn-dark" style="margin-top: 10px;">Save</button>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-lg-4 col-12" style="background-color: #eae6e6;">
                                <h4 style="margin: 10px 0px">Summary</h4>
                                <hr style="padding: 0px;margin: 0px">            
                                <div style="padding: 5px 0px;">
                                    <div style="padding: 5px 0px;margin-top: 5px;">
                                        <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                            <i class="fa fa-calendar" style="font-size: 15px;"></i>
                                            &nbsp;
                                            <span style="font-weight: bold">Homework Date:</span> 07/16/2018
                                        </p>
                                    </div>
                                    <div style="padding: 5px 0px;">
                                        <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                            <i class="fa fa-calendar"  style="font-size: 15px;"></i>
                                            &nbsp;
                                            <span style="font-weight: bold">Submission Date:</span> 07/16/2018
                                        </p>
                                    </div>
                                    <div style="padding: 5px 0px;">
                                        <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                            <i class="fa fa-calendar"  style="font-size: 15px;"></i>
                                            &nbsp;
                                            <span style="font-weight: bold">Evaluation Date:</span> 07/16/2018
                                        </p>
                                    </div>
                                </div>
                                <div style="padding: 5px 0px;">
                                    <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                        <span style="font-weight: bold">Created By:</span> Joe Black
                                    </p>
                                </div>
                                <div style="padding: 5px 0px;">
                                    <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                        <span style="font-weight: bold">Evaluated By:</span> Joe Black
                                    </p>
                                </div>
                                <div style="padding: 5px 0px;">
                                    <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                        <span style="font-weight: bold">Section:</span> A
                                    </p>
                                </div>
                                <div style="padding: 5px 0px;">
                                    <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                        <span style="font-weight: bold">Class:</span> Class 1
                                    </p>
                                </div>
                                <div style="padding: 5px 0px;">
                                    <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                        <span style="font-weight: bold">Subject:</span> Mathematics
                                    </p>
                                </div>
                                <div style="padding: 5px 0px;">
                                    <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                        <span style="font-weight: bold">Description:</span> Study table from 1-10 .
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Evaluate Homework  -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            checkCompleted: false,
            checkUnCompleted: false,
            selectStudents: [],
            selectCompletedStudents: [],
            showStudents: [
                {"id": 1,"name": "Name1","active": false},
                {"id": 2,"name": "Name2","active": false},
                {"id": 3,"name": "Name3","active": false},
                {"id": 4,"name": "Name4","active": false},
                {"id": 5,"name": "Name5","active": false},
                {"id": 6,"name": "Name6","active": false},
                {"id": 7,"name": "Name7","active": false},
                {"id": 8,"name": "Name8","active": false},
                {"id": 9,"name": "Name9","active": false},
                {"id": 10,"name": "Name10","active": false}
            ],
            showCompletedStudents : [],
        };
    },
    methods: {
        clickStudent(index){
            this.showStudents[index].active = !this.showStudents[index].active;
            if(this.selectStudents.length === 0){
                this.selectStudents.push(this.showStudents[index]);
            }else{  
                var condition = "";
                for(let i = 0;i < this.selectStudents.length;i++){
                    if(this.selectStudents[i].id === this.showStudents[index].id){
                        this.selectStudents.splice(i,1);
                        condition = "b";
                        break;
                    }else{
                        condition = "a";
                    } 
                }
                if(condition == "a"){
                    this.selectStudents.push(this.showStudents[index]);
                }
            }
        },
        clickCompletedStudent(index){
            this.showCompletedStudents[index].active = !this.showCompletedStudents[index].active;
            if(this.selectCompletedStudents.length === 0){
                this.selectCompletedStudents.push(this.showCompletedStudents[index]);
            }else{  
                var condition = "";
                for(let i = 0;i < this.selectCompletedStudents.length;i++){
                    if(this.selectCompletedStudents[i].id === this.showCompletedStudents[index].id){
                        this.selectCompletedStudents.splice(i,1);
                        condition = "b";
                        break;
                    }else{
                        condition = "a";
                    } 
                }
                if(condition == "a"){
                    this.selectCompletedStudents.push(this.showCompletedStudents[index]);
                }
            }
        },
        checkStudent(){
            this.selectStudents = [];
            for(var i = 0;i < this.showStudents.length;i++){
                if(!this.checkUnCompleted){
                    this.showStudents[i].active = true;
                    this.selectStudents.push(this.showStudents[i]);
                }else{
                    this.showStudents[i].active = false;
                }
            }
            this.checkUnCompleted = !this.checkUnCompleted;
        },
        checkCompletedStudent(){
            this.selectCompletedStudents = [];
            for(var i = 0;i < this.showCompletedStudents.length;i++){
                if(!this.checkCompleted){
                    this.showCompletedStudents[i].active = true;
                    this.selectCompletedStudents.push(this.showCompletedStudents[i]);
                }else{
                    this.showCompletedStudents[i].active = false;
                }
            }
            this.checkCompleted = !this.checkCompleted;
        },
        goCompleted(){
            for(let i = 0;i < this.selectStudents.length;i++){
                for(let a = 0;a < this.showStudents.length;a++){
                    if(this.selectStudents[i].id === this.showStudents[a].id){
                        this.showStudents.splice(a,1);
                    }
                }
                this.showCompletedStudents.push(this.selectStudents[i]);
                this.selectCompletedStudents.push(this.selectStudents[i]);
            }
            this.showCompletedStudents.sort((a, b) => {
                if (a.id > b.id) {
                    return 1;
                }
                if (a.id < b.id) {
                    return -1;
                }
                return 0;
            });
            this.selectStudents = [];
        },
        goUnCompleted(){
            for(let i = 0;i < this.selectCompletedStudents.length;i++){
                for(let a = 0;a < this.showCompletedStudents.length;a++){
                    if(this.selectCompletedStudents[i].id === this.showCompletedStudents[a].id){
                        this.showCompletedStudents.splice(a,1);
                    }
                }
                this.showStudents.push(this.selectCompletedStudents[i]);
                this.selectStudents.push(this.selectCompletedStudents[i]);
            }
            this.showStudents.sort((a, b) => {
                if (a.id > b.id) {
                    return 1;
                }
                if (a.id < b.id) {
                    return -1;
                }
                return 0;
            });
            this.selectCompletedStudents = [];
        }
    }
};
</script>

<style>
    .modal_close_btn {
        border: none;
        color: white;
        font-size: 16px;
        cursor: pointer;
        background-color: transparent;
    }

    .btn_check_box {
        background-color: #eae6e6;
        color: #000;
        height: 28px;
        width: 28px;
        font-size: 13px;
        cursor: pointer;
        border-radius: 2px;
        border: 1px solid #a9a3a3;
    }

    .btn_check_box:hover {
        background-color: #ddd;
    }

    .div_remove_student{
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px;
    }

    .modal_close_btn:hover {
        background-color: transparent;
        color: white;
    }

    .div_noactive{
        padding: 10px 15px;
        border-bottom: 1px solid #a9a3a3;
    }

    .div_active{
        padding: 10px 15px;
        color: white;
        background-color: #1b5e20;
        border-bottom: 1px solid #a9a3a3;
    }

    .has-search .form-control {
        padding-left: 2.375rem;
    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }

    @media (min-width: 992px){
        .modal-lg, .modal-xl {
            max-width: 950px;
        }
    }
    @media (max-width: 991px) and (min-width: 0px){
        .btn_check_small{
            float: right;
        }

        .btn_check_small1{
            float: left;
        }
        
        .div_remove_student{
            width: 50% !important;
            display: unset;
        }
    }
    @media (max-width: 576px) and (min-width: 0px){
        .modal-content {
            width: auto !important;
        }
    }
</style>