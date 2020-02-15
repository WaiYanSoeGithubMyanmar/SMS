<template>
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
                                <a title="Columns" onclick="showColumns('ModalColumns','ModalBackground')">
                                    <i class="fa fa-columns"></i>
                                </a>
                                
                                <div id="ModalColumns" class="columns">
                                    <div v-for="item in arrayTableColumns">
                                        <p @click="clickHideColumn(item)" :id="item.Id" class="tableLink">
                                            <span>{{item.Name}}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p @click="clickShowColumn(arrayTableColumns)" class="tableLinkActive">
                                            <span>Restore visibility</span>
                                        </p>
                                    </div>
                                </div>
                                <div onclick="clickBackground('ModalColumns','ModalBackground')" id="ModalBackground" style="top: 0;left: 0;width: 100%;height: 100%;background: transparent;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">            
                        <table class="table table-hover table-striped" id="studenttable">
                            <thead>
                                <tr>
                                    <th :class="arrayTableColumns[0].class" nowrap>Admission Number</th>
                                    <th :class="arrayTableColumns[1].class" nowrap>Name</th>
                                    <th :class="arrayTableColumns[2].class" nowrap>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="active">
                                    <td :class="arrayTableColumns[0].class" nowrap>
                                        18001
                                    </td>
                                    <td :class="arrayTableColumns[1].class" nowrap>
                                        Edward Thomas
                                    </td>
                                    <td :class="arrayTableColumns[2].class" nowrap>
                                        <a href="#" style="text-decoration:none;" class="btn-success btn-sm">Complete</a>
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td :class="arrayTableColumns[0].class" nowrap>
                                        18001
                                    </td>
                                    <td :class="arrayTableColumns[1].class" nowrap>
                                        Edward Thomas
                                    </td>
                                    <td :class="arrayTableColumns[2].class" nowrap>
                                        <a href="#" style="text-decoration:none;" class="btn-success btn-sm">Complete</a>
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
</template>
<script>
    export default {
        data() {
            return {
                checkColumns: false,
                arrayTableColumns: [
                    {"Name": "Admission Number","Id": "AdmissionNumberId", "class": "tbl_body_Admission"},
                    {"Name": "Name","Id": "NameId", "class": "tbl_body_Name"},
                    {"Name": "Status","Id": "StatusId", "class": "tbl_body_Status"}
                ],
            };
        },
        methods: {
            clickHideColumn(data){
                showTableHeader(data);
            },
            clickShowColumn(data){
                clickShowAllColumn(data);
            }
        }
    }
</script>   