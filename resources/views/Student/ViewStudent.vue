<template>
  <div class="ViewStudent" id="bar">
    <div class="toplink">
      <h4 style="color:var(--primary);margin-bottom:5px;">Students</h4>
      <h6>
        <router-link to="/Student">Home</router-link>> Student Information
      </h6>
    </div>
    <hr />
    <br />
    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card">
            <div class="card-header">
              <h6 style="width:100%">
                Add Sibling
                <i
                  class="fa fa-times"
                  style="float:right;margin-right:10px;cursor:pointer;padding:5px;"
                  data-dismiss="modal"
                ></i>
              </h6>
            </div>
            <div class="card-body">
              <div class="modalinput">
                <label for="class">
                  Title
                  <strong>*</strong>
                </label>
                <select id="class" class="inputbox">
                  <option value="one">Class One</option>
                  <option value="two">Class Two</option>
                  <option value="three">Class Three</option>
                </select>
              </div>
              <div class="modalinput">
                <label for="section" style="display:none;">Upload Document</label>
                <input type="file" id="section" class="inputbox" />
              </div>
              <div style="width:100%;">
                <button data-dismiss="modal" class="modalbtn" style="text-align:center;">Save</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-12">
        <div class="card" style="height:fit-content;">
          <div class="card-header">
            <h6>Student Profile</h6>
          </div>
          <div class="card-body">
            <div class="student">
              <div class="container">
                <img
                  src="https://images.assetsdelivery.com/compings_v2/dolgachov/dolgachov1501/dolgachov150105218.jpg"
                  alt="error"
                />
              </div>
              <h4>Ma Khin Wint War</h4>
              <ul>
                <li class="studentinfo">
                  <b class="left">Admission Number</b>
                  <a class="right">124lb</a>
                </li>
                <li class="studentinfo">
                  <b class="left">Roll Number</b>
                  <a class="right">gone-123</a>
                </li>
                <li class="studentinfo">
                  <b class="left">Class</b>
                  <a class="right">Grade One</a>
                </li>
                <li class="studentinfo">
                  <b class="left">Section</b>
                  <a class="right">Class A</a>
                </li>
                <li class="studentinfo">
                  <b class="left">RTE</b>
                  <a class="right">No</a>
                </li>
                <li class="studentinfo">
                  <b class="left">Gender</b>
                  <a class="right">Female</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="sub-header">
            <h6>Siblings Information</h6>
          </div>
          <div class="card-body">
            <div class="sibling">
              <div class="container">
                <img
                  src="https://previews.123rf.com/images/zurijeta/zurijeta1111/zurijeta111100498/11176609-diploma-graduating-little-student-kid-successful-elementary-school.jpg"
                  alt="error"
                />
                <h4>John</h4>
              </div>
              <ul>
                <li class="studentinfo">
                  <b class="left">Admission Number</b>
                  <a class="right">124lb</a>
                </li>

                <li class="studentinfo">
                  <b class="left">Class</b>
                  <a class="right">Grade Two</a>
                </li>
                <li class="studentinfo">
                  <b class="left">Section</b>
                  <a class="right">Class B</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-8 col-12">
        <div class="card remains">
          <div class="card-header">
            <button
              class="metaBtn"
              id="profile"
              onclick="toggleBtn('profile','exam','document','timeline')"
              @click="showData('profile')"
              style="margin-left:-20px;border-top-left-radius:3px;background-color: white;color: black;"
            >
              <i class="fa fa-id-badge"></i> Profile
            </button>
            <button
              class="metaBtn"
              id="exam"
              onclick="toggleBtn('exam','profile','document','timeline')"
              @click="showData('exam')"
            >
              <i class="fa fa-book"></i>Exam
            </button>
            <button
              class="metaBtn"
              id="document"
              onclick="toggleBtn('document','exam','profile','timeline')"
              @click="showData('document')"
            >
              <i class="fa fa-folder-open"></i> Document
            </button>
            <button
              class="metaBtn"
              id="timeline"
              onclick="toggleBtn('timeline','exam','profile','document')"
              @click="showData('timeline')"
            >
              <i class="fa fa-calendar"></i> Timeline
            </button>
          </div>
          <div class="card-body profile" v-if="profile===true">
            <div class="card-body" style="margin-top:10px;">
              <ul>
                <li>
                  <b>Admission Date</b>
                  <a>04/11/2018</a>
                </li>
                <li>
                  <b>Date Of Birth</b>
                  <a>09/9/2000</a>
                </li>
                <li>
                  <b>Category</b>
                  <a>General</a>
                </li>
                <li>
                  <b>Mobile Number</b>
                  <a>09779808035</a>
                </li>
                <li>
                  <b>Race</b>
                  <a>Shan</a>
                </li>
                <li>
                  <b>Religion</b>
                  <a>Buddish</a>
                </li>
                <li>
                  <b>Email</b>
                  <a>geminegrm@gmial.com</a>
                </li>
              </ul>
            </div>

            <div class="sub-header">
              <h6>Address Details</h6>
            </div>
            <div class="card-body">
              <ul>
                <li>
                  <b>Curren Address</b>
                  <a>Mandalay-Mogok-Kyatpyin-Pamma</a>
                </li>
                <li>
                  <b>Parmanent Address</b>
                  <a>09/9/2000</a>
                </li>
              </ul>
            </div>
            <div class="sub-header">
              <h6>Parents/Guardian Address</h6>
            </div>
            <div class="card-body parents">
              <div class="row">
                <ul>
                  <li>
                    <b>Father Name</b>
                    <a>U Kyaw Gyi</a>
                  </li>
                  <li>
                    <b>Father Phone</b>
                    <a>09454395489</a>
                  </li>
                  <li>
                    <b>Father Job</b>
                    <a>Actor</a>
                  </li>
                </ul>
                <div class="container">
                  <img
                    src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201211/amitabh-felicitated-by-australian-government_660_112212012416.jpg"
                    alt
                    class="img-responsive"
                  />
                </div>
              </div>
              <div class="row">
                <ul>
                  <li>
                    <b>Mother Name</b>
                    <a>Daw Dont Know</a>
                  </li>
                  <li>
                    <b>Mother Phone</b>
                    <a>09454395489</a>
                  </li>
                  <li>
                    <b>Mother Job</b>
                    <a>Singer</a>
                  </li>
                </ul>
                <div class="container">
                  <img
                    src="https://cdn.vox-cdn.com/thumbor/1l7NQb-5mgvsUdQWrYIwbrgQ8Y8=/0x0:4288x2848/1200x800/filters:focal(1684x1009:2370x1695)/cdn.vox-cdn.com/uploads/chorus_image/image/65704864/1164343509.jpg.0.jpg"
                    alt
                    class="img-responsive"
                  />
                </div>
              </div>
              <div class="row">
                <ul>
                  <li>
                    <b>Guardian Name</b>
                    <a>U Eminem</a>
                  </li>
                  <li>
                    <b>Guardian Phone</b>
                    <a>09454395489</a>
                  </li>
                  <li>
                    <b>Guardian Relation</b>
                    <a>Grand-father</a>
                  </li>
                  <li>
                    <b>Guardian Phone</b>
                    <a>09779808035</a>
                  </li>
                  <li>
                    <b>Guardian Job</b>
                    <a>Programmer</a>
                  </li>
                  <li>
                    <b>Guardian Address</b>
                    <a>Myanmar-mandalay rode no10 90 Xrestufjdaskl</a>
                  </li>
                </ul>
                <div class="container">
                  <img
                    src="https://www.rollingstone.com/wp-content/uploads/2020/01/eminem-review.jpg?resize=900,600&w=450"
                    alt
                    class="img-responsive"
                  />
                </div>
              </div>
            </div>
            <div class="sub-header">
              <h6>Miscellaneous Details</h6>
            </div>
            <div class="card-body">
              <ul>
                <li>
                  <b>Blood Group</b>
                  <a>O</a>
                </li>
                <li>
                  <b>Height</b>
                  <a>5'8</a>
                </li>
                <li>
                  <b>Weight</b>
                  <a>40 KG</a>
                </li>
                <li>
                  <b>Register Date</b>
                  <a>09-09-2020</a>
                </li>
                <li>
                  <b>Previous School</b>
                  <a>Mogok Kyatpyint Ar.Hta.Ka</a>
                </li>
                <li>
                  <b>NRC</b>
                  <a>9fnads/dfaerw333</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-body exam profile" v-if="exam===true">
            <div class="sub-header">
              <h6>Exam Name</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
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
                <table class="table table-hover table-striped" id="studenttable">
                  <thead>
                    <tr role="row">
                      <th class="all" nowrap>No</th>
                      <th class="all" nowrap>Subject</th>
                      <th class="all" nowrap>Full Marks</th>
                      <th class="all" nowrap>Passing Marks</th>
                      <th class="all" nowrap>Obtain Marks</th>
                      <th class="all" nowrap>Result</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="active">
                      <td class="all" nowrap>1</td>
                      <td class="all" nowrap>English</td>
                      <td class="all" nowrap>100%</td>
                      <td class="all" nowrap>40%</td>
                      <td class="all" nowrap>39%</td>
                      <td class="all" nowrap>
                        <a style="text-decoration:none;" class="btn-danger btn-sm">Fail</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="textbox">
                    <h6>
                      Result:
                      <a style="text-decoration:none;" class="btn-danger btn-sm">Fail</a>
                    </h6>
                  </div>
                  <div class="textbox">
                    <h6>Grand Total:36/55</h6>
                  </div>
                  <div class="textbox">
                    <h6>Percentage:0%</h6>
                  </div>
                  <div class="textbox">
                    <h6>Grade: D</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body" v-if="document===true">
            <div style="float:right;" class="topbutton">
              <button class="search" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fa fa-upload"></i>Upload Document
              </button>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-striped" id="studenttable">
                <thead>
                  <tr>
                    <th>Titile</th>
                    <th class="all" nowrap>Name</th>
                    <th class="all" style="text-align: right;" nowrap>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="active">
                    <td class="all" nowrap>
                      <p class="toolText">School Details</p>
                    </td>
                    <td class="all" nowrap>
                      <p class="toolText">img.jpg</p>
                    </td>
                    <td style="text-align: right;">
                      <i class="fa fa-download time"></i>
                      <i class="fa fa-times time"></i>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-body TimeLine" v-if="timeline===true">
            <div>
              <span>09-09-2000</span>
              <div class="timeline">
                <div class="container right">
                  <div class="content" style="height:fit-content;">
                    <h6>Won Chess Championship Award</h6>
                    <p>Edward has won 1st Place in Inter school chess championship award.</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <span>09-09-2000</span>
              <div class="timeline">
                <div class="container right">
                  <div class="content" style="height:fit-content;">
                    <h6>Won Chess Championship Award</h6>
                    <p>Edward has won 1st Place in Inter school chess championship award.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      profile: true,
      exam: false,
      document: false,
      timeline: false
    };
  },
  methods: {
    showData(name) {
      if (name == "profile") {
        this.profile = true;
        this.exam = false;
        this.document = false;
        this.timeline = false;
      } else if (name == "exam") {
        this.profile = false;
        this.exam = true;
        this.document = false;
        this.timeline = false;
      } else if (name == "document") {
        this.profile = false;
        this.exam = false;
        this.document = true;
        this.timeline = false;
      } else if (name == "timeline") {
        this.profile = false;
        this.exam = false;
        this.document = false;
        this.timeline = true;
      }
    }
  }
};
</script>