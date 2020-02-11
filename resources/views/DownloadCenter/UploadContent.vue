<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">Upload Content</h2>
      <h4 class="stuLink">
        <router-link to="home" class="home">Home</router-link>> Upload Content
      </h4>
    </div>
    <hr />

    <div class="row" style="align-items: end !important;padding-left:10px;">
      <div class="col-lg-4 col-md-12" style="padding-left:0px;">
        <div class="card">
          <div class="card-header">
            <h6>Upload Content</h6>
          </div>
          <div class="card-body" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
            <div class="col-12">
              <label for="contentTitle">
                Content Title
                <strong>*</strong>
              </label>
              <input type="text" class="inputbox" name="contentTitle" />
            </div>
            <div class="col-12">
              <label for="typeSection">
                Content Type
                <strong>*</strong>
              </label>
              <select id="typeSection" class="inputbox">
                <option value="Assignments">Assignments</option>
                <option value="Syllabus">Syllabus</option>
              </select>
            </div>
            <div class="col-12">
              <label for="contentTitle">
                Available For
                <strong>*</strong>
              </label>
              <div class="checkbox">
                <label class="checkboxlabel">
                  <input type="checkbox" class="checkboxinput" />
                  All Super Admin
                </label>
              </div>
              <div class="checkbox">
                <label class="checkboxlabel">
                  <input
                    type="checkbox"
                    class="checkboxinput"
                    v-model="checkStudent"
                    @change="CheckboxStudent(checkStudent)"
                  />
                  Student
                </label>
              </div>
            </div>
            <div id="classCol" style="background-color: #eae6e6;margin: 5px 0px;padding: 10px 0px">
              <div class="col-12">
                <div class="checkbox">
                  <label class="checkboxlabel">
                    <input
                      type="checkbox"
                      class="checkboxinput"
                      v-model="checkAvailable"
                      @change="CheckboxAvailable(checkAvailable)"
                    />
                    Available For All Classes
                  </label>
                </div>
              </div>
              <div class="col-12">
                <label for="classSection">Class</label>
                <select :disabled="classDisabled" id="classSection" class="inputbox">
                  <option value="1">Class 1</option>
                  <option value="2">Class 2</option>
                </select>
              </div>
              <div class="col-12">
                <label for="sectionSection">Section</label>
                <select :disabled="sectionDisabled" id="sectionSection" class="inputbox">
                  <option value="1">Section 1</option>
                  <option value="2">Section 2</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <label for="uploadDate">Upload Date</label>
              <input type="date" class="inputbox" id="uploadDate" />
            </div>
            <div class="col-12">
              <label for="Description">Description</label>
              <br />
              <textarea class="textareas" id="Description" rows="3"></textarea>
            </div>
            <div class="col-12">
              <label for="faPhoto">
                Content File
                <strong>*</strong>
              </label>
              <input type="file" class="inputbox" id="faPhoto" />
            </div>
            <div class="col-12">
              <button class="save">Save</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-8 col-md-12" style="padding-left:0;">
        <div class="card">
          <div class="card-header">
            <h6>Content List</h6>
          </div>
          <div class="card-body">
            <input type="text" placeholder="Search..." class="searchText" />
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
                    <th class="all" nowrap>Content Title</th>
                    <th class="all" nowrap>Type</th>
                    <th class="all" nowrap>Date</th>
                    <th class="all" nowrap>Available For</th>
                    <th class="all" nowrap>Class</th>
                    <th class="all" nowrap style="text-align:right;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="active">
                    <td class="all" nowrap>
                      <p class="toolText">
                        Syllabus for Class 1
                        <span class="tooltipLabel">No Description</span>
                      </p>
                    </td>
                    <td class="all" nowrap>Syllabus</td>
                    <td class="all" nowrap>07/02/2018</td>
                    <td class="all" nowrap>Super Admin</td>
                    <td class="all" nowrap>ALL Classes</td>
                    <td class="all" nowrap style="text-align:right;">
                      <i class="fa fa-download download">
                        <span class="downloadLabel">Download</span>
                      </i>
                      <i class="fa fa-trash time">
                        <span class="timeLabel">Delete</span>
                      </i>
                    </td>
                  </tr>
                  <tr class="active">
                    <td class="all" nowrap>
                      <p class="toolText">
                        Syllabus for Class 2
                        <span class="tooltipLabel">No Description</span>
                      </p>
                    </td>
                    <td class="all" nowrap>Syllabus</td>
                    <td class="all" nowrap>07/02/2018</td>
                    <td class="all" nowrap>Super Admin</td>
                    <td class="all" nowrap>ALL Classes</td>
                    <td class="all" nowrap style="text-align:right;">
                      <i class="fa fa-download download">
                        <span class="downloadLabel">Download</span>
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
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      classDisabled: true,
      sectionDisabled: true,
      checkStudent: false,
      checkAvailable: false
    };
  },
  methods: {
    CheckboxStudent(checkStudent) {
      if (checkStudent) {
        $("#classCol").css("background-color", "transparent");
        if (!this.checkAvailable) {
          this.classDisabled = false;
        }
        this.sectionDisabled = false;
      } else {
        $("#classCol").css("background-color", "#eae6e6");
        this.sectionDisabled = true;
        this.classDisabled = true;
      }
    },
    CheckboxAvailable(checkAvailable) {
      if (checkAvailable) {
        this.classDisabled = true;
      } else {
        if (this.checkStudent) {
          this.classDisabled = false;
        }
      }
    }
  }
};
</script>
