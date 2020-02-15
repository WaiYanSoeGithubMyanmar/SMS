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
      <div class="card-header">
        <h6>Basic Information</h6>
      </div>
      <div class="card-body">
        <div class="row" id="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="id">
              Staff ID
              <strong>*</strong>
            </label>
            <input type="text" class="inputbox" name="name" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="Role">
              Role
              <strong>*</strong>
            </label>
            <select class="inputbox" name="class">
              <option selected disabled>Select Role</option>
              <option value="Admin">Admin</option>
              <option value="Teacher">Teacher</option>
              <option value="Accountant">Accountant</option>
            </select>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="Designation">Designation</label>
            <select class="inputbox" name="class">
              <option selected disabled>Select Designation</option>
              <option value="Admin">Admin</option>
              <option value="Librarian">Librarian</option>
              <option value="Accountant">Accountant</option>
            </select>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="Department">Department</label>
            <select class="inputbox" name="class">
              <option selected disabled>Select Department</option>
              <option value="Admin">Admin</option>
              <option value="Arts">Arts</option>
              <option value="Sports">Sports</option>
            </select>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="name">
              Name
              <strong>*</strong>
            </label>
            <input type="text" class="inputbox" name="name" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="Father Name">Father Name</label>
            <input type="text" class="inputbox" name="name" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="Mother Name">Mother Name</label>
            <input type="text" class="inputbox" name="name" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="Email">Email</label>
            <input type="text" class="inputbox" name="name" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="Gender">
              Gender
              <strong>*</strong>
            </label>
            <select class="inputbox" name="class">
              <option selected disabled>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="dob">
              Date Of Birth
              <strong>*</strong>
            </label>
            <input type="text" class="inputbox" name="name" />
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <label for="Phone">Phone</label>
            <input type="text" class="inputbox" name="name" />
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <label for="Emergency">Emergency Contact Number</label>
            <input type="text" class="inputbox" name="name" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="Marital">
              Marital Status
              <strong>*</strong>
            </label>
            <select class="inputbox" name="class">
              <option selected disabled>Select Marital Status</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Seperated">Seperated</option>
            </select>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="Photo">
              Photo
              <strong>*</strong>
            </label>
            <input type="file" class="inputbox" />
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <label for="Current">Current Address</label>
            <textarea rows="2" class="textareas"></textarea>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <label for="Permanent">Permanent Address</label>
            <textarea rows="2" class="textareas"></textarea>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="Qualification">Qualification</label>
            <textarea rows="2" class="textareas"></textarea>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label for="Experience">Work Experience</label>
            <textarea rows="2" class="textareas"></textarea>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <label for="Note">Note</label>
            <textarea rows="2" class="textareas"></textarea>
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
              <input type="text" class="inputbox" name="name" />
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <label for="Salary">
                Basic Salary
                <strong>*</strong>
              </label>
              <input type="text" class="inputbox" name="name" />
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <label for="contract">Contract Type</label>
              <select class="inputbox" name="class">
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
              <input type="text" class="inputbox" name="name" />
            </div>
            <div class="col-lg-4 col-12">
              <label for="Location">
                Location
                <strong>*</strong>
              </label>
              <input type="text" class="inputbox" name="name" />
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
              <input type="text" class="inputbox" name="name" />
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <label for="casual">Casual Leave</label>
              <input type="text" class="inputbox" name="name" />
            </div>
            <div class="col-lg-4 col-12">
              <label for="maternity">Maternity Leave</label>
              <input type="text" class="inputbox" name="name" />
            </div>
          </div>
        </div>
        <div class="sub-header">
          <h6>Bank Account Details</h6>
        </div>
        <div class="card-body">
          <div class="row" id="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <label for="Account">Account Title</label>
              <input type="text" class="inputbox" name="name" />
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <label for="bankNumber">Bank Account Number</label>
              <input type="text" class="inputbox" name="name" />
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <label for="ifsc">IFSC Code</label>
              <input type="text" class="inputbox" name="name" />
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <label for="branch">Bank Branch Name</label>
              <input type="text" class="inputbox" name="name" />
            </div>
          </div>
        </div>
        <div class="sub-header">
          <h6>Social Media Link</h6>
        </div>
        <div class="card-body">
          <div class="row" id="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <label for="Facebook">Facebook URL</label>
              <input type="text" class="inputbox" name="name" />
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <label for="Twitter">Twitter URL</label>
              <input type="text" class="inputbox" name="name" />
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <label for="Linkedin">Linkedin URL</label>
              <input type="text" class="inputbox" name="name" />
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <label for="Instagram">Instagram URL</label>
              <input type="text" class="inputbox" name="name" />
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
      <br />
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      addMore: false
    };
  },
  methods: {
    openClose() {
      if (this.addMore == false) {
        this.addMore = true;
      } else {
        this.addMore = false;
      }
      console.log(this.addMore);
    }
  }
};
</script>