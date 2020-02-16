
<template>
  <div id="bar" class="Student" style="transition:all 0.5s;">
    <div class="toplink">
      <h4 style="color:var(--primary);margin-bottom:5px;">Students</h4>
      <h6>
        <router-link to="/Student">Home</router-link>> Student Admission
      </h6>
    </div>
    <hr />
    <br />
    <div class="card">
      
      <div class="stucard-header">
        <h6>Student Admission</h6>
      </div>
      <div class="stucard-body">
  
  <!-- <div v-if="student.image === null">
    <h2>Select an image</h2>
    <input type="file" @change="onFileChange($event)">
  </div>
  <div v-else>
    <img :src="student.image"/>
    <button @click="removeImage">Remove image</button>
  </div> -->

        <div class="row">
          <div class="textbox">
            <label for="admnumber">
              Admission Number
              <strong>*</strong>
            </label>
            <input type="text" id="admnumber" class="inputbox" v-model="student.admission_no"
            @keyup="onValidate(student.admission_no, 'admnumber', 'admission_no_msg')"
            v-on:blur="onValidate(student.admission_no, 'admnumber', 'admission_no_msg')"
             />
            <span id="admission_no_msg" class="error_message">Admission number is required.</span>
          </div>
          <div class="textbox">
            <label for="rollnum">Roll Number</label>
            <input type="text" id="rollnum" class="inputbox"  v-model="student.roll_no"/>
          </div>
          <div class="textbox">
            <label for="stuclass">
              Class
              <strong>*</strong>
            </label>
            <select id="stuclass" class="inputbox" v-model="student.class"
            @keyup="onValidate(student.class, 'stuclass', 'stuclass_msg')"
            v-on:blur="onValidate(student.class, 'stuclass', 'stuclass_msg')"
            >
              <option value="one">Grade One</option>
              <option value="two">Grade Two</option>
              <option value="three">Grade Three</option>
            </select>
            <span id="stuclass_msg" class="error_message">Class is required</span>
          </div>
          <div class="textbox">
            <label for="stuSection">
              Section
              <strong>*</strong>
            </label>
            <select id="stuSection" class="inputbox" v-model="student.section"
            @keyup="onValidate(student.section, 'stuSection', 'section_msg')"
            v-on:blur="onValidate(student.section, 'stuSection', 'section_msg')"
            >
              <option value="A">A</option>
              <option value="B">B</option>
            </select>
            <span id="section_msg" class="error_message">Section is required</span>
          </div>
          <div class="textbox">
            <label for="stuName">
              Name
              <strong>*</strong>
            </label>
            <input type="text" class="inputbox" id="stuName" v-model="student.name"
            @keyup="onValidate(student.name, 'stuName', 'name_msg')"
            v-on:blur="onValidate(student.name, 'stuName', 'name_msg')"
             />
            <span id="name_msg" class="error_message">Name is required.</span>
          </div>
          <div class="textbox">
            <label for="stuGender">
              Gender
              <strong>*</strong>
            </label>
            <select id="stuGender" class="inputbox" v-model="student.gender"
            @keyup="onValidate(student.gender, 'stuGender', 'gender_msg')"
            v-on:blur="onValidate(student.gender, 'stuGender', 'gender_msg')"
            >
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
            <span id="gender_msg" class="error_message">Gender is required</span>
          </div>
          <div class="textbox">
            <label for="stubirthday">
              Date Of Birth
              <strong>*</strong>
            </label>
            <!-- <date-picker class="inputbox" id="stubirthday"></date-picker> -->
            <!-- <input type="date" class="inputbox" id="stubirthday" v-model="student.dob" /> -->
            <datepicker v-model="student.dob" id="stubirthday" name="birthday"
            @keyup="onValidate(student.dob, 'stubirthday', 'dob_msg')"
            v-on:blur="onValidate(student.dob, 'stubirthday', 'dob_msg')"
            ></datepicker>
            <span id="dob_msg" class="error_message">Date of birth is required.</span>
          </div>
          <div class="textbox">
            <label for="stuReligion">Religion</label>
            <input type="text" class="inputbox" id="stuReligion" v-model="student.religion"/>
          </div>
          <div class="textbox">
            <label for="stuRace">Race</label>
            <input type="text" class="inputbox" id="stuRace" v-model="student.race" />
          </div>
          <div class="textbox">
            <label for="stuMobile">Mobile Number</label>
            <input type="number" class="inputbox" id="stuMobile" v-model="student.mobileno" />
          </div>
          <div class="textbox">
            <label for="stuEmail">Email</label>
            <input type="text" class="inputbox" id="stuEmail" v-model="student.email"/>
          </div>
          <div class="textbox">
            <label for="admDate">Admission Date</label>
            <!-- <input type="date" class="inputbox" id="admDate" v-model="student.admission_date"/> -->
            <datepicker v-model="student.admission_date" id="admDate" name="admission_date"></datepicker>
          </div>
          <div class="textbox" id="photo">
            
            <label for="stuPhoto">Student Photo</label>
              <input type="file" class="inputbox"   id="stuPhoto" v-if="!student.image" @change="onFileChange($event,'student')" accept="image/*">
              <div class="inputbox" v-else>
                <div style="width:100%;padding:0;">
                <img :src="student.image" alt="error" style="height: 25px;width: auto;">
                <span @click="removeImage($event,'student')" class="span">X</span>
                </div>
                

              </div>
              

          </div>
          <div class="textbox">
            <label for="blood">Blood Group</label>
            <select id="blood" class="inputbox" v-model="student.blood_group">
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
            </select>
          </div>
          <div class="textbox">
            <label for="height">Height</label>
            <input type="text" class="inputbox" id="height" v-model="student.height" />
          </div>
          <div class="textbox">
            <label for="weight">Weight</label>
            <input type="text" class="inputbox" id="Weight" v-model="student.weight"/>
          </div>
          <div class="textbox">
            <label for="regDate">Register Date</label>
            <!-- <input type="date" class="inputbox" id="regDate" v-model="student.register_date"/> -->
            <datepicker v-model="student.register_date" id="regDate" name="register_date"></datepicker>
          </div>
          <div class="textbox">
            <label for="addSibling" style="visibility:hidden;">Add Sibling</label>
            <button class="inputbtn" id="addSibling">
              <i class="fa fa-plus"></i> Add Sibling
            </button>
          </div>
        </div>
      </div>

      <div class="stusub-header">
        <h6>Parents Details</h6>
      </div>
      <div class="stucard-body">
        <div class="row">
          <div class="textbox">
            <label for="faName">Father Name</label>
            <input type="text" class="inputbox" id="faName" v-model="student.father_name" />
          </div>
          <div class="textbox">
            <label for="faPhone">Father Phone</label>
            <input type="number" class="inputbox" id="faPhone" v-model="student.father_phone" />
          </div>
          <div class="textbox">
            <label for="faNrc">Father NRC.</label>
            <input type="text" class="inputbox" id="faNrc" v-model="student.father_nrc" />
          </div>
          <div class="textbox">
            <label for="faJob">Father Job</label>
            <input type="text" class="inputbox" id="faJob" v-model="student.father_job"/>
          </div>
          <div class="textbox">
            <label for="faPhoto">Father Photo</label>
            <input type="file" class="inputbox" @change="onFileChange($event,'father')"   id="faPhoto" v-if="!student.father_photo" accept="image/*">
              <div class="inputbox" v-else>
                <div style="width:100%;padding:0;">
                <img :src="student.father_photo" alt="error" style="height: 25px;width: auto;">
                <span @click="removeImage($event,'father')" class="span">X</span>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="textbox">
            <label for="moName">Mother Name</label>
            <input type="text" class="inputbox" id="moName" v-model="student.mother_name"/>
          </div>
          <div class="textbox">
            <label for="moPhone">Mother Phone</label>
            <input type="number" class="inputbox" id="moPhone" v-model="student.mother_phone"/>
          </div>
          <div class="textbox">
            <label for="moNrc">Mother NRC.</label>
            <input type="text" class="inputbox" id="moNrc" v-model="student.mother_nrc"/>
          </div>
          <div class="textbox">
            <label for="moJob">Mother Job</label>
            <input type="text" class="inputbox" id="moJob" v-model="student.mother_job"/>
          </div>
          <div class="textbox">
            <label for="moPhoto">Mother Photo</label>
            <input type="file" class="inputbox" @change="onFileChange($event,'mother')"   id="moPhoto" v-if="!student.mother_photo" accept="image/*">
              <div class="inputbox" v-else>
                <div style="width:100%;padding:0;">
                <img :src="student.mother_photo" alt="error" style="height: 25px;width: auto;">
                <span @click="removeImage($event,'mother')" class="span">X</span>
                </div>
              </div>
          </div>
          </div>
          <div class="row">
          <div class="col-md-12">
            <span class="span">
              If Guardian is
              <label>
                <strong>*</strong>
              </label>
              <input type="radio" id="father" name="guardian" value="Father" v-model="student.guardian_relation" @click="checkGuardian('father')" />
              <label for="father">Father</label>
              <input type="radio" id="mother" value="Mother" name="guardian" v-model="student.guardian_relation" @click="checkGuardian('mother')"/>
              <label for="mother">Mother</label>
              <input type="radio" id="other" value="Other"  name="guardian" @click="clickOther()" checked/>
              <label for="other">Other</label>
              <!-- <p class="text-danger" v-if="errors.guardian_relation"></p> -->
            </span>
          </div>
        </div>
        <div class="row">
          <div class="textbox">
            <label for="guName">
              Guardian Name
              <strong>*</strong>
            </label>
            <input type="text" class="inputbox" id="guName" v-model="student.guardian_name"
            @keyup="onValidate(student.guardian_name, 'guName', 'guName_msg')"
            v-on:blur="onValidate(student.guardian_name, 'guName', 'guName_msg')"
            />
            <span id="guName_msg" class="error_message">Guardian name is required</span>
          </div>
          <div class="textbox">
            <label for="guNrc">Guardian NRC.</label>
            <input type="text" class="inputbox" id="guNrc" v-model="student.guardian_nrc" />
          </div>
          <div class="textbox">
            <label for="guReligion">Guardian Relation
              <strong>*</strong>
            </label>
            <input type="text" class="inputbox" id="guReligion" v-model="student.guardian_relation"
            @keyup="onValidate(student.guardian_relation, 'guReligion', 'guReligion_msg')"
            v-on:blur="onValidate(student.guardian_relation, 'guReligion', 'guReligion_msg')"
             />
            <span id="guReligion_msg" class="error_message">Guardian relation is required</span>
          </div>
          <div class="textbox">
            <label for="guEmail">Guardian Email</label>
            <input type="email" class="inputbox" id="guEmail" v-model="student.guardian_email" />
          </div>
          
          <div class="textbox">
            <label for="guPhone">
              Guardian Phone
              <strong>*</strong>
            </label>
            <input type="number" class="inputbox" id="guPhone" v-model="student.guardian_phone"
            @keyup="onValidate(student.guardian_phone, 'guPhone', 'guPhone_msg')"
            v-on:blur="onValidate(student.guardian_phone, 'guPhone', 'guPhone_msg')" />
            <span id="guPhone_msg" class="error_message">Guardian phone is required.</span>
          </div>
          <div class="textbox">
            <label for="guJob">Guardian Job</label>
            <input type="text" class="inputbox" id="guJob" v-model="student.guardian_job" />
          </div>
          <div class="textarea">
            <label for="guAddress">Guardian Address</label>
            <textarea id="guAddress" class="inputbox" v-model="student.guardian_address"></textarea>
          </div>
          <div class="textbox">
            <label for="guPhoto">Guardian Photo</label>
            <input type="file" class="inputbox" @change="onFileChange($event,'guardian')"   id="guPhoto" v-if="!student.guardian_photo" accept="image/*">
              <div class="inputbox" v-else id="showguPhoto">
                <div style="width:100%;padding:0;">
                <img :src="student.guardian_photo" alt="error" style="height: 25px;width: auto;">
                <span @click="removeImage($event,'guardian')" class="span">X</span>
                </div>
              </div>
          </div>
        </div>
        </div>
        <div class="breakline"></div>
      <div class="stusub-header">
        <h6>
          Add More Information
          <strong
            style="float:right;padding:2px 20px;color:white !important;cursor:pointer;"
            @click="closeOpen()"
            v-if="!addMore"
          >
            <i class="fa fa-plus"></i>
          </strong>
          <strong
            style="float:right;color:white !important;padding:2px 20px;cursor:pointer;"
            @click="closeOpen()"
            v-else-if="addMore"
          >
            <i class="fa fa-minus"></i>
          </strong>
        </h6>
      </div>
      <div class="stucard-body" style="padding-top: 15px;" id="addMore">
        <div class="card" style="margin: 15px;">
          <div class="stucard-header">
            <h6>Student Address Details</h6>
          </div>
          <div class="stucard-body">
            <div class="row">

              <div class="textarea">
                <input type="checkbox" value="GuardianAddress" id="ifgurAdd"  @click="currentAddress"/>
                <label for="ifgurAdd">If Guardian Address Is Current Address</label><br>
                <label for="currentAddress">Current Address</label>
                <textarea id="currentAddress" class="inputbox"  v-model="student.current_address"></textarea>
              </div>
              <div class="textarea">
                <input type="checkbox" value="GuardianAddress" id="ifparAdd"  @click="parementAddress"/>
                <label for="ifparAdd">If Permanent Address Is Current Address</label><br>
                <label for="permanentAddress">Permanent Address</label>
                <textarea id="permanentAddress" class="inputbox" v-model="student.permanent_address"></textarea>
              </div>
            </div>
          </div>
          <div class="stusub-header">
            <h6>Transport Details</h6>
          </div>
          <div class="stucard-body">
            <div class="row">
              <div class="textarea">
                <label for="routelist">Route List</label>
                <select id="routelist" class="inputbox" v-model="student.route_id">
                  <optgroup label="Mogok">
                    <option value="EastMogok(4)">EastMogok(4fdas)</option>
                    <option value="EastMogok(2)">EastMogok(43453df)</option>
                    <option value="EastMogok(6)">EastMogok(4dfa)</option>
                    <option value="EastMogok(1)">EastMogok(4kujuj)</option>
                    <option value="EastMogok(4)">EastMogok(4kuiloiu)</option>
                  </optgroup>
                  <optgroup label="Mandalay">
                    <option value="mdy(4)">mdy1(4fdas)</option>
                    <option value="mdy(2)">mdy2(43453df)</option>
                    <option value="mdy(6)">mdy3(4dfa)</option>
                    <option value="mdy(1)">mdy4(4kujuj)</option>
                    <option value="mdy(4)">mdy5(4kuiloiu)</option>
                  </optgroup>
                </select>
              </div>
            </div>
          </div>
          <div class="stusub-header">
            <h6>Previous School Details</h6>
          </div>
          <div class="stucard-body">
            <div class="row">
              <div class="textarea">
                <label for="preSchoool">Previous School</label>
                <input type="text" class="inputbox" v-model="student.previous_school" id="preSchoool">
              </div>
              <div class="textarea">
                <label for="preNote">Note</label>
                <textarea class="inputbox" v-model="student.note" id="preNote"></textarea>
              </div>
            </div>
          </div>
          <div class="stusub-header">
            <h6>Hostel Details</h6>
          </div>
          <div class="stucard-body">
            <div class="row">
              <div class="textarea">
                <label for="hostel">Hostel</label>
                <select id="hostel" class="inputbox" v-model="hostel_id">
                  <option value="one">Hostel One</option>
                  <option value="two">Hostel Two</option>
                  <option value="three">Hostel Three</option>
                  <option value="four">Hostel Four</option>
                  <option value="five">Hostel Five</option>
                </select>
              </div>
              <div class="textarea">
                <label for="roomNum">Room Number</label>
                <select class="inputbox" id="roomNum" v-model="room_id">
                  <option value="RM-1">RM-1</option>
                  <option value="RM-2">RM-2</option>
                  <option value="RM-3">RM-3</option>
                  <option value="RM-4">RM-4</option>
                </select>
              </div>
            </div>
          </div>
          <div class="stusub-header">
            <h6>Upload Document</h6>
          </div>
          <div class="stucard-body">
            <div class="row">
              <div class="col1">
                <label>No.</label>
              </div>
              <div class="col2">
                <label>Title</label>
              </div>
              <div class="col3">
                <label>Upload Document</label>
              </div>
              <div class="col4">
                <label>Title</label>
              </div>
              <div class="col5">
                <label>Upload Document</label>
              </div>
            </div>
            <div class="row">
              <div class="col1">
                <label>1</label>
              </div>
              <div class="col2">
                <input type="text" class="inputbox" accept="image/*"/>
              </div>
              <div class="col3">
                <input type="file" class="inputbox" accept="image/*"/>
              </div>
              <div class="col4">
                <input type="text" class="inputbox" accept="image/*"/>
              </div>
              <div class="col5">
                <input type="file" class="inputbox" accept="image/*"/>
              </div>
              <div class="col1">
                <label>2</label>
              </div>
              <div class="col2">
                <input type="text" class="inputbox" />
              </div>
              <div class="col3">
                <input type="file" class="inputbox" />
              </div>
              <div class="col4">
                <input type="text" class="inputbox" />
              </div>
              <div class="col5">
                <input type="file" class="inputbox" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer" id="footer">
        <button @click="save()">Save</button>
      </div>
      </div>

      
      </div>
