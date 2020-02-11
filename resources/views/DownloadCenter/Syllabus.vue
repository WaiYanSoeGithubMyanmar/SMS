<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">Download Center</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>> Syllabus
      </h4>
    </div>
    <hr />
    <div class="card">
      <div class="card-header">
        <h6>Syllabus List</h6>
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
                <th class="all" nowrap>Content Title</th>
                <th class="all" nowrap>Type</th>
                <th class="all" nowrap>Date</th>
                <th class="all" nowrap>Available For</th>
                <th class="all" style="text-align:right;" nowrap>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="active">
                <td class="all" nowrap>
                  <p class="toolText">
                    Syllabus for Class 1
                    <span class="tooltipLabel">No Description</span>
                  </p>
                </td>
                <td class="all" nowrap>Syllabus</td>
                <td class="all" nowrap>07/02/2018</td>
                <td class="all" nowrap>Super Admin</td>
                <td style="text-align:right;">
                  <i class="fa fa-download download">
                    <span class="downloadLabel">Download</span>
                  </i>
                  <i class="fa fa-trash time">
                    <span class="timeLabel">Delete</span>
                  </i>
                </td>
              </tr>
              <tr class="active">
                <td class="all" nowrap>
                  <p class="toolText">
                    Syllabus for Class 1
                    <span class="tooltipLabel">No Description</span>
                  </p>
                </td>
                <td class="all" nowrap>Syllabus</td>
                <td class="all" nowrap>07/02/2018</td>
                <td class="all" nowrap>Super Admin</td>
                <td style="text-align:right;">
                  <i class="fa fa-download download">
                    <span class="downloadLabel">Download</span>
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
</template>