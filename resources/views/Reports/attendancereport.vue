<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">Report</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>> Attendance Report
      </h4>
    </div>
    <hr />

    <div class="card">
      <div class="card-header">
        <h6>Select Attendance Report</h6>
      </div>
      <div class="card-body">
        <div class="row" id="row" style="margin: 0px;">
          <div class="col-lg-3 col-md-6 col-12 textbox">
            <label for="name">
              Class
              <strong>*</strong>
            </label>
            <select class="inputbox" name="class">
              <option selected disabled>Select Class</option>
              <option value="Class A">Class A</option>
              <option value="Class B">Class B</option>
              <option value="Class C">Class C</option>
            </select>
          </div>
          <div class="col-lg-3 col-md-6 col-12 textbox">
            <label for="name">
              Section
              <strong>*</strong>
            </label>
            <select class="inputbox" name="class">
              <option selected disabled>Select Section</option>
              <option value="Section A">Section A</option>
              <option value="Section B">Section B</option>
              <option value="Section C">Section C</option>
            </select>
          </div>
          <div class="col-lg-3 col-md-6 col-12 textbox">
            <label for="name">
              Month
              <strong>*</strong>
            </label>
            <select class="inputbox" name="class">
              <option selected disabled>Select Month</option>
              <option value="July">July</option>
              <option value="March">March</option>
              <option value="April">April</option>
            </select>
          </div>
          <div class="col-lg-3 col-md-6 col-12 textbox">
            <label for="name">
              Year
              <strong>*</strong>
            </label>
            <select class="inputbox" name="class">
              <option selected disabled>Select Year</option>
              <option value="July">2017-2018</option>
              <option value="March">2018-2019</option>
              <option value="April">2019-2020</option>
            </select>
          </div>
          <div class="col-12">
            <button class="searchButton">Search</button>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h6>Student Attendance Report</h6>
        <!-- <div class="tips">
          <p class="represent">
            Present :
            <b class="repTitle" style="color:rgb(136, 243, 160)">P</b>
          </p>
          <p class="represent">
            Late :
            <b class="repTitle" style="color:#fbec9c;">L</b>
          </p>
          <p class="represent">
            Absent :
            <b class="repTitle" style="color:rgb(230, 125, 123);">A</b>
          </p>
          <p class="represent">
            Holiday :
            <b class="repTitle" style="color:white;">H</b>
          </p>
          <p class="represent">
            Half Day :
            <b class="repTitle" style="color:rgb(206, 180, 135);">F</b>
          </p>
        </div>-->
      </div>
      <div class="card-body">
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
        <!-- <h2 style="text-align:center;font-size:20px;color:grey;padding:1rem 0;">No Data Lists</h2> -->
      </div>
    </div>
  </div>
</template>