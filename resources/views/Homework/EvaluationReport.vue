<template>
    <div>
        <div class="form" id="bar">
            <div class="toplink">
                <h2 class="stuName">
                    Homework
                </h2>
                <h4 class="stuLink">
                    <a href="" style="text-decoration:none;color:#1b5e20;">Home </a> > Evaluation Report
                </h4>
            </div>
            <hr style="margin-bottom: -0.5rem;">

            <div class="card">
                <div class="card-header">
                    <h6>Select Criteria</h6>
                </div>
                <div class="card-body">
                    <div class="row" id="row" style="margin: 0px;">
                        <div class="col-lg-4 col-12 textbox">
                            <label for="name" class="title">Class
                                <strong>*</strong>
                            </label>
                            <select class="inputbox" name="class">
                                <option selected disabled>Select Class</option>
                                <option value="Class A">Class A</option>
                                <option value="Class B">Class B</option>
                                <option value="Class C">Class C</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-12 textbox">
                            <label for="name" class="title">Section
                                <strong>*</strong>
                            </label>
                            <select class="inputbox" name="class">
                                <option selected disabled>Select Section</option>
                                <option value="Section A">Section A</option>
                                <option value="Section B">Section B</option>
                                <option value="Section C">Section C</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-12 textbox">
                            <label for="name" class="title">Subject
                            </label>
                            <select class="inputbox" name="class">
                                <option selected disabled>Select Subject</option>
                                <option value="Subject 1">Subject 1</option>
                                <option value="Subject 2">Subject 2</option>
                                <option value="Subject 3">Subject 3</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button class="searchButton">Search</button>
                        </div>
                    </div>
                </div>

                <div class="sub-header">
                    <h6>Evaluation Report</h6>
                </div>
                <div class="card-body">
                    <input type="text" placeholder="Search..." class="searchText">
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
                                    <th class="all" nowrap>Homework Date</th>
                                    <th class="all" nowrap>Submission Date</th>
                                    <th class="all" nowrap>Complete/Incomplete</th>
                                    <th class="all" nowrap>Complete%</th>
                                    <th class="all" style="text-align:right;" nowrap>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="active">
                                    <td class="all" nowrap>
                                        Class 1
                                    </td>
                                    <td class="all" nowrap>
                                        07/02/2018
                                    </td>
                                    <td class="all" nowrap>
                                        07/02/2018
                                    </td>
                                    <td class="all" nowrap>
                                        
                                    </td>
                                    <td class="all" nowrap>
                                        
                                    </td>
                                    <td style="text-align:right;">
                                        <i class="fa fa-list pen"  data-toggle="modal" data-target="#EvaluateHomework">
                                            <span class="penLabel">Detail</span>
                                        </i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Start Evaluate Homework  -->
        <div class="modal" id="EvaluateHomework">
            <div class="modal-dialog modal-lg">
                <div class="modal-content modal-media-content">
                     <div class="sub-header" style="padding: 0px 15px;margin: 0px;">
                        <h6>Homework Evaluation</h6>
                        <i class="fa fa-times time modal_close_btn" data-dismiss="modal"></i>
                    </div>
                    <div class="modal-body" style="padding: 0px">
                        <div class="row" id="row" style="margin: 0px;">
                            <div class="col-lg-8 col-12" style="padding: 0px">
                                <input type="text" placeholder="Search..." class="searchText">
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
                                                <th class="all" nowrap>Admission Number</th>
                                                <th class="all" nowrap>Name</th>
                                                <th class="all" nowrap>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="active">
                                                <td class="all" nowrap>
                                                    18001
                                                </td>
                                                <td class="all" nowrap>
                                                    Edward Thomas
                                                </td>
                                                <td class="all" nowrap>
                                                    <a href="#" style="text-decoration:none;" class="btn-success btn-sm">Complete</a>
                                                </td>
                                            </tr>
                                            <tr class="active">
                                                <td class="all" nowrap>
                                                    18001
                                                </td>
                                                <td class="all" nowrap>
                                                    Edward Thomas
                                                </td>
                                                <td class="all" nowrap>
                                                    <a href="#" style="text-decoration:none;" class="btn-danger btn-sm">Incomplete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 
                            </div>
                            <div class="col-lg-4 col-12" style="background-color: #eae6e6;padding: 1rem;">
                                <h4 style="margin: 0px;margin-bottom: 10px">Summary</h4>
                                <hr style="padding: 0px;margin: 0px">            
                                <div style="padding: 5px 0px;">
                                    <div style="padding: 5px 0px;margin-top: 5px;">
                                        <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                            <i class="fa fa-calendar" style="font-size: 15px;"></i>
                                            &nbsp;
                                            <span style="font-weight: bold">Homework Date:</span> 07/16/2018
                                        </p>
                                    </div>
                                    <div style="padding: 5px 0px;">
                                        <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                            <i class="fa fa-calendar"  style="font-size: 15px;"></i>
                                            &nbsp;
                                            <span style="font-weight: bold">Submission Date:</span> 07/16/2018
                                        </p>
                                    </div>
                                    <div style="padding: 5px 0px;">
                                        <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                            <i class="fa fa-calendar"  style="font-size: 15px;"></i>
                                            &nbsp;
                                            <span style="font-weight: bold">Evaluation Date:</span> 07/16/2018
                                        </p>
                                    </div>
                                </div>
                                <div style="padding: 5px 0px;">
                                    <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                        <span style="font-weight: bold">Created By:</span> Joe Black
                                    </p>
                                </div>
                                <div style="padding: 5px 0px;">
                                    <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                        <span style="font-weight: bold">Evaluated By:</span> Joe Black
                                    </p>
                                </div>
                                <div style="padding: 5px 0px;">
                                    <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                        <span style="font-weight: bold">Section:</span> A
                                    </p>
                                </div>
                                <div style="padding: 5px 0px;">
                                    <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                        <span style="font-weight: bold">Class:</span> Class 1
                                    </p>
                                </div>
                                <div style="padding: 5px 0px;">
                                    <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                        <span style="font-weight: bold">Subject:</span> Mathematics
                                    </p>
                                </div>
                                <div style="padding: 5px 0px;">
                                    <p style="padding: 0px;margin: 0px !important;font-size: 14px;">
                                        <span style="font-weight: bold">Description:</span> Study table from 1-10 .
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Evaluate Homework  -->
    </div>
</template>