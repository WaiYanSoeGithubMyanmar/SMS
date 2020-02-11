<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">Hostel</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>> Hostel Rooms
      </h4>
    </div>
    <hr />
    <div class="row" style="align-items: end !important;">
      <div class="col-lg-5 col-md-12" style="padding-left:2px;">
        <div class="card">
          <div class="card-header">
            <h6>Add Hostel Room</h6>
          </div>
          <div class="card-body" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
            <form @submit.prevent="addHostelRooms">
              <div class="col-12">
                <label for="room_no">
                  Room Number / Name
                  <strong>*</strong>
                </label>
                <input v-model="hostelroom.room_no" type="text" class="inputbox" />
              </div>
              <div class="col-12">
                <label for="hostel">
                  Hostel
                  <strong>*</strong>
                </label>
                <select v-model="hostelroom.hostel_id" class="inputbox" name="class">
                  <option selected disabled>Select</option>
                  <option
                    :value="hostel_data.id"
                    v-for="(hostel_data) in hostel_table"
                    v-bind:key="hostel_data.id"
                  >{{hostel_data.hostel_name}}</option>
                </select>
              </div>
              <div class="col-12">
                <label for="room_type">
                  Room Type
                  <strong>*</strong>
                </label>
                <select v-model="hostelroom.room_type_id" class="inputbox" name="class">
                  <option selected disabled>Select</option>
                  <option
                    :value="roomtype_data.id"
                    v-for="(roomtype_data) in roomtypes"
                    v-bind:key="roomtype_data.id"
                  >{{roomtype_data.room_type}}</option>
                </select>
              </div>
              <div class="col-12">
                <label for="no_of_bed">
                  Number Of Bed
                  <strong>*</strong>
                </label>
                <input v-model="hostelroom.no_of_bed" type="text" class="inputbox" />
              </div>
              <div class="col-12">
                <label for="cost_per_bed">
                  Cost Per Bed
                  <strong>*</strong>
                </label>
                <input v-model="hostelroom.cost_per_bed" type="text" class="inputbox" />
              </div>
              <div class="col-12 end">
                <label for="description">Description</label>
                <textarea v-model="hostelroom.description" class="textareas" rows="3"></textarea>
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
            <h6>Hostel Room List</h6>
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
                    <th class="all" nowrap>Room Number / Name</th>
                    <th class="all" nowrap>Hostel</th>
                    <th class="all" nowrap>Room Type</th>
                    <th class="all" nowrap>Number Of Bed</th>
                    <th class="all" nowrap>Cost Per Bed</th>
                    <th class="all" nowrap>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(room) in hostelrooms" v-bind:key="room.id" class="active">
                    <td class="all" nowrap>
                      <p class="toolText">
                        {{room.room_no}}
                        <span class="tooltipLabel">No Description</span>
                      </p>
                    </td>
                    <td class="all" nowrap>{{room.hostel.hostel_name}}</td>
                    <!--  <td class="all" nowrap>{{roomtypes[room.room_type_id].description}}</td> -->
                    <td class="all" nowrap></td>
                    <td class="all" nowrap>{{room.no_of_bed}}</td>
                    <td class="all" nowrap>{{room.cost_per_bed}}</td>
                    <td class="all" nowrap>
                      <i @click="editHostelRoom(room)" class="fa fa-pencil pen">
                        <span class="penLabel">Edit</span>
                      </i>
                      <i @click="deleteHostelRoom(room.id)" class="fa fa-trash time">
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
      hostelroom: {},
      hostelrooms: [],
      hostel_table: [],
      roomtypes: [],
      isEdit: false
    };
  },
  mounted() {
    this.getHostels();
    this.getRoomTypes();
    this.getHostelRooms();
  },
  created() {
    this.getHostels();
    this.getRoomTypes();
    this.getHostelRooms();
  },
  methods: {
    /***
     * HostelRoom
     */
    getHostelRooms() {
      this.axios.get("/api/hostelrooms").then(response => {
        this.hostelrooms = response.data;
        console.log("GetHostelRooms" + JSON.stringify(response.data));
      });
    },
    addHostelRooms() {
      console.log("-->" + JSON.stringify(this.hostelroom));
      this.axios
        .post("/api/hostelroom/store", this.hostelroom)
        .then(response => {
          this.getHostelRooms();
          this.hostelroom = {};
        })
        .catch(error => console.log(error));
    },
    editHostelRoom(hos) {
      let to = this.moveToDown ? this.$refs.description.offsetTop - 60 : 0;
      window.scroll({
        top: to,
        left: 0,
        behavior: "smooth"
      });
      this.moveToDown = !this.moveToDown;
      this.hostelroom = {};
      this.moveToDown = !this.moveToDown;
      this.hostelroom.id = hos.id;
      this.hostelroom.hostel_id = hos.hostel_id;
      this.hostelroom.room_type_id = hos.room_type_id;
      this.hostelroom.room_no = hos.room_no;
      this.hostelroom.no_of_bed = hos.no_of_bed;
      this.hostelroom.cost_per_bed = hos.cost_per_bed;
      this.hostelroom.description = hos.description;
      this.isEdit = true;
    },
    updateHostelRoom() {
      this.axios
        .post(`/api/hostelroom/update/${this.hostelroom.id}`, this.hostelroom)
        .then(res => {
          this.getHostelRooms();
          this.isEdit = false;
          this.hostelroom = "";
          console.log(JSON.stringify(res));
        });
    },
    deleteHostelRoom(id) {
      this.axios.delete(`/api/hostelroom/delete/${id}`).then(response => {
        this.getHostelRooms();
        let i = this.hostelrooms.map(item => item.id).indexOf(id); // find index of your object
        this.hostelrooms.splice(i, 1);
      });
    },
    /***
     * Hostel
     */
    getHostels() {
      this.axios.get("/api/hostels").then(response => {
        this.hostel_table = response.data;
        console.log(JSON.stringify(this.hostel_table));
      });
    },
    /***
     * Room Type
     */
    getRoomTypes() {
      this.axios.get("/api/roomtypes").then(response => {
        this.roomtypes = response.data;
        console.log(JSON.stringify(this.roomtypes));
      });
    },
    searchData(){
       
    }
  }
};
</script>