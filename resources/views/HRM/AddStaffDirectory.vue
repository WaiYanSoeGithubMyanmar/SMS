<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">HRM</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>
        <router-link to="/stadirectory" class="home">> Staff Directory</router-link>> Add Staff Directory
      </h4>
    </div>
    <hr />
    <div class="card">
      <form @submit="addStaffDirectory" enctype="multipart/form-data">
        <div class="card-header">
          <h6>Basic Information</h6>
        </div>
        <div class="card-body">
          <div class="row" id="row">
            <div class="textbox">
              <label for="id">
                Staff ID
                <strong>*</strong>
              </label>
              <input v-model="model.staff_id" type="text" class="inputbox" name="name" />
            </div>
            <div class="textbox">
              <label for="Role">
                Role
                <strong>*</strong>
              </label>
              <select v-model="model.role_id" class="inputbox" name="class">
                <option selected disabled>Select Role</option>
                <option :value="role.id" v-for="(role) in roles" v-bind:key="role.id">{{role.name}}</option>
              </select>
            </div>
            <div class="textbox">
              <label for="Designation">Designation</label>
              <select v-model="model.designation_id" class="inputbox" name="class">
                <option selected disabled>Select Designation</option>
                <option
                  :value="designation.id"
                  v-for="(designation) in designations"
                  v-bind:key="designation.id"
                >{{designation.designation_name}}</option>
              </select>
            </div>
            <div class="textbox">
              <label for="Department">Department</label>
              <select v-model="model.department_id" class="inputbox" name="class">
                <option selected disabled>Select Department</option>
                <option
                  :value="department.id"
                  v-for="(department) in departments"
                  v-bind:key="department.id"
                >{{department.department_name}}</option>
              </select>
            </div>
            <div class="textbox">
              <label for="name">
                Name
                <strong>*</strong>
              </label>
              <input v-model="model.name" type="text" class="inputbox" name="name" />
            </div>
            <div class="textbox">
              <label for="Father Name">Father Name</label>
              <input v-model="model.father_name" type="text" class="inputbox" name="name" />
            </div>
            <div class="textbox">
              <label for="Mother Name">Mother Name</label>
              <input v-model="model.mother_name" type="text" class="inputbox" name="name" />
            </div>
            <div class="textbox">
              <label for="Email">Email</label>
              <input v-model="model.email" type="email" class="inputbox" name="name" />
            </div>
            <div class="textbox">
              <label for="Gender">
                Gender
                <strong>*</strong>
              </label>
              <select v-model="model.gender" class="inputbox" name="class">
                <option selected disabled>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="textbox textbox">
              <label for="dob">
                Date Of Birth
                <strong>*</strong>
              </label>
              <datepicker v-model="model.dob"></datepicker>
              <!-- <input  type="text" class="inputbox" name="name" /> -->
            </div>
            <div class="textbox">
              <label for="Emergency">Date of Joining</label>
              <input v-model="model.date_of_joining" type="text" class="inputbox" name="name" />
            </div>
            <div class="textbox">
              <label for="Phone">Phone</label>
              <input v-model="model.phone" type="text" class="inputbox" name="name" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <label for="Emergency">Emergency Contact Number</label>
              <input v-model="model.emergency_contact_no" type="text" class="inputbox" name="name" />
            </div>
            <div class="textbox">
              <label for="Marital">
                Marital Status
                <strong>*</strong>
              </label>
              <select v-model="model.marital_status" class="inputbox" name="class">
                <option selected disabled>Select Marital Status</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Seperated">Seperated</option>
              </select>
            </div>
            <div class="textbox">
              <label for="Photo">
                Photo
                <strong>*</strong>
              </label>
              <input v-on:change="onImageChange" type="file" class="inputbox" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <label for="Current">Current Address</label>
              <textarea v-model="model.current_address" rows="2" class="textareas"></textarea>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <label for="Permanent">Permanent Address</label>
              <textarea v-model="model.permanent_address" rows="2" class="textareas"></textarea>
            </div>
            <div class="textbox">
              <label for="Qualification">Qualification</label>
              <textarea v-model="model.qualification" rows="2" class="textareas"></textarea>
            </div>
            <div class="textbox">
              <label for="Experience">Work Experience</label>
              <textarea v-model="model.work_exp" rows="2" class="textareas"></textarea>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <label for="Note">Note</label>
              <textarea v-model="model.note" rows="2" class="textareas"></textarea>
            </div>
          </div>
        </div>
        <div class="sub-header">
          <h6>
            Add More Details
            <strong
              style="float:right;padding:2px 20px;color:white !important;cursor:pointer;"
              @click="openClose()"
              v-if="!addMore"
            >
              <i class="fa fa-plus"></i>
            </strong>
            <strong
              style="float:right;color:white !important;padding:2px 20px;cursor:pointer;"
              @click="openClose()"
              v-else
            >
              <i class="fa fa-minus"></i>
            </strong>
          </h6>
        </div>
        <div class="card-body" style="padding-top: 15px;" v-if="addMore===true">
          <div class="sub-header">
            <h6>Payroll</h6>
          </div>
          <div class="card-body">
            <div class="row" id="row">
              <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <label for="epf">
                  EPF No
                  <strong>*</strong>
                </label>
                <input v-model="model.epf_no" type="text" class="inputbox" />
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <label for="Salary">
                  Basic Salary
                  <strong>*</strong>
                </label>
                <input v-model="model.basic_salary" type="text" class="inputbox" />
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <label for="contract">Contract Type</label>
                <select v-model="model.contract_type" class="inputbox" name="class">
                  <option selected disabled>Select Contract Type</option>
                  <option value="Permanent">Permanent</option>
                  <option value="Probation">Probation</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <label for="Shift">
                  Work Shift
                  <strong>*</strong>
                </label>
                <input v-model="model.work_shift" type="text" class="inputbox" name="name" />
              </div>
              <div class="col-lg-4 col-12">
                <label for="Location">
                  Location
                  <strong>*</strong>
                </label>
                <input v-model="model.location" type="text" class="inputbox" name="name" />
              </div>
            </div>
          </div>
          <div class="sub-header">
            <h6>Leaves</h6>
          </div>
          <div class="card-body">
            <div class="row" id="row">
              <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <label for="medical">Medical Leave</label>
                <input v-model="model.medical_leave" type="text" class="inputbox" name="name" />
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <label for="casual">Casual Leave</label>
                <input v-model="model.casual_leave" type="text" class="inputbox" name="name" />
              </div>
              <div class="col-lg-4 col-12">
                <label for="maternity">Maternity Leave</label>
                <input v-model="model.maternity_leave" type="text" class="inputbox" name="name" />
              </div>
            </div>
          </div>
          <div class="sub-header">
            <h6>Bank Account Details</h6>
          </div>
          <div class="card-body">
            <div class="row" id="row">
              <div class="textbox">
                <label for="Account">Account Title</label>
                <input v-model="model.account_title" type="text" class="inputbox" name="name" />
              </div>
              <div class="textbox">
                <label for="bankNumber">Bank Account Number</label>
                <input v-model="model.bank_account_no" type="text" class="inputbox" name="name" />
              </div>
              <div class="textbox">
                <label for="ifsc">IFSC Code</label>
                <input v-model="model.ifsc_code" type="text" class="inputbox" name="name" />
              </div>
              <div class="textbox">
                <label for="branch">Bank Branch Name</label>
                <input v-model="model.bank_branch_name" type="text" class="inputbox" name="name" />
              </div>
            </div>
          </div>
          <div class="sub-header">
            <h6>Social Media Link</h6>
          </div>
          <div class="card-body">
            <div class="row" id="row">
              <div class="textbox">
                <label for="Facebook">Facebook URL</label>
                <input v-model="model.facebook" type="text" class="inputbox" name="name" />
              </div>
              <div class="textbox">
                <label for="Twitter">Twitter URL</label>
                <input v-model="model.twitter" type="text" class="inputbox" name="name" />
              </div>
              <div class="textbox">
                <label for="Linkedin">Linkedin URL</label>
                <input v-model="model.linkedin" type="text" class="inputbox" name="name" />
              </div>
              <div class="textbox">
                <label for="Instagram">Instagram URL</label>
                <input v-model="model.instagram" type="text" class="inputbox" name="name" />
              </div>
            </div>
          </div>
          <div class="sub-header">
            <h6>Upload Documents</h6>
          </div>
          <div class="card-body" style="font-size:10pt;">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-12">
                <table class="table">
                  <tbody>
                    <tr class="col-12">
                      <th class="all" nowrap style="width: 10px">#</th>
                      <th class="all" nowrap>Title</th>
                      <th class="all" nowrap>Documents</th>
                    </tr>
                    <tr>
                      <th class="all" nowrap>1</th>
                      <th class="all" nowrap>Resume</th>
                      <th class="all" nowrap>
                        <input type="file" class="inputbox" />
                      </th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-lg-6 col-md-12 col-12">
                <table class="table">
                  <tbody>
                    <tr class="col-12">
                      <th class="all" nowrap style="width: 10px">#</th>
                      <th class="all" nowrap>Title</th>
                      <th class="all" nowrap>Documents</th>
                    </tr>
                    <tr>
                      <th class="all" nowrap>2</th>
                      <th class="all" nowrap>Joining Letter</th>
                      <th class="all" nowrap>
                        <input type="file" class="inputbox" />
                      </th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-lg-6 col-md-12 col-12">
                <table class="table">
                  <tbody>
                    <tr class="col-12">
                      <th class="all" nowrap style="width: 10px">#</th>
                      <th class="all" nowrap>Title</th>
                      <th class="all" nowrap>Documents</th>
                    </tr>
                    <tr>
                      <th class="all" nowrap>3</th>
                      <th class="all" nowrap>Other Documents</th>
                      <th class="all" nowrap>
                        <input type="file" class="inputbox" />
                      </th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="save">Save</button>
      </form>
      <br />
    </div>
  </div>
