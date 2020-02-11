
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
        <div class="row">
          <div class="textbox">
            <label for="admnumber">
              Admission Number
              <strong>*</strong>
            </label>
            <input type="text" id="admnumber" class="inputbox" v-model="student.admissionNumber" />
            <!-- <span class="text-danger" v-if="student.admissionNumber">Admission number required.</span> -->
          </div>
          <div class="textbox">
            <label for="rollnum">Roll Number</label>
            <input type="text" id="rollnum" class="inputbox" />
          </div>
          <div class="textbox">
            <label for="stuclass">
              Class
              <strong>*</strong>
            </label>
            <select id="stuclass" class="inputbox">
              <option value="one">Grade One</option>
              <option value="two">Grade Two</option>
              <option value="three">Grade Three</option>
            </select>
          </div>
          <div class="textbox">
            <label for="stuSection">
              Section
              <strong>*</strong>
            </label>
            <select id="stuSection" class="inputbox">
              <option value="A">A</option>
              <option value="B">B</option>
            </select>
          </div>
          <div class="textbox">
            <label for="stuName">
              Name
              <strong>*</strong>
            </label>
            <input type="text" class="inputbox" id="stuName" />
          </div>
          <div class="textbox">
            <label for="stuGender">
              Gender
              <strong>*</strong>
            </label>
            <select id="stuGender" class="inputbox">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <div class="textbox">
            <label for="stubirthday">
              Date Of Birth
              <strong>*</strong>
            </label>
            <!-- <date-picker class="inputbox" id="stubirthday"></date-picker> -->
            <input type="date" class="inputbox" id="stubirthday" />
          </div>
          <div class="textbox">
            <label for="stuReligion">Religion</label>
            <input type="text" class="inputbox" id="stuReligion" />
          </div>
          <div class="textbox">
            <label for="stuRace">Race</label>
            <input type="text" class="inputbox" id="stuRace" />
          </div>
          <div class="textbox">
            <label for="stuMobile">Mobile Number</label>
            <input type="number" class="inputbox" id="stuMobile" />
          </div>
          <div class="textbox">
            <label for="stuEmail">Email</label>
            <input type="text" class="inputbox" id="stuEmail" />
          </div>
          <div class="textbox">
            <label for="admDate">Admission Date</label>
            <input type="date" class="inputbox" id="admDate" />
          </div>
          <div class="textbox">
            <label for="stuPhoto">Student Photo</label>
            <input type="file" class="inputbox" id="stuPhoto" />
          </div>
          <div class="textbox">
            <label for="blood">Blood Group</label>
            <select id="blood" class="inputbox">
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
            <input type="text" class="inputbox" id="height" />
          </div>
          <div class="textbox">
            <label for="weight">Weight</label>
            <input type="text" class="inputbox" id="Weight" />
          </div>
          <div class="textbox">
            <label for="regDate">Register Date</label>
            <input type="date" class="inputbox" id="regDate" />
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
            <input type="text" class="inputbox" id="faName" />
          </div>
          <div class="textbox">
            <label for="faNrc">Father NRC.</label>
            <input type="text" class="inputbox" id="faNrc" />
          </div>
          <div class="textbox">
            <label for="faJob">Father Job</label>
            <input type="text" class="inputbox" id="faJob" />
          </div>
          <div class="textbox">
            <label for="faPhoto">Father Photo</label>
            <input type="file" class="inputbox" id="faPhoto" />
          </div>
          <div class="textbox">
            <label for="moName">Mother Name</label>
            <input type="text" class="inputbox" id="moName" />
          </div>
          <div class="textbox">
            <label for="moNrc">Mother NRC.</label>
            <input type="text" class="inputbox" id="moNrc" />
          </div>
          <div class="textbox">
            <label for="moJob">Mother Job</label>
            <input type="text" class="inputbox" id="moJob" />
          </div>
          <div class="textbox">
            <label for>Mother Photo</label>
            <input type="file" class="inputbox" id />
          </div>
        </div>
        <div class="row">
          <div class="textarea">
            <span>
              If Guardian is
              <label>
                <strong>*</strong>
              </label>
              <input type="radio" name="guardian" id="father" @click="checkGuardian('father')" />
              <label for="father">Father</label>
              <input type="radio" name="guardian" id="mother" @click="checkGuardian('mother')" />
              <label for="mother">Mother</label>
              <input type="radio" name="guardian" id="other" @click="checkGuardian('other')" />
              <label for="other">Other</label>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="textbox">
            <label for="guName">
              Guardian Name
              <strong>*</strong>
            </label>
            <input type="text" class="inputbox" id="guName" />
          </div>
          <div class="textbox">
            <label for="guReligion">Guardian Relation</label>
            <input type="text" class="inputbox" id="guReligion" v-model="guardianRelation" />
          </div>
          <div class="textbox">
            <label for="guEmail">Guardian Email</label>
            <input type="text" class="inputbox" id="guEmail" />
          </div>
          <div class="textbox">
            <label for="guPhoto">Guardian Photo</label>
            <input type="file" class="inputbox" id="guPhoto" />
          </div>
          <div class="textbox">
            <label for="guPhone">
              Guardian Phone
              <strong>*</strong>
            </label>
            <input type="text" class="inputbox" id="guPhone" />
          </div>
          <div class="textbox">
            <label for="guJob">Guardian Job</label>
            <input type="text" class="inputbox" id="guJob" />
          </div>
          <div class="textarea">
            <label for="guAddress">Guardian Address</label>
            <textarea id="guAddress" class="inputbox"></textarea>
          </div>
        </div>
      </div>

      <div class="breakline"></div>
      <div class="stusub-header">
        <h6>
          Add More Information
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
      <div class="stucard-body" style="padding-top: 15px;" v-if="addMore===true">
        <div class="card" style="margin: 15px;">
          <div class="stucard-header">
            <h6>Student Address Details</h6>
          </div>
          <div class="stucard-body">
            <div class="row">
              <div class="textarea">
                <input type="checkbox" value="GuardianAddress" id="ifgurAdd" />
                <label for="ifgurAdd">If Guardian Address Is Current Address</label>
              </div>
              <div class="textarea">
                <input type="checkbox" value="GuardianAddress" id="ifparAdd" />
                <label for="ifparAdd">If Parement Address Is Current Address</label>
              </div>
              <div class="textarea">
                <label for="currentAddress">Current Address</label>
                <textarea id="currentAddress" class="inputbox"></textarea>
              </div>
              <div class="textarea">
                <label for="parementAddress">Permanent Address</label>
                <textarea id="parementAddress" class="inputbox"></textarea>
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
                <select id="routelist" class="inputbox">
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
            <h6>Hostel Details</h6>
          </div>
          <div class="stucard-body">
            <div class="row">
              <div class="textarea">
                <label for="hostel">Hostel</label>
                <select id="hostel" class="inputbox">
                  <option value="one">Hostel One</option>
                  <option value="two">Hostel Two</option>
                  <option value="three">Hostel Three</option>
                  <option value="four">Hostel Four</option>
                  <option value="five">Hostel Five</option>
                </select>
              </div>
              <div class="textarea">
                <label for="roomNum">Room Number</label>
                <select class="inputbox" id="roomNum">
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
              <div class="col1">
                <label>1</label>
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
export default {
  data() {
    return {
      student: {},
      errors: [],
      addMore: false,
      guardianRelation: ""
    };
  },
  created() {
    this.guardian = "other";
  },
  methods: {
    openClose() {
      if (this.addMore == false) {
        this.addMore = true;
        document.getElementById("footer").style.marginTop = "0";
        document.getElementById("smBar").style.height = "311vh";
      } else {
        this.addMore = false;
        document.getElementById("footer").style.marginTop = "10px";
        document.getElementById("smBar").style.height = "201vh";
      }
      console.log(this.addMore);
    },
    save() {},
    checkGuardian(type) {
      if (type == "other") {
        this.guardianRelation = "";
      } else if (type == "mother") {
        this.guardianRelation = "Mother";
      } else if (type == "father") {
        this.guardianRelation = "Father";
      }
    }
  }
};
</script>