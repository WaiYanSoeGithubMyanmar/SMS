<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">Transport</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>> Assign Vehicle
      </h4>
    </div>
    <hr />

    <div class="row rowContainer" style="align-items: end !important;">
      <div class="col-lg-5 col-md-12" style="padding-left:2px;">
        <div class="card">
          <div class="card-header">
            <h6>Assign Vehicle On Routes</h6>
          </div>
          <div class="card-body" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
            <div class="col-12">
              <label for="class">
                Route
                <strong>*</strong>
              </label>
              <select id="stuclass" class="inputbox" name="route">
                <option value>Select</option>
                <option value="Brooklyn Central">Brooklyn Central</option>
                <option value="Brooklyn East">Brooklyn East</option>
                <option value="Brooklyn West">Brooklyn West</option>
                <option value="Brooklyn North">Brooklyn North</option>
                <option value="Brooklyn South">Brooklyn South</option>
              </select>
            </div>
            <div class="col-12">
              <label for="class">
                Vehicle
                <strong>*</strong>
              </label>
              <div class="checkbox">
                <label class="checkboxlabel">
                  <input type="checkbox" class="checkboxinput" /> VH1001
                </label>
              </div>
              <div class="checkbox">
                <label class="checkboxlabel">
                  <input type="checkbox" class="checkboxinput" /> VH5645
                </label>
              </div>
              <div class="checkbox">
                <label class="checkboxlabel">
                  <input type="checkbox" class="checkboxinput" /> VH4584
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
            <h6>Class List</h6>
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
                    <th class="all" nowrap>Route</th>
                    <th class="all" nowrap>Vehicle</th>
                    <th class="all" style="text-align:right;" nowrap>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="active">
                    <td class="all" nowrap style="vertical-align:top;">Brooklyn Central</td>
                    <td class="all" nowrap style="vertical-align:top;">
                      <label style="display: block; margin: 0px;">VH1001</label>
                      <label style="display: block; margin: 0px;">VH3456</label>
                      <label style="display: block; margin: 0px;">VH4119</label>
                    </td>
                    <td style="text-align:right; vertical-align:top;">
                      <i class="fa fa-pencil pen">
                        <span class="penLabel">Edit</span>
                      </i>
                      <i class="fa fa-trash time">
                        <span class="timeLabel">Delete</span>
                      </i>
                    </td>
                  </tr>
                  <tr class="active">
                    <td class="all" nowrap style="vertical-align:top;">Brooklyn East</td>
                    <td class="all" nowrap style="vertical-align:top;">
                      <label style="display: block; margin: 0px;">VH1001</label>
                      <label style="display: block; margin: 0px;">VH3456</label>
                    </td>
                    <td style="text-align:right; vertical-align:top;">
                      <i class="fa fa-pencil pen">
                        <span class="penLabel">Edit</span>
                      </i>
                      <i class="fa fa-trash time">
                        <span class="timeLabel">Delete</span>
                      </i>
                    </td>
                  </tr>
                  <tr class="active">
                    <td class="all" nowrap style="vertical-align:top;">Brooklyn West</td>
                    <td class="all" nowrap style="vertical-align:top;">
                      <label style="display: block; margin: 0px;">VH4119</label>
                    </td>
                    <td style="text-align:right; vertical-align:top;">
                      <i class="fa fa-pencil pen">
                        <span class="penLabel">Edit</span>
                      </i>
                      <i class="fa fa-trash time">
                        <span class="timeLabel">Delete</span>
                      </i>
                    </td>
                  </tr>
                  <tr class="active">
                    <td class="all" nowrap style="vertical-align:top;">Brooklyn North</td>
                    <td class="all" nowrap style="vertical-align:top;">
                      <label style="display: block; margin: 0px;">VH1001</label>
                      <label style="display: block; margin: 0px;">VH3456</label>
                      <label style="display: block; margin: 0px;">VH4119</label>
                    </td>
                    <td style="text-align:right; vertical-align:top;">
                      <i class="fa fa-pencil pen">
                        <span class="penLabel">Edit</span>
                      </i>
                      <i class="fa fa-trash time">
                        <span class="timeLabel">Delete</span>
                      </i>
                    </td>
                  </tr>
                  <tr class="active">
                    <td class="all" nowrap style="vertical-align:top;">Brooklyn South</td>
                    <td class="all" nowrap style="vertical-align:top;">
                      <label style="display: block; margin: 0px;">VH3456</label>
                      <label style="display: block; margin: 0px;">VH4119</label>
                    </td>
                    <td style="text-align:right; vertical-align:top;">
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