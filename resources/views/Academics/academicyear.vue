<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">Academics</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>> Academic-Year
      </h4>
    </div>

    <div class="row" style="align-items: end !important;">
      <div class="col-lg-5 col-md-12" style="padding-left:2px;">
        <div class="card">
          <div class="card-header">
            <h6>Add Session</h6>
          </div>
          <div class="card-body" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
            <message :alertmessage="msg" />
            <form @submit.prevent="goSave">
              <div class="col-12">
                <label for="session">
                  Session
                  <strong>*</strong>
                </label>
                <input id="sessionid" type="text" class="inputbox" v-model="AcademicYr.session" 
                  @keyup="onValidate(AcademicYr.session, 'sessionid', 'sessionmsg')" 
                  v-on:blur="onValidate(AcademicYr.session, 'sessionid', 'sessionmsg')"/>
                <span id="sessionmsg" class="error_message">Session is required</span>
              </div>
              <div class="col-12">
                <button type="submit" class="save">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-7 col-md-12" style="padding-left:0;">
        <div class="card">
          <div class="card-header">
            <h6>Session List</h6>
          </div>
          <div class="card-body">            
            <message :alertmessage="deletemsg" />

            <input
              v-on:keyup="searchTable()"
              id="myInput"
              type="text"
              placeholder="Search..."
              class="searchText"
            />
            <div class="copyRows">
              <div class="row" id="copyRow">                
                <div class="col-3">
                  <a href="#" title="Excel">
                    <i class="fa fa-file-excel-o"></i>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#" title="Print">
                    <i class="fa fa-print"></i>
                  </a>
                </div>
                <div class="col-3">
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
                    <th class="all" nowrap>Session</th>
                    <th class="all" nowrap>Status</th>
                    <th class="all" style="text-align:right;" nowrap>Action</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                  <tr v-for="session in SessionList" :key="session.id" class="active">
                    <td v-if="session.is_active != 'delete'" class="all" nowrap>{{session.session}}</td>
                    <td
                      v-if="session.is_active != 'delete'"
                      class="all"
                      nowrap
                    >{{checkSession(session.is_active)}}</td>
                    <td v-if="session.is_active != 'delete'" style="text-align:right;">
                      <i @click="goEdit(session.id)" class="fa fa-pencil pen"></i>
                      <i @click="goDelete(session.id)" class="fa fa-trash time"></i>
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
import message from "../Alertmessage/message.vue";
export default {
  components: {
    message
  },
  data() {
    return {
      AcademicYr: {},
      SessionList: [],
      successAlertmsg: "",
      successAlertmsg1: "",
      erroralertmsg: "",
      msg: {
        text: "",
        type: ""
      },
      deletemsg: {
        text: "",
        type: ""
      }
    };
  },
  created() {
    this.getAllSession();
  },
  methods: {
    getAllSession() {
      this.axios.get("/api/academicyr").then(response => {
        this.SessionList = response.data;
      });
    },

    onValidate(value, inputId, megId)
    {
        if(value == "" || value == undefined) document.getElementById(inputId).style.border = 'solid 1px red';
        else 
        {
            document.getElementById(inputId).style.border = 'solid 1px #d2d6de';
            document.getElementById(megId).style.display = 'none';
        }
    },

    onValidateMessage(inputId, megId)
    {
        document.getElementById(inputId).style.border = 'solid 1px red';
        document.getElementById(megId).style.display = 'block';
    },

    checkValidate()
    {
        if(this.AcademicYr.session == "" || this.AcademicYr.session == undefined)
        {
            this.onValidateMessage('sessionid', 'sessionmsg');
            return false;
        }
        else
        {
            return true;
        }
        return false;
    },

    goSave() {
      if(this.checkValidate())
      {
        this.axios
          .post("/api/AcademicYear/save", this.AcademicYr)
          .then(
            response => (
              (this.AcademicYr = {
                id: "",
                session: "",
                is_active: "",
                created_at: "",
                updated_at: ""
              }),
              this.getAllSession(),
              (this.msg.text = response.data.text),
              (this.msg.type = response.data.type)
            )
          )
          .catch(error => {
            console.log("err->" + JSON.stringify(this.error.response));
          });
      }
    },

    goAlertClose(aVal) {
      if (aVal == 1) $("#OthAlert").css("display", "none");
      else $("#deleteAlert").css("display", "none");
    },

    goEdit(aId) {
      this.axios.get(`/api/AcademicYear/edit/${aId}`).then(response => {
        this.AcademicYr = response.data;
      });
    },

    goDelete(aID) {
      this.axios.get(`/api/AcademicYear/delete/${aID}`).then(response => {
        let i = this.SessionList.map(item => item.id).indexOf(aID);
        this.SessionList.splice(i, 1);
        (this.successAlertmsg1 = response.data),
          (this.deletemsg.text = response.data.text),
          (this.deletemsg.type = response.data.type);
      });
    },

    checkSession(aStatus) {
      if (aStatus == "yes") return "Active";
      else return "";
    },

    searchTable() {
      var input, filter, found, table, tr, td, i, j;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
          if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
            found = true;
          }
        }
        if (found) {
          tr[i].style.display = "";
          found = false;
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
};
</script>