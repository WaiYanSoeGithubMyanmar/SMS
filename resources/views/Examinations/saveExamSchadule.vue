<template>
     <div class="form" id="bar">
        <div class="toplink">
            <h2 class="stuName">Examinations</h2>
            <h4 class="stuLink">
                <router-link to="/home" class="home">Home </router-link> > <router-link to="/examschadule" class="home">Exam Schedule</router-link> > Add Examinations
            </h4>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">
                <h6>Select Exam</h6>
            </div>
            <div class="card-body">
                <div class="row" id="row">
                    <div class="col-lg-4 col-md-4 col-12 textbox">
                        <label >Exam name: <strong>*</strong> </label>
                        <select class="inputbox">
                            <option value="Unit Test-January">Unit Test-January</option>
                            <option value="Unit Test-February">Unit Test-February</option>
                            <option value="Unit Test-March">Unit Test-March</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 textbox">
                        <label >Class <strong>*</strong> </label>
                        <select class="inputbox">
                            <option value="Class A">Class A</option>
                            <option value="Class B">Class B</option>
                            <option value="Class C">Class C</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 textbox">
                        <label >Section <strong>*</strong> </label>
                        <select class="inputbox">
                            <option value="Section A">Section A</option>
                            <option value="Section B">Section B</option>
                            <option value="Section C">Section C</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="searchButton">Search</button>
                    </div>
                </div>
            </div>
            <div class="sub-header">
                <h6>Exam Schedule</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
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
                                    <td>English(Th:)</td>
                                    <td><date-picker v-model="time1" valueType="format"></date-picker></td>
                                    <td><input type="time"></td>
                                    <td><input type="time"></td>
                                    <td><input class="inputbox" type="text" /></td>
                                    <td><input class="inputbox" type="text" /></td>
                                    <td><input class="inputbox" type="text" /></td>
                                </tbody>
                    </table>
                </div>
            </div>
        </div>
     </div>
</template>

<script>
  import DatePicker from 'vue2-datepicker';
  import 'vue2-datepicker/index.css';
 
  export default {
    components: { DatePicker },
    data() {
      return {
        time1: null,
        time2: null,
        time3: null,
      };
    },
  };
</script>