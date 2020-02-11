<template>
  <div class="form" id="bar">
    <div class="toplink">
      <h2 class="stuName">Examinations</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>> Marks Grade
      </h4>
    </div>
    <hr />

    <div class="row rowContainer" style="align-items: end !important;">
      <div class="col-lg-5 col-md-12" style="padding-left:2px;">
        <div class="card">
          <div class="card-header">
            <h6>Add Grade</h6>
          </div>
          <div class="card-body" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
            <div class="col-12">
              <label for="gradename">
                Grade Name
                <strong>*</strong>
              </label>
              <input type="text" class="inputbox" name="gradename" />
            </div>
            <div class="col-12">
              <label for="percent">
                Percent Form
                <strong>*</strong>
              </label>
              <input type="text" class="inputbox" name="percent" />
            </div>
            <div class="col-12">
              <label for="upto">
                Percent Upto
                <strong>*</strong>
              </label>
              <input type="text" class="inputbox" name="upto" />
            </div>
            <div class="col-12 end">
              <label for="description">Description</label>
              <textarea class="textareas" rows="3"></textarea>
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
            <h6>Grade List</h6>
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
                    <p onclick="showTableHeader('Grade Name')" id="Grade Name" class="tableLink">
                      <span>Grade Name</span>
                    </p>
                    <p onclick="showTableHeader('Percent Form')" id="Percent Form" class="tableLink">
                      <span>Percent Form</span>
                    </p>
                    <p onclick="showTableHeader('Percent Upto')" id="Percent Upto" class="tableLink">
                      <span>Percent Upto</span>
                    </p>
                    <p onclick="showTableHeader('Action')" id="Action" class="tableLink">
                      <span>Action</span>
                    </p>
                    <p
                      class="tableLinks"
                      @click="allTableHeader('Grade Name','Percent Form','Percent Upto','Action')"
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
                    <th class="all" nowrap>Grade Name</th>
                    <th class="all" nowrap>Percent Form</th>
                    <th class="all" nowrap>Percent Upto</th>
                    <th class="all" nowrap>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="active">
                    <td class="all" nowrap>
                      <p class="toolText">
                        A++
                        <span class="tooltipLabel">A++ Grade</span>
                      </p>
                    </td>
                    <td class="all" nowrap>90.00</td>
                    <td class="all" nowrap>100.00</td>
                    <td>
                      <i class="fa fa-pencil pen">
                        <span class="penLabel">Edit</span>
                      </i>
                      <i class="fa fa-trash time">
                        <span class="timeLabel">Delete</span>
                      </i>
                    </td>
                  </tr>
                  <tr class="active">
                    <td class="all" nowrap>
                      <p class="toolText">
                        A+
                        <span class="tooltipLabel">A+ Grade</span>
                      </p>
                    </td>
                    <td class="all" nowrap>75.00</td>
                    <td class="all" nowrap>90.00</td>
                    <td>
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
  methods: {
    allTableHeader(id, id1, id2, id3) {
      document.getElementById(id).style.background = "#1b5e20";
      document.getElementById(id).style.color = "white";
      document.getElementById(id1).style.background = "#1b5e20";
      document.getElementById(id1).style.color = "white";
      document.getElementById(id2).style.background = "#1b5e20";
      document.getElementById(id2).style.color = "white";
      document.getElementById(id3).style.background = "#1b5e20";
      document.getElementById(id3).style.color = "white";
    }
  }
}
</script>