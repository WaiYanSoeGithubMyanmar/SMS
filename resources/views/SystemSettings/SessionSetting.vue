<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">System Settings</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>> Session Setting
      </h4>
    </div>
    <hr />
    <div class="row" style="align-items: end !important;">
      <div class="col-lg-5 col-md-12" style="padding-left:2px;">
        <div class="card">
          <div class="card-header">
            <h6>Add Session</h6>
          </div>
          <div class="card-body" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
            <form>
              <div class="col-12">
                <label for="Session">
                  Session
                  <strong>*</strong>
                </label>
                <input type="text" class="inputbox" />
              </div>
              <div class="col-12">
                <button type="button" class="save">Save</button>
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
                    <th class="all" nowrap>Session</th>
                    <th class="all" nowrap>Status</th>
                    <th class="all" nowrap style="text-align: right;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="active">
                    <td class="all" nowrap>2018-2019</td>
                    <td class="all" nowrap>Active</td>
                    <td style="text-align: right;" class="all" nowrap>
                      <i class="fa fa-pencil pen">
                        <span class="penLabel">Edit</span>
                      </i>
                      <i class="fa fa-times time">
                        <span class="timeLabel">Delete</span>
                      </i>
                    </td>
                  </tr>
                  <tr class="active">
                    <td class="all" nowrap>2019-2020</td>
                    <td colspan="2" style="text-align: right;" class="all" nowrap>
                      <i class="fa fa-pencil pen">
                        <span class="penLabel">Edit</span>
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
      room: {},
      roomtypes: [],
      isEdit: false
    };
  },
  mounted() {
    this.getRoomTypes();
  },
  created() {
    this.axios
      .get("/api/roomtypes")
      .then(response => (this.roomtypes = response.data));
  },
  methods: {
    getRoomTypes() {
      this.axios
        .get("/api/roomtypes")
        .then(response => (this.roomtypes = response.data));
    },
    addRoomType() {
      console.log(JSON.stringify(this.room));
      this.axios
        .post("/api/roomtype/store", this.room)
        .then(response => {
          this.getRoomTypes();
          setTimeout(() => {
            this.room = {};
          }, 100);
        })
        .catch(error => console.log(error));
    },
    editRoomType(data) {
      let to = this.moveToDown ? this.$refs.description.offsetTop - 60 : 0;
      window.scroll({
        top: to,
        left: 0,
        behavior: "smooth"
      });
      this.moveToDown = !this.moveToDown;
      this.room = {};
      this.moveToDown = !this.moveToDown;
      this.room.id = data.id;
      this.room.room_type = data.room_type;
      this.room.description = data.description;
      this.isEdit = true;
    },
    updateRoomType() {
      console.log(JSON.stringify(this.room));
      this.axios
        .post(`/api/roomtype/update/${this.room.id}`, this.room)
        .then(res => {
          this.isEdit = false;
          this.room = "";
          this.getRoomTypes();
          console.log(JSON.stringify(res));
        });
    },
    deleteRoomType(id) {
      this.axios.delete(`/api/roomtype/delete/${id}`).then(response => {
        this.getRoomTypes();
        let i = this.roomtypes.map(item => item.id).indexOf(id); // find index of your object
        this.roomtypes.splice(i, 1);
      });
    }
  }
};
</script>