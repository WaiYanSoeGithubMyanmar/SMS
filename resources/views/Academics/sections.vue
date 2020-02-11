<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">Academics</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>> Sections
      </h4>
    </div>
    <hr />

    <div class="row" style="align-items: end !important;">
      <div class="col-lg-5 col-md-12" style="padding-left:2px;">
        <div class="card">
          <div class="card-header">
            <h6>Add Section</h6>
          </div>
          <div class="card-body" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
            <div
              style="margin-left: 10px; margin-right: 10px;display:none;"
              class="alert alert-success"
              role="alert"
            >
              {{ alertmessage }}
              <button @click="goAlertClose()" type="button" class="close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="col-12">
              <label for="section">
                Section Name
                <strong>*</strong>
              </label>
              <input type="text" class="inputbox" v-model="SectionObj.section" />
            </div>
            <div class="col-12">
              <button @click="goSave()" class="save">Save</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7 col-md-12" style="padding-left:0;">
        <div class="card">
          <div class="card-header">
            <h6>Section List</h6>
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
                    <th class="all" nowrap>Section</th>
                    <th class="all" style="text-align: right;" nowrap>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="section in SectionList" :key="section.id" class="active">
                    <td class="all" nowrap>{{section.section}}</td>
                    <td style="text-align: right;">
                      <i @click="goEdit(section.id)" class="fa fa-pencil pen"></i>
                      <i @click="goDelete(section.id)" class="fa fa-trash time"></i>
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
      SectionObj: {},
      SectionList: [],
      alertmessage: ""
    };
  },
  created() {
    this.getAllSection();
  },
  methods: {
    getAllSection() {
      this.axios.get("/api/section").then(response => {
        this.SectionList = response.data;
      });
    },

    goSave() {
      this.axios
        .post("/api/Section/save", this.SectionObj)
        .then(
          response => (
            (this.SectionObj = {
              id: "",
              section: "",
              created_at: "",
              updated_at: ""
            }),
            this.getAllSection(),
            (this.alertmessage = response.data),
            $(".alert").css("display", "block")
          )
        )
        .catch(error => {
          console.log("err->" + JSON.stringify(this.error.response));
        });
    },

    goAlertClose() {
      $(".alert").css("display", "none");
    },

    goEdit(aId) {
      this.axios.get(`/api/Section/edit/${aId}`).then(response => {
        this.SectionObj = response.data[0];
        console.log("---->" + JSON.stringify(this.SectionObj));
      });
    },

    goDelete(aID) {
      this.axios.get(`/api/Section/delete/${aID}`).then(response => {
        console.log("-->" + JSON.stringify(response.data));
        let i = this.SectionList.map(item => item.id).indexOf(aID);
        this.SectionList.splice(i, 1);
      });
    }
  }
};
</script>