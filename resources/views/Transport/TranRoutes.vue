<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">Transport</h2>
      <h4 class="stuLink">
        <router-link class="home" to="/home">Home</router-link>> Routes
      </h4>
    </div>
    <hr />

    <div class="row" style="align-items: end !important;">
      <div class="col-lg-5 col-md-12" style="padding-left:2px;">
        <div class="card">
          <div class="card-header">
            <h6>Create Route</h6>
          </div>
          <div class="card-body" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
            <div
              id="OthAlert"
              style="margin: 0 10px 10px 10px;display:none;"
              class="alert alert-success"
              role="alert"
            >
              {{ alertmessage }}
              <button @click="goAlertClose(1)" type="button" class="close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="col-12">
              <label for="name">
                Route Title
                <strong>*</strong>
              </label>
              <input type="text" class="inputbox" v-model="tranRoute.route_title" />
            </div>
            <div class="col-12">
              <label for="name">Fare</label>
              <input type="text" class="inputbox" v-model="tranRoute.fare" />
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
            <h6>Route List</h6>
          </div>
          <div class="card-body">
            <div
              id="deleteAlert"
              style="margin: 10px 10px 10px 10px;display:none;"
              class="alert alert-success"
              role="alert"
            >
              {{alertdeletemsg}}
              <button @click="goAlertClose(2)" type="button" class="close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

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
                    <th class="all" nowrap>Route Title</th>
                    <th class="all" nowrap>Fare</th>
                    <th class="all" style="text-align:right;" nowrap>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(route) in routeList" v-bind:key="route.id" class="active">
                    <td class="all" nowrap>{{route.route_title}}</td>
                    <td class="all" nowrap>{{route.fare}}</td>
                    <td style="text-align:right;">
                      <i @click="goEdit(route.id)" class="fa fa-pencil pen">
                        <span class="penLabel">Edit</span>
                      </i>
                      <i @click="goDelete(route.id)" class="fa fa-trash time">
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
      tranRoute: {},
      routeList: [],
      alertmessage: "",
      alertdeletemsg: ""
    };
  },

  created() {
    this.getRouteList();
  },

  methods: {
    getRouteList() {
      this.axios.get("/api/tranRouteList").then(response => {
        this.routeList = response.data;
      });
    },

    goSave() {
      this.axios
        .post("/api/TranRoute/save", this.tranRoute)
        .then(
          response => (
            (this.tranRoute = { id: "", route_title: "", fare: "" }),
            this.getRouteList(),
            (this.alertmessage = response.data),
            $("#OthAlert").css("display", "block")
          )
        )
        .catch(error => {
          console.log("err->" + JSON.stringify(this.error.response));
        });
    },

    goAlertClose(aVal) {
      if (aVal == 1) $("#OthAlert").css("display", "none");
      else $("#deleteAlert").css("display", "none");
    },

    goEdit(aId) {
      this.axios.get(`/api/TranRoute/edit/${aId}`).then(response => {
        this.tranRoute = response.data;
      });
    },

    goDelete(aID) {
      this.axios.get(`/api/TranRoute/delete/${aID}`).then(response => {
        let i = this.routeList.map(item => item.id).indexOf(aID);
        this.routeList.splice(i, 1);
        (this.alertdeletemsg = response.data),
          $("#deleteAlert").css("display", "block");
      });
    }
  }
};
</script>