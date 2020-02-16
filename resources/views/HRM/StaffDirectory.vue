<template>
  <div class="StaffInformation" id="bar">
    <div class="toplink">
      <h4 style="color:var(--primary);margin-bottom:5px;">HRM</h4>
      <h6>
        <router-link class="home" to="/Student">Home</router-link>> Staff Directory
      </h6>
    </div>
    <hr />
    <br />
    <div class="card">
      <div class="stucard-header">
        <h6>Select Criteria</h6>
        <router-link to="/addstadirectory" class="add">Add Staff</router-link>
      </div>
      <div class="stucard-body">
        <div class="row">
          <div class="textarea">
            <label for="class">
              Role
              <strong>*</strong>
            </label>
            <select id="class" class="inputbox">
              <option value="one">Grade One</option>
              <option value="two">Grade Two</option>
              <option value="three">Grade Three</option>
            </select>
            <button class="save">Search</button>
          </div>
          <div class="textarea">
            <label for="other">Search By Other Option</label>
            <textarea id="other" class="inputbox" placeholder="Search By staff id,name,..etc."></textarea>
            <button class="save">Search</button>
          </div>
        </div>
      </div>
      <div class="sub-header">
        <button
          class="metaBtn"
          id="listView"
          onclick="changeMega('listView','detailsView')"
          @click="listView()"
          style="margin-left:-20px;border-top-left-radius:3px;color:black;background:white;"
        >
          <i class="fa fa-list"></i> List View
        </button>
        <button
          class="metaBtn"
          id="detailsView"
          onclick="changeMega('detailsView','listView')"
          @click="detailsView()"
        >
          <i class="fa fa-id-card"></i> Details View
        </button>
      </div>

      <div class="stucard-body" v-if="view === true">
        <input type="text" placeholder="Search..." class="searchText" />
        <div class="copyRows">
          <div class="row" id="copyRow">
            <div class="col-2">
              <a href="#">
                <i class="fa fa-copy"></i>
              </a>
            </div>
            <div class="col-2">
              <a href="#">
                <i class="fa fa-file-excel-o"></i>
              </a>
            </div>
            <div class="col-2">
              <a href="#">
                <i class="fa fa-file-pdf-o"></i>
              </a>
            </div>
            <div class="col-2">
              <a href="#">
                <i class="fa fa-print"></i>
              </a>
            </div>
            <div class="col-2">
              <a href="#">
                <i class="fa fa-columns"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead>
              <tr class="active" nowrap>
                <th nowrap>Staff ID</th>
                <th nowrap>Name</th>
                <th nowrap>Role</th>
                <th nowrap>Department</th>
                <th nowrap>Designation</th>
                <th nowrap>Mobile Number</th>
                <th nowrap>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="active" v-for="(staff) in staffs" :key="staff.id">
                <td nowrap>{{staff.staff_id}}</td>
                <td nowrap>{{staff.name}}</td>
                <td nowrap>{{staff.role.name}}</td>
                <td nowrap>{{staff.department.department_name}}</td>
                <td nowrap>{{staff.designation.designation_name}}</td>
                <td nowarp>{{staff.phone}}</td>
                <td>
                  <router-link to="#">
                    <i class="fa fa-list"></i>
                  </router-link>
                  <router-link to="#">
                    <i class="fa fa-pencil pen"></i>
                  </router-link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="stucard-body view" v-else>
        <div>
          <div class="row main">
            <div class="imgcard" v-for="(staff) in staffs" :key="staff.id">
              <div class="staffinfo-box">
                <div class="staffleft-box">
                  <img :src="'/staff_images/'+ staff.image" alt />
                </div>
                <div class="staffleft-content">
                  <h5>
                    <span
                      data-toggle="tooltip"
                      title="Name"
                      data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"
                    >{{staff.name}}</span>
                  </h5>
                  <p>{{staff.staff_id}}</p>
                  <p>{{staff.phone}}</p>
                  <p>Ground Floor, {{staff.department.department_name}}</p>
                  <p class="staffsub">
                    <span
                      data-toggle="tooltip"
                      title="Role"
                      data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"
                    >{{staff.role.name}}</span>
                    <span
                      data-toggle="tooltip"
                      title="Designation"
                      data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"
                    >{{staff.designation.designation_name}}</span>
                  </p>
                </div>
                <div class="overlay3">
                  <div class="stafficons">
                    <a title="Show">
                      <i class="fa fa-navicon"></i>
                    </a>
                    <a title="Edit">
                      <i class="fa fa-pencil"></i>
                    </a>
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
      view: true,
      staffs: []
    };
  },
  created() {
    this.getStaffs();
  },
  methods: {
    getStaffs() {
      this.axios.get("/api/staffs").then(response => {
        console.log(JSON.stringify(response.data));

        this.staffs = response.data;
      });
    },
    listView() {
      this.view = true;
    },
    detailsView() {
      this.view = false;
    }
  }
};
</script>