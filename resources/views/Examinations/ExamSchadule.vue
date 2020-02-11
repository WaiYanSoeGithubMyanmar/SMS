<template>
  <div class="form" id="bar">
    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width:653px;">
          <div class="modal-body" style="padding:0;">
            <div class="card-header" style="background-color: #1b5e20;width: 100%;margin-left: 0;">
              <h6>Exam Unit Test - June</h6>
            </div>
            <div style="padding:1rem;">
              <div style="height:20px;font-size:20px;">Class 1 - A</div>
              <div style="margin-top:20px;margin-left:-13px;">
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
              </div>
              <div class="table-responsive table-striped" style="padding:0;">
                <table class="table table-hover">
                  <thead>
                    <th nowrap>Subject</th>
                    <th nowrap>Date</th>
                    <th nowrap>Start Time</th>
                    <th nowrap>End Time</th>
                    <th nowrap>Room</th>
                    <th nowrap>Full Marks</th>
                    <th nowrap>Passing Marks</th>
                  </thead>
                  <tbody>
                    <tr v-for="n in 6" :key="n.id">
                      <td nowrap>English(Th:)</td>
                      <td nowrap>4-4-2019</td>
                      <td nowrap>12:00 PM</td>
                      <td nowrap>01:00 PM</td>
                      <td nowrap>08</td>
                      <td nowrap>100</td>
                      <td nowrap>40</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="save" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="toplink">
      <h2 class="stuName">Examinations</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>> Exam Schedule
      </h4>
    </div>
    <hr />

    <div class="card">
      <div class="card-header">
        <h6>Examinations</h6>
        <router-link to="/saveexamschdule" onclick="showForm()" class="add">Add</router-link>
      </div>
      <div class="card-body">
        <div class="row" id="row">
          <div class="col-lg-6 col-md-6 col-sm-6 textbox">
            <label>
              Class
              <strong>*</strong>
            </label>
            <br />
            <select class="inputbox">
              <option value="Class A">Class A</option>
              <option value="Class B">Class B</option>
              <option value="Class C">Class C</option>
            </select>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 textbox">
            <label>
              Section
              <strong>*</strong>
            </label>
            <br />
            <select class="inputbox">
              <option value>Section A</option>
              <option value>Names</option>
              <option value>Names</option>
            </select>
          </div>
          <div class="col-12">
            <button class="searchButton">Search</button>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h6>Exam List</h6>
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
              <a onclick="showColumns()" title="Columns">
                <i class="fa fa-columns"></i>
              </a>
              <div id="columns" class="columns">
                <p onclick="showTableHeader('No')" id="No" class="tableLink">
                  <span>No</span>
                </p>
                <p onclick="showTableHeader('Exam')" id="Exam" class="tableLink">
                  <span>Exam</span>
                </p>
                <p onclick="showTableHeader('Action')" id="Action" class="tableLink">
                  <span>Action</span>
                </p>
                <p
                  class="tableLinks"
                  @click="allTableHeader('No','Exam','Action')"
                  style="border-radius: 0 0 5px 5px;"
                >
                  <span>Restore visibility</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-hover table-striped" id="studenttable">
            <thead>
              <tr>
                <th class="all" nowrap>No</th>
                <th class="all" nowrap>Exam</th>
                <th class="all" style="text-align:right;" nowrap>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="active">
                <td>1</td>
                <td class="all" nowrap>
                  <p class="toolText">
                    Unit Test-January
                    <span class="tooltipLabel">No Description</span>
                  </p>
                </td>
                <td style="text-align:right;">
                  <button
                    class="viewButton btn-sm"
                    data-toggle="modal"
                    data-target="#exampleModalCenter"
                  >View</button>
                </td>
              </tr>
              <tr class="active">
                <td>2</td>
                <td class="all" nowrap>
                  <p class="toolText">
                    Unit Test-February
                    <span class="tooltipLabel">No Description</span>
                  </p>
                </td>
                <td style="text-align:right;">
                  <button
                    class="viewButton btn-sm"
                    data-toggle="modal"
                    data-target="#exampleModalCenter"
                  >View</button>
                </td>
              </tr>
              <tr class="active">
                <td>3</td>
                <td class="all" nowrap>
                  <p class="toolText">
                    Unit Test-March
                    <span class="tooltipLabel">No Description</span>
                  </p>
                </td>
                <td style="text-align:right;">
                  <button
                    class="viewButton btn-sm"
                    data-toggle="modal"
                    data-target="#exampleModalCenter"
                  >View</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  methods: {
    allTableHeader(id, id1, id2) {
      document.getElementById(id).style.background = "#1b5e20";
      document.getElementById(id).style.color = "white";
      document.getElementById(id1).style.background = "#1b5e20";
      document.getElementById(id1).style.color = "white";
      document.getElementById(id2).style.background = "#1b5e20";
      document.getElementById(id2).style.color = "white";
    }
  }
};
</script>