<template>
  <div class="StaffInformation" id="bar" style="transition:all 0.5s;">
    <div class="toplink">
      <h4 style="color:var(--primary);margin-bottom:5px;">HRM</h4>
      <h6>
        <router-link to="/Student">Home</router-link>> Staff Directory
      </h6>
    </div>
    <hr />
    <br />

    <div class="card">
      <div class="stucard-header">
        <h6>Select Criteria</h6>
      </div>
      <div class="stucard-body">
        <div class="row">
          <div class="textarea">
            <label for="class">
              Role
              <strong>*</strong>
            </label>
            <select id="class" class="inputbox">
              <option value="Super Admin">Super Admin</option>
              <option value="Admin">Admin</option>
              <option value="Role">Role</option>
            </select>
            <button class="search">Search</button>
          </div>
          <div class="textarea">
            <label for="other">Search By Other Option</label>
            <textarea id="other" class="inputbox" placeholder="Search By Name,Nrc,..etc."></textarea>
            <button class="search">Search</button>
          </div>
        </div>
      </div>
      <div class="sub-header">
        <button
          class="metaBtn"
          id="listView"
          onclick="changeMega('listView','detailsView')"
          @click="listView()"
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
              <tr class="active">
                <td nowrap>9000</td>
                <td nowrap>Selena Gomez</td>
                <td nowrap>Super Admin</td>
                <td nowrap>Admin</td>
                <td nowrap>Admin</td>
                <td nowarp>09789101112</td>
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
            <div class="imgcard">
              <div class="staffinfo-box">
                <div class="staffleft-box">
                  <img
                    src="https://qph.fs.quoracdn.net/main-qimg-d171a30624492d6041d5b23548136440"
                    alt
                  />
                </div>
                <div class="staffleft-content">
                  <h5>
                    <span
                      data-toggle="tooltip"
                      title="Name"
                      data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"
                    >Selena Gomez</span>
                  </h5>
                  <p>9000</p>
                  <p>09123456789</p>
                  <p>Ground Floor, Admin</p>
                  <p class="staffsub">
                    <span
                      data-toggle="tooltip"
                      title="Role"
                      data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"
                    >Super Admin</span>
                    <span
                      data-toggle="tooltip"
                      title="Designation"
                      data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"
                    >Admin</span>
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

            <div class="imgcard">
              <div class="staffinfo-box">
                <div class="staffleft-box">
                  <img
                    src="https://qph.fs.quoracdn.net/main-qimg-d171a30624492d6041d5b23548136440"
                    alt
                  />
                </div>
                <div class="staffleft-content">
                  <h5>
                    <span
                      data-toggle="tooltip"
                      title="Name"
                      data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"
                    >Selena Gomez</span>
                  </h5>
                  <p>9000</p>
                  <p>09123456789</p>
                  <p>Ground Floor, Admin</p>
                  <p class="staffsub">
                    <span
                      data-toggle="tooltip"
                      title="Role"
                      data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"
                    >Super Admin</span>
                    <span
                      data-toggle="tooltip"
                      title="Designation"
                      data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"
                    >Admin</span>
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

            <div class="imgcard">
              <div class="staffinfo-box">
                <div class="staffleft-box">
                  <img
                    src="https://qph.fs.quoracdn.net/main-qimg-d171a30624492d6041d5b23548136440"
                    alt
                  />
                </div>
                <div class="staffleft-content">
                  <h5>
                    <span
                      data-toggle="tooltip"
                      title="Name"
                      data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"
                    >Selena Gomez</span>
                  </h5>
                  <p>9000</p>
                  <p>09123456789</p>
                  <p>Ground Floor, Admin</p>
                  <p class="staffsub">
                    <span
                      data-toggle="tooltip"
                      title="Role"
                      data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"
                    >Super Admin</span>
                    <span
                      data-toggle="tooltip"
                      title="Designation"
                      data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"
                    >Admin</span>
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
      staff: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
    };
  },
  methods: {
    listView() {
      this.view = true;
    },
    detailsView() {
      this.view = false;
    }
  }
};
</script>

    