<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">Academics</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>> Assign Class Teacher
      </h4>
    </div>
    <hr style="margin-bottom: -0.5rem;" />

    <div class="row" style="align-items: end !important;">
      <div class="col-lg-5 col-md-12" style="padding-left:2px;">
        <div class="card">
          <div class="card-header">
            <h6>Add Assign Class Teacher</h6>
          </div>
          <div class="card-body row" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
            <div class="col-lg-12 col-md-6 col-12">
              <label for="name" class="title">
                Class
                <strong>*</strong>
              </label>
              <select class="inputbox" name="class">
                <option selected disabled>Select Class</option>
                <option value="Class A">Class 1</option>
                <option value="Class B">Class 2</option>
                <option value="Class C">Class 3</option>
              </select>
            </div>
            <div class="col-lg-12 col-md-6 col-12">
              <label for="name" class="title">
                Section
                <strong>*</strong>
              </label>
              <select class="inputbox" name="class">
                <option selected disabled>Select Class</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
              </select>
            </div>
            <div class="col-12">
              <label for="class">
                Class Teacher
                <strong>*</strong>
              </label>
              <div class="checkbox">
                <label class="checkboxlabel">
                  <input type="checkbox" class="checkboxinput" /> Shivam
                </label>
              </div>
              <div class="checkbox">
                <label class="checkboxlabel">
                  <input type="checkbox" class="checkboxinput" /> Jason
                </label>
              </div>
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
            <h6>Class Teacher List</h6>
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
                    <th class="all" nowrap>Class</th>
                    <th class="all" nowrap>Sections</th>
                    <th class="all" nowrap>Class Teacher</th>
                    <th class="all" style="text-align:right;" nowrap>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="active">
                    <td class="all" nowrap>Class 1</td>
                    <td class="all" nowrap>A</td>
                    <td class="all" nowrap>
                      <label style="display: block; margin: 0px;">Shivam</label>
                      <label style="display: block; margin: 0px;">Jason</label>
                    </td>
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
                    <td class="all" nowrap>Class 2</td>
                    <td class="all" nowrap>B</td>
                    <td class="all" nowrap>
                      <label style="display: block; margin: 0px;">Jason</label>
                    </td>
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