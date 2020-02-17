<template>
    <div class="form" id="bar">
        <div class="toplink">
            <h2 class="stuName">Transport</h2>
            <h4 class="stuLink">
                <router-link class="home" to="/home">Home</router-link>> Vehicles
            </h4>
        </div>
        <hr />

        <div class="row" style="align-items: end !important;">
            <div class="col-lg-5 col-md-12" style="padding-left:2px;">
                <div class="card">
                    <div class="card-header">
                        <h6>Add Vehicle</h6>
                    </div>
                    <div class="card-body" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
                        <div id="OthAlert" style="margin: 0 10px 10px 10px;display:none;" class="alert alert-success" role="alert">
                            {{ alertmessage }}
                            <button @click="goAlertClose(1)" type="button" class="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="col-12">
                            <label for="number">Vehicle Number <strong>*</strong></label>
                            <input type="text" id="vehicle_number" class="inputbox" v-model="tranVehicle.vehicle_no" 
                                @keyup="onValidate(tranVehicle.vehicle_no, 'vehicle_number', 'vehicle_number_msg')" 
                                v-on:blur="onValidate(tranVehicle.vehicle_no, 'vehicle_number', 'vehicle_number_msg')"/>
                            <span id="vehicle_number_msg" class="error_message">Vehicle number is required</span>
                        </div>
                        <div class="col-12">
                            <label for="model">Vehicle Model</label>
                            <input type="text" class="inputbox" v-model="tranVehicle.vehicle_model" />
                        </div>
                        <div class="col-12">
                            <label for="name">Driver Name</label>
                            <input type="text" class="inputbox" v-model="tranVehicle.driver_name" />
                        </div>
                        <div class="col-12">
                            <label for="licence">Driver Licence</label>
                            <input type="text" class="inputbox" v-model="tranVehicle.driver_licence" />
                        </div>
                        <div class="col-12">
                            <label for="contact">Driver Contact</label>
                            <input type="text" class="inputbox" v-model="tranVehicle.driver_contact" 
                                @keydown="restrictPhoneNo($event, tranVehicle.driver_contact)"/>
                        </div>
                        <div class="col-12 end">
                            <label for="note">Note</label>
                            <textarea class="textareas" style="font-size: 9.5pt;" rows="2" v-model="tranVehicle.note"></textarea>
                        </div>
                        <div class="col-12">
                            <button @click="goSave()" class="save">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12" style="padding-left:0;">
                <div class="card">
                    <div class="card-header">
                        <h6>Route List</h6>
                    </div>
                    <div class="card-body">
                        <div id="deleteAlert" style="margin: 10px 10px 10px 10px;display:none;" class="alert alert-success" role="alert">
                            {{alertdeletemsg}}
                            <button @click="goAlertClose(2)" type="button" class="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <input type="text" placeholder="Search..." class="searchText" />
                        <div class="copyRows">
                            <div class="row" id="copyRow">                
                                <div class="col-3">
                                    <a href="#" title="Excel">
                                        <i class="fa fa-file-excel-o"></i>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#" title="Print">
                                        <i class="fa fa-print"></i>
                                    </a>
                                </div>
                                <div class="col-3">
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
                                        <th class="all" nowrap>Vehicle Number</th>
                                        <th class="all" nowrap>Vehicle Model</th>
                                        <th class="all" nowrap>Driver Name</th>
                                        <th class="all" nowrap>Driver License</th>
                                        <th class="all" nowrap>Driver Contact</th>
                                        <th class="all" style="text-align:right;" nowrap>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="vehicle in vehicleList" :key="vehicle.id" class="active">
                                        <td class="all" nowrap>{{vehicle.vehicle_no}}</td>
                                        <td class="all" nowrap>{{vehicle.vehicle_model}}</td>
                                        <td class="all" nowrap>{{vehicle.driver_name}}</td>
                                        <td class="all" nowrap>{{vehicle.driver_licence}}</td>
                                        <td class="all" nowrap>{{vehicle.driver_contact}}</td>
                                        <td style="text-align:right;">
                                            <i @click="goEdit(vehicle.id)" class="fa fa-pencil pen"><span class="penLabel">Edit</span></i>
                                            <i @click="goDelete(vehicle.id)" class="fa fa-times time"><span class="timeLabel">Delete</span></i>
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
        data() 
        {
            return {
                tranVehicle: {},
                vehicleList: [],
                alertmessage: "",
                alertdeletemsg: ""
            };
        },

        created() 
        {
            this.getVehicleList();
        },

        methods: 
        {
            getVehicleList()
            {
                this.axios.get('/api/tranVehicleList').then(response => {            
                    this.vehicleList = response.data;
                });
            },

            goSave() 
            {
                if(this.checkValidate())
                {
                    this.axios.post('/api/TranVehicle/save', this.tranVehicle).then(response => (              
                        this.tranVehicle = {"id":"","vehicle_no":"","vehicle_mocel":"","driver_name":"","driver_licence":"","driver_contact":"","note":""},
                        this.getVehicleList(),
                        this.alertmessage = response.data,
                        $('#OthAlert').css('display', 'block')              
                    ))
                    .catch(error => {            
                        console.log("err->" + JSON.stringify(this.error.response))
                    });
                }
            },

            goAlertClose(aVal)
            {
                if(aVal == 1) $('#OthAlert').css('display', 'none')
                else $('#deleteAlert').css('display', 'none')
            },

            goEdit(aId)
            {      
                this.axios.get(`/api/TranVehicle/edit/${aId}`).then(response => {
                    this.tranVehicle = response.data;
                });
            },

            goDelete(aID)
            {
                this.axios.get(`/api/TranVehicle/delete/${aID}`).then(response => { 
                    let i = this.vehicleList.map(item => item.id).indexOf(aID);
                    this.vehicleList.splice(i, 1);
                    this.alertdeletemsg = response.data,
                    $('#deleteAlert').css('display', 'block') 
                });
            },

            onValidate(value, inputId, megId)
            {
                if(value == "" || value == undefined) document.getElementById(inputId).style.border = 'solid 1px red';
                else 
                {
                    document.getElementById(inputId).style.border = 'solid 1px #d2d6de';
                    document.getElementById(megId).style.display = 'none';
                }
            },

            onValidateMessage(inputId, megId)
            {
                document.getElementById(inputId).style.border = 'solid 1px red';
                document.getElementById(megId).style.display = 'block';
            },

            checkValidate()
            {
                if(this.tranVehicle.vehicle_no == "" || this.tranVehicle.vehicle_no == undefined)
                {
                    this.onValidateMessage('vehicle_number', 'vehicle_number_msg');
                }
                else
                {
                    return true;
                }

                return false;
            },

            restrictPhoneNo(event, value)
            {
                if(event.keyCode != 8 && !(/[0-9\+\-\ ]/i.test(event.key)))
                {
                    event.preventDefault();
                }

                if(value != undefined && value !="")
                {
                    if (/^[\\\"\'\;\:\>\|~`!@#\$%^&*+\(\)]$/i.test(event.key))
                    {
                        event.preventDefault();
                    }
                }
            }
        }
    };
</script>