</template>
<script>
import Datepicker from "vuejs-datepicker";
export default {
  components: {
    Datepicker
  },
  data() {
    return {
      model: {},
      staffDirectorys: [],
      roles: [],
      designations: [],
      departments: [],
      addMore: false
    };
  },
  mounted() {},
  created() {
    this.getRoles();
    this.getDesignations();
    this.getDepartments();
  },
  methods: {
    getRoles() {
      this.axios.get("/api/roles").then(response => {
        this.roles = response.data;
      });
    },
    getDesignations() {
      this.axios.get("/api/designations").then(response => {
        this.designations = response.data;
      });
    },
    getDepartments() {
      this.axios.get("/api/departments").then(response => {
        this.departments = response.data;
      });
    },
    openClose() {
      if (this.addMore == false) {
        this.addMore = true;
      } else {
        this.addMore = false;
      }
      console.log(this.addMore);
    },
    getStaffDirectory() {
      this.axios.get("/api/staffdirectorys").then(response => {
        this.staffDirectorys = response.data;
      });
    },
    onImageChange(e) {
      console.log(e.target.files[0]);
      this.model.image = e.target.files[0];
    },
    addStaffDirectory(e) {
      this.model.dob =new Date().toISOString().slice(0,10),
      e.preventDefault();
      let currentObj = this;
      const config = {
        headers: { "content-type": "multipart/form-data" }
      };
      let formData = new FormData();
      formData.append("staff_id", this.model.staff_id);
      formData.append("role_id", this.model.role_id);
      formData.append("designation_id", this.model.designation_id);
      formData.append("department_id", this.model.department_id);
      formData.append("name", this.model.name);
      formData.append("father_name", this.model.father_name);
      formData.append("mother_name", this.model.mother_name);
      formData.append("email", this.model.email);
      formData.append("gender", this.model.gender);
      formData.append("dob", this.model.dob);
      formData.append("phone", this.model.phone);
      formData.append("emergency_contact_no", this.model.emergency_contact_no);
      formData.append("marital_status", this.model.marital_status);
      formData.append("image", this.model.image);
      formData.append("current_address", this.model.current_address);
      formData.append("permanent_address", this.model.permanent_address);
      formData.append("qualification", this.model.qualification);
      formData.append("work_exp", this.model.work_exp);
      formData.append("note", this.model.note);
      formData.append("password", this.model.password);
      formData.append("epf_no", this.model.epf_no);
      formData.append("basic_salary", this.model.basic_salary);
      formData.append("contract_type", this.model.contract_type);
      formData.append("work_shift", this.model.work_shift);
      formData.append("location", this.model.location);
      formData.append("medical_leave", this.model.medical_leave);
      formData.append("casual_leave", this.model.casual_leave);
      formData.append("maternity_leave", this.model.maternity_leave);

      formData.append("account_title", this.model.account_title);
      formData.append("bank_account_no", this.model.bank_account_no);
      formData.append("ifsc_code", this.model.ifsc_code);
      formData.append("bank_branch_name", this.model.bank_branch_name);
      formData.append("facebook", this.model.facebook);
      formData.append("twitter", this.model.twitter);
      formData.append("instagram", this.model.instagram);
      formData.append("linkedin", this.model.linkedin);
      formData.append("resume", this.model.resume);
      formData.append("joining_letter", this.model.joining_letter);
      formData.append("other_document", this.model.other_document);
      formData.append("location", this.model.location);
      formData.append("date_of_joining", this.model.date_of_joining);

      this.axios
        .post("/api/staffdirectory/store", formData, config)
        .then(response => {
          this.getStaffDirectory();
          this.model = {};
        })
        .catch(error => console.log(error));
    }
  }
};
</script>