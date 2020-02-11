<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">Academics</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>> Subject
      </h4>
    </div>
    <hr />

    <div class="row rowContainer" style="align-items: end !important;">
      <div class="col-lg-5 col-md-12" style="padding-left:2px;">
        <div class="card">
          <div class="card-header">
            <h6>Add Subject</h6>
          </div>
          <div class="card-body" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
            <div class="col-12">
              <label for="subjectname">
                Subject Name
                <strong>*</strong>
              </label>
              <input type="text" class="inputbox" name="subjectname" />
            </div>
            <div class="col-12">
              <label
                style="display: inline-block;margin-bottom: .5rem;margin-top: 15px;padding-right: 20px;"
              >
                <input type="radio" name="subjectType" checked value="theory" /> Theory
              </label>
              <label
                style="display: inline-block;margin-bottom: .5rem;margin-top: 15px;padding-right: 20px;"
              >
                <input type="radio" name="subjectType" value="practical" /> Practical
              </label>
            </div>
            <div class="col-12">
              <label for="subjectcode">Subject Code</label>
              <input type="text" class="inputbox" name="subjectcode" />
            </div>
            <div class="col-12">
              <button class="save">Save</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7 col-md-12" style="padding-left:0;">
        <div class="card">
          <div class="card-header">
            <h6>Subject List</h6>
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
                    <th class="all" nowrap>Subject</th>
                    <th class="all" nowrap>Subject Code</th>
                    <th class="all" nowrap>Subject Type</th>
                    <th class="all" style="text-align:right;" nowrap>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="active">
                    <td class="all" nowrap>English</td>
                    <td class="all" nowrap>210</td>
                    <td class="all" nowrap>Theory</td>
                    <td style="text-align:right;">
                      <i class="fa fa-pencil pen">
                        <span class="penLabel">Edit</span>
                      </i>
                      <i class="fa fa-trash time">
                        <span class="timeLabel">Delete</span>
                      </i>
                    </td>
                  </tr>
                  <tr class="active">
                    <td class="all" nowrap>Drawing</td>
                    <td class="all" nowrap>230</td>
                    <td class="all" nowrap>Practical</td>
                    <td style="text-align:right;">
                      <i class="fa fa-pencil pen">
                        <span class="penLabel">Edit</span>
                      </i>
                      <i class="fa fa-trash time">
                        <span class="timeLabel">Delete</span>
                      </i>
                    </td>
                  </tr>
                  <tr class="active">
                    <td class="all" nowrap>Hindi</td>
                    <td class="all" nowrap>211</td>
                    <td class="all" nowrap>Theory</td>
                    <td style="text-align:right;">
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