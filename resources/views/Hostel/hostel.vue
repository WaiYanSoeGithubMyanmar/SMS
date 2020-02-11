<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">Hostel</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>>Hostel
      </h4>
    </div>
    <hr />
    <div class="row" style="align-items: end !important;">
      <div class="col-lg-5 col-md-12" style="padding-left:2px;">
        <div class="card">
          <div class="card-header">
            <h6>Add Hostel</h6>
          </div>
          <div class="card-body" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
            <form @submit.prevent="addHostel">
              <div class="col-12">
                <label for="hostel_name">
                  Hostel Name
                  <strong>*</strong>
                </label>
                <input type="text" class="inputbox" v-model="hostel.hostel_name" />
              </div>
              <div class="col-12">
                <label for="type">
                  Type
                  <strong>*</strong>
                </label>
                <select class="inputbox" v-model="hostel.type">
                  <option selected disabled>Select</option>
                  <option value="Boys">Boys</option>
                  <option value="Girls">Girls</option>
                  <option value="Combine">Combine</option>
                </select>
              </div>
              <div class="col-12">
                <label for="address">Address</label>
                <input type="text" class="inputbox" v-model="hostel.address" />
              </div>
              <div class="col-12">
                <label for="intake">Intake</label>
                <input type="text" class="inputbox" v-model="hostel.intake" />
              </div>
              <div class="col-12 end">
                <label for="description">Description</label>
                <textarea class="textareas" v-model="hostel.description" rows="3"></textarea>
              </div>
              <div class="col-12">
                <!--- store -->
                <button v-if="this.isEdit == false" type="submit" class="save">Save</button>
                <button v-else @click="updateHostel()" type="button" class="save">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12" style="padding-left:0;">
        <div class="card">
          <div class="card-header">
            <h6>Hostel List</h6>
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
                    <th class="all" nowrap>Hostel Name</th>
                    <th class="all" nowrap>Type</th>
                    <th class="all" nowrap>Address</th>
                    <th class="all" nowrap>Intake</th>
                    <th class="all" nowrap>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(hos) in hostels" v-bind:key="hos.id" class="active">
                    <td class="all" nowrap>
                      <p class="toolText">
                        {{hos.hostel_name}}
                        <span
                          v-if="hos.hostel_name"
                          class="tooltipLabel"
                        >{{hos.description}}</span>
                        <span v-else class="tooltipLabel text-danger">No Description</span>
                      </p>
                    </td>
                    <td class="all" nowrap>{{hos.type}}</td>
                    <td class="all" nowrap>{{hos.address}}</td>
                    <td class="all" nowrap>{{hos.intake}}</td>
                    <td class="all" nowrap>
                      <i @click="editHostel(hos)" class="fa fa-pencil pen">
                        <span class="penLabel">Edit</span>
                      </i>
                      <i @click="deleteHostel(hos.id)" class="fa fa-trash time">
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
      hostel: {},
      hostels: [],
      isEdit: false
    };
  },
  mounted() {
    this.getHostels();
  },
  created() {
    this.axios
      .get("/api/hostels")
      .then(response => (this.hostels = response.data));
    this.hostel.type = "Select";
  },
  methods: {
    getHostels() {
      this.axios
        .get("/api/hostels")
        .then(response => (this.hostels = response.data));
    },
    addHostel() {
      console.log("-->" + JSON.stringify(this.hostel));
      this.axios
        .post("/api/hostel/store", this.hostel)
        .then(response => {
          this.getHostels();
          this.hostel = {};
        })
        .catch(error => console.log(error));
    },
    editHostel(hos) {
      let to = this.moveToDown ? this.$refs.description.offsetTop - 60 : 0;
      window.scroll({
        top: to,
        left: 0,
        behavior: "smooth"
      });
      this.moveToDown = !this.moveToDown;
      this.hostel = {};
      this.moveToDown = !this.moveToDown;
      this.hostel.id = hos.id;
      this.hostel.hostel_name = hos.hostel_name;
      this.hostel.type = hos.type;
      this.hostel.address = hos.address;
      this.hostel.intake = hos.intake;
      this.hostel.description = hos.description;
      this.isEdit = true;
    },
    updateHostel() {
      this.axios
        .post(`/api/hostel/update/${this.hostel.id}`, this.hostel)
        .then(res => {
          this.getHostels();
          this.isEdit = false;
          this.hostel = "";
          console.log(JSON.stringify(res));
        });
    },
    deleteHostel(id) {
      this.axios.delete(`/api/hostel/delete/${id}`).then(response => {
        this.getHostels();
        let i = this.hostels.map(item => item.id).indexOf(id); // find index of your object
        this.hostels.splice(i, 1);
      });
    }
  }
};
</script>