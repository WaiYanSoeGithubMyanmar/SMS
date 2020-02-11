<template>
  <div class="form systemsetting" id="bar">
    <div class="toplink">
      <h2 class="stuName">System Settings</h2>
      <h4 class="stuLink">
        <router-link to="/home" class="home">Home</router-link>> General Setting
      </h4>
    </div>
    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered settingModal"
        style="max-width: 100%;"
        role="document"
      >
        <div
          class="modal-content"
          style="background:none;border:none;width:100% !important;padding: 1rem;"
        >
          <div class="card">
            <div class="card-header">
              <h6>System Settings</h6>
              <i class="fa fa-close" style="position:absolute;right: 25px;cursor:pointer;" data-dismiss="modal"></i>
            </div>
            <div class="card-body">
              <div class="row" id="row" style="margin: 0px;">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="setting">
                    <label for="Name">
                      School Name
                      <strong>*</strong>
                    </label>
                    <input type="text" class="inputbox" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="setting">
                    <label for="Code">School Code</label>
                    <input type="text" class="inputbox" />
                  </div>
                </div>
                <div class="col-12">
                  <div class="setting">
                    <label for="Address">
                      Address
                      <strong>*</strong>
                    </label>
                    <textarea rows="2" class="textareas"></textarea>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="setting">
                    <label for="Phone">
                      Phone
                      <strong>*</strong>
                    </label>
                    <input type="text" class="inputbox" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="setting">
                    <label for="Email">
                      Email
                      <strong>*</strong>
                    </label>
                    <input type="text" class="inputbox" />
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                  <div class="setting">
                    <label for="Session">
                      Session
                      <strong>*</strong>
                    </label>
                    <select class="inputbox" name="class">
                      <option selected disabled>Select Session</option>
                      <option value="2011-2012">2011-2012</option>
                      <option value="2012-2013">2012-2013</option>
                      <option value="2013-2014">2013-2014</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                  <div class="setting">
                    <label for="Month">
                      Session Start Month
                      <strong>*</strong>
                    </label>
                    <select class="inputbox" name="class">
                      <option selected disabled>Select Month</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                  <div class="setting">
                    <label for="Mode">Teacher Restricted Mode</label>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-6" style="width:100%;">
                        <label>
                          <input type="radio" name="subjectType" checked value="Theory" /> Theory
                        </label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-6" style="width:100%;">
                        <label>
                          <input type="radio" name="subjectType" value="Practical" /> Practical
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="setting">
                    <label for="Language">
                      Language
                      <strong>*</strong>
                    </label>
                    <select class="inputbox" name="class">
                      <option selected disabled>Select Languages</option>
                      <option value="Myanmar">Myanmar</option>
                      <option value="English">English</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="setting">
                    <label for="Mode">Language RTL Text Mode</label>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-6" style="width:100%;">
                        <label>
                          <input type="radio" name="types" checked value="Disabled" /> Disabled
                        </label>
                      </div>
                      <div class="col-lg-6 col-md-6 col-6" style="width:100%;">
                        <label>
                          <input type="radio" name="types" value="Enabled" /> Enabled
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="setting">
                    <label for="Timezone">
                      Timezone
                      <strong>*</strong>
                    </label>
                    <select class="inputbox" name="class">
                      <option selected disabled>Select Timezone</option>
                      <option value="(GMT) Myanmar">(GMT) Myanmar</option>
                      <option value="(GMT) UTC">(GMT) UTC</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="setting">
                    <label for="format">
                      Date Format
                      <strong>*</strong>
                    </label>
                    <select class="inputbox" name="class">
                      <option selected disabled>Select Date Format</option>
                      <option value="mm/dd/yyyy">mm/dd/yyyy</option>
                      <option value="mm-dd-yyyy">mm-dd-yyyy</option>
                      <option value="mm.dd.yyyy">mm.dd.yyyy</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="setting">
                    <label for="Currency">
                      Currency
                      <strong>*</strong>
                    </label>
                    <select class="inputbox" name="class">
                      <option selected disabled>Select Currency</option>
                      <option value="USD">USD</option>
                      <option value="AOA">AOA</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="setting">
                    <label for="Symbol">
                      Currency Symbol
                      <strong>*</strong>
                    </label>
                    <input type="text" value="$" class="inputbox" />
                  </div>
                </div>
                <div class="col-12">
                  <div class="setting">
                    <label for="Fees">
                      Fees Due Days
                      <strong>*</strong>
                    </label>
                    <input type="text" class="inputbox" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr />

    <div class="row rowContainer" style="align-items: end !important;">
      <div class="col-lg-4 col-12" style="padding-left:2px;">
        <div class="card">
          <div class="card-header">
            <h6>Edit Logo</h6>
          </div>
          <div class="card-body imgCard">
            <div class="col-12 img">
              <img
                style="border-radius:5px;"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRIRcKkWW7dmavwCV9BCrL1KpRsxqCObkckavwdsKbtzoZkZAPr"
              />
            </div>
            <div class="col-12 button">
              <button class="edit">
                <i class="fa fa-floppy-o editIcon" aria-hidden="true"></i>Edit Logo
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-8 col-12" style="padding-left:0;">
        <div class="card">
          <div class="card-header editCard">
            <h6>General Setting</h6>
            <button class="edit" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
          </div>
          <div class="card-body tableCard">
            <div style="border-bottom: 1px solid green;" class="table-responsive mailbox-messages">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td class="all" nowrap>
                      <b>School Name</b>
                    </td>
                    <td class="all" nowrap>Private School</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>Address</b>
                    </td>
                    <td class="all" nowrap>Myanmar, Mogok</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>Phone</b>
                    </td>
                    <td class="all" nowrap>09-28495828421</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>Email</b>
                    </td>
                    <td class="all" nowrap>tastysoft1234@gmail.com</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>School Code</b>
                    </td>
                    <td class="all" nowrap>MM-294905</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>Session</b>
                    </td>
                    <td class="all" nowrap>2019-20</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>Session Start Month</b>
                    </td>
                    <td class="all" nowrap>June</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>Teacher Restricted Mode</b>
                    </td>
                    <td class="all" nowrap>Disabled</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>Language</b>
                    </td>
                    <td class="all" nowrap>English</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>Language RTL Text Mode</b>
                    </td>
                    <td class="all" nowrap>Disabled</td>
                  </tr>

                  <tr>
                    <td class="all" nowrap>
                      <b>Timezone</b>
                    </td>
                    <td class="all" nowrap>Myanmar</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>Date Format</b>
                    </td>
                    <td class="all" nowrap>mm/dd/yyyy</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>Currency</b>
                    </td>
                    <td class="all" nowrap>USD</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>Currency Symbol</b>
                    </td>
                    <td class="all" nowrap>$</td>
                  </tr>
                  <tr>
                    <td class="all" nowrap>
                      <b>Fees Due Days</b>
                    </td>
                    <td class="all" nowrap>60</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="theme">
              <b>Current Theme</b>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>