</template>

<script>
import Datepicker from 'vuejs-datepicker'
export default {
  name:'app',
  success:'',
  components: {
    Datepicker,
  },
  data() {
    return {
      // el:'#photo',
      photo:{},
      current:true,
      permanent:true,
      hostel_id:'',
      room_id:'',
      student: {
        image:'',
        father_photo:'',
        mother_photo:'',
        guardian_photo:'',
        dob: new Date().toISOString().slice(0,10),
        admission_date: new Date().toISOString().slice(0,10),
        register_date: new Date().toISOString().slice(0,10),
        current_address:'',
        permanent_address:'',
      },
      viladition: false,
      errors: {
        admission_no: '',
        class:'',
        section:'',
        name:'',
        gender:'',
        dob:'',
        guardian_name:'',
        guardian_relation:'Other',
        guardian_phone:'',
      },
      addMore: false,
      guardianRelation: "",

    };
  },
  created() {
  },
  methods: {
    currentAddress(){
      if(this.current == true){
        this.current = false;
        this.student.current_address = this.student.guardian_address;
        document.getElementById('currentAddress').disabled = true;

      }else{
        this.current = true;
        this.student.current_address = '';
        document.getElementById('currentAddress').disabled = false;
      }
    },

    parementAddress(){
      if(this.permanent == true){
        this.permanent = false;
        this.student.permanent_address = this.student.current_address;
        document.getElementById('permanentAddress').disabled = true;

      }else{
        this.permanent = true;
        this.student.permanent_address = '';
        document.getElementById('permanentAddress').disabled = false;
      }
    },

    onFileChange(e,type) {
      if(type=="student"){
        this.student.image_name = e.target.files[0].name;
      }else if(type=="father"){
        this.student.father_photo_name = e.target.files[0].name;
      }else if(type=="mother"){
        this.student.mother_photo_name = e.target.files[0].name;
      }else if(type=='guardian'){
        this.student.guardian_photo_name = e.target.files[0].name;
      }
        var files = e.target.files || e.dataTransfer.files;
        if (!files.length)
        return;
      this.createImage(files[0],type);
    },

    createImage(file,type) {
      var image = new Image();
      var reader = new FileReader();
      var vm = this;

      
        if(type=="student"){
          reader.onload = (e) => {
        vm.student.image = e.target.result;
          }
      }else if(type=="father"){
         reader.onload = (e) => {
        vm.student.father_photo = e.target.result;
          }
      }else if(type=="mother"){
         reader.onload = (e) => {
        vm.student.mother_photo = e.target.result;
          }
      }else if(type=='guardian'){
         reader.onload = (e) => {
        vm.student.guardian_photo = e.target.result;
          }
      }
        
      
      reader.readAsDataURL(file);
    },

    removeImage: function (e,type) {
      if(type=="student"){
       this.student.image = '';
       this.student.image_name='';
      }else if(type=="father"){
        this.student.father_photo = '';
        this.student.father_photo_name='';
      }else if(type=="mother"){
        this.student.mother_photo= '';
        this.student.mother_photo_name='';
      }else if(type=='guardian'){
        this.student.guardian_photo='';
        this.student.guardian_photo_name='';
      }
    },
   closeOpen(){
      if (this.addMore == false) {
        console.log(addMore);
        this.addMore = true;
        document.getElementById("footer").style.marginTop = "0";
        document.getElementById("smBar").style.height = "311vh";
        document.getElementById('addMore').style.display = "block";
      } else{
        console.log(addMore);
        this.addMore = false;
        document.getElementById("footer").style.marginTop = "10px";
        document.getElementById("smBar").style.height = "201vh";
        document.getElementById('addMore').style.display = "none";
      }
      
  },


    formViladition(){
      this.viladition = {};
      this.viladition = false;
      this.errors= {
      };
      if(!this.student.admission_no){
        this.onValidationMessage("admnumber", "admission_no_msg");
        this.viladition = false;
      } if(!this.student.class){
        this.onValidationMessage("stuclass", "stuclass_msg");
        this.viladition = false;
      }
       if(!this.student.section){
        this.onValidationMessage("stuSection", "section_msg");
        this.viladition = false;
      }
       if(!this.student.name){
        this.onValidationMessage("stuName", "name_msg");
        this.viladition = false;
      }
       if(!this.student.gender){
        this.onValidationMessage("stuGender", "gender_msg");
        this.viladition = false;
      }
       if(!this.student.dob){
        this.onValidationMessage("stubirthday", "dob_msg");
        this.viladition = false;
      }
       if(!this.student.guardian_name){
        this.onValidationMessage("guName", "guName_msg");
        this.viladition = false;
      }
       if(!this.student.guardian_relation){
        this.onValidationMessage("guReligion", "guReligion_msg");
        this.viladition = false;
      }
       if(!this.student.guardian_phone){
        this.onValidationMessage("guPhone", "guPhone_msg");
        this.viladition = false;
      }
      else{
        this.viladition = true;
        console.log('viladioan',this.viladition)
      }
    },

    clickOther(){
      this.student.guardian_name = '';
      this.student.guardian_relation ='';
      this.student.guardian_job = '';
      this.student.guardian_photo = '';
      this.student.guardian_nrc='';
      this.student.guardian_phone = '';
      this.student.guardian_photo_name = '';
      document.getElementById('guPhone').disabled = false;
      document.getElementById('guNrc').disabled = false;
      document.getElementById('guName').disabled = false;
      document.getElementById('guReligion').disabled = false;
      document.getElementById('guJob').disabled = false;
    },
    checkGuardian(type){
      if(type=='mother'){
        this.student.guardian_name = this.student.mother_name;
      this.student.guardian_photo = this.student.mother_photo;
      this.student.guardian_job = this.student.mother_job;
      this.student.guardian_nrc=this.student.mother_nrc;
      this.student.guardian_phone = this.student.mother_phone;
      this.student.guardian_photo_name = this.student.mother_photo_name;
      document.getElementById('guPhone').disabled = true;
      document.getElementById('guNrc').disabled = true;
      document.getElementById('guName').disabled = true;
      document.getElementById('guReligion').disabled = true;
      document.getElementById('guJob').disabled = true;
      }else if(type=='father'){
      this.student.guardian_name = this.student.father_name;
      this.student.guardian_photo = this.student.father_photo;
      this.student.guardian_job = this.student.father_job;
      this.student.guardian_nrc=this.student.father_nrc;
      this.student.guardian_phone = this.student.father_phone;
      this.student.guardian_photo_name = this.student.father_photo_name;
      document.getElementById('guPhone').disabled = true;
      document.getElementById('guNrc').disabled = true;
      document.getElementById('guName').disabled = true;
      document.getElementById('guReligion').disabled = true;
      document.getElementById('guJob').disabled = true;
      }
    },
    save(){
      // this.photo.image = this.student.image;
      // this.photo.father_photo = this.student.father_photo;
      // this.photo.mother_photo = this.student.mother_photo;
      // this.photo.guardian_photo = this.student.guardian_photo;
      // this.axios
      // .post('/api/student/upload',this.photo)
      // .then(response=>{
      //   console.log(response.data);

      // }).catch(errors=>{
      //   console.log(errors)
      // })
      this.formViladition();
      if(this.viladition == true){
        this.axios
          .post('/api/student/add',this.student)
          .then(response=> {
            // this.student ='',
            alert(response.data);
            console.log('response data',response.data)
          })
          .catch(errors=>{
            alert(errors);
          })
      }else{
        console.log('viladition required')
      }
    },
    onValidate(value, inputId, megId) {
      if (value == "" || value == undefined)
        document.getElementById(inputId).style.border = "solid 1px red";
      else document.getElementById(inputId).style.border = "solid 1px #d2d6de";
      document.getElementById(megId).style.display = "none";
    },
    onValidationMessage(inputId, megId) {
      document.getElementById(inputId).style.border = "solid 1px red";
      document.getElementById(megId).style.display = "block";
    },
   
  }
};
</script>