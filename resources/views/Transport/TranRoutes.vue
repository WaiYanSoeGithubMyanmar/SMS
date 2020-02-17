<template>
    <div class="form" id="bar">
        <div class="toplink">
            <h2 class="stuName">Transport</h2>
            <h4 class="stuLink">
                <router-link class="home" to="/home">Home</router-link>> Routes
            </h4>
        </div>
        <hr />

        <div class="row" style="align-items: end !important;">
            <div class="col-lg-5 col-md-12" style="padding-left:2px;">
                <div class="card">
                    <div class="card-header">
                        <h6>Create Route</h6>
                    </div>
                    <div class="card-body" style="padding:1rem 0;border-bottom: 1px solid #8080808c;">
                        <div id="OthAlert" style="margin: 0 10px 10px 10px;display:none;" class="alert alert-success" role="alert">
                            {{ alertmessage }}
                            <button @click="goAlertClose(1)" type="button" class="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="col-12">
                            <label for="route">Route Title<strong>*</strong></label>
                            <input type="text" id="route_title" class="inputbox" v-model="tranRoute.route_title"
                                @keyup="onValidate(tranRoute.route_title, 'route_title', 'route_title_msg')" 
                                v-on:blur="onValidate(tranRoute.route_title, 'route_title', 'route_title_msg')" />
                            <span id="route_title_msg" class="error_message">Route title is required</span>
                        </div>
                        <div class="col-12">
                            <label for="fare">Fare</label>
                            <input type="text" class="inputbox" v-model="tranRoute.fare" ref="input"
                                @keydown="restrictSpecialCharacter($event, 101, tranRoute.fare)"
                                v-on:blur="formatFare()" @keyup.enter="formatFare()" @click="selectAll()" />
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
                                        <th class="all" nowrap>Route Title</th>
                                        <th class="all" nowrap>Fare</th>
                                        <th class="all" style="text-align:right;" nowrap>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="route in routeList" :key="route.id" class="active">
                                        <td class="all" nowrap>{{route.route_title}}</td>
                                        <td class="all" nowrap>{{route.fare}} MMK</td>
                                        <td style="text-align:right;">
                                            <i @click="goEdit(route.id)" class="fa fa-pencil pen"><span class="penLabel">Edit</span></i>
                                            <i @click="goDelete(route.id)" class="fa fa-times time"><span class="timeLabel">Delete</span></i>
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
                tranRoute: {"id":"","route_title":"","fare":""},
                routeList: [],
                alertmessage: "",
                alertdeletemsg: ""
            };
        },

        created() 
        {
            this.getRouteList();
        },

        methods: 
        {
            getRouteList()
            {
                this.axios.get('/api/tranRouteList').then(response => {            
                    this.routeList = response.data;
                });
            },

            goSave() 
            {
                if(this.checkValidate())
                {
                    this.axios.post('/api/TranRoute/save', this.tranRoute).then(response => (              
                        this.tranRoute = {"id":"","route_title":"","fare":""},
                        this.getRouteList(),
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
                this.axios.get(`/api/TranRoute/edit/${aId}`).then(response => {
                    this.tranRoute = response.data;
                });
            },

            goDelete(aID)
            {
                this.axios.get(`/api/TranRoute/delete/${aID}`).then(response => { 
                    let i = this.routeList.map(item => item.id).indexOf(aID);
                    this.routeList.splice(i, 1);
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
                if(this.tranRoute.route_title == "" || this.tranRoute.route_title == undefined)
                {
                    this.onValidateMessage('route_title', 'route_title_msg');
                }
                else
                {
                    return true;
                }

                return false;
            },

            restrictSpecialCharacter(event, fid, value)
            {
                if (event.which != 9)
                {
                    if (fid == 101)
                    {
                        if (/^[\\\"\'\;\:\>\|~`!@#\$%^&*\(\)]$/i.test(event.key))
                        {
                            event.preventDefault();
                        }
                    }
                
                    if (!((event.which > 47 && event.which < 58) || event.which == 8 || event.which == 46 || event.which == 37 || event.which == 39 || event.which == 190 || (event.keyCode >= 96 && event.keyCode <= 105))) 
                    {
                        event.preventDefault();
                    }

                    if(value != undefined)
                    {
                        if (value.includes("."))
                        {
                            if (/^[\\\"\'\;\:\>\|~`!@#\$%^&*.\(\)]$/i.test(event.key))
                            {
                                event.preventDefault();
                            }
                        }
                    }
                }
            },

            formatFare()
            {
                let amount = this.tranRoute.fare.replace(/,/g, '');
                if(amount == "" || parseFloat(amount) == 0){
                    this.tranRoute.fare = "0.00";
                }else{
                    this.tranRoute.fare = this.thousand_sperator(parseFloat(amount).toFixed(2));
                }
            },

            thousand_sperator(num) 
            {
                if (num != "" && num != undefined && num != null) 
                {
                    num = num.replace(/,/g, "");
                }   
                var parts = num.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                return parts;
            },

            selectAll() {
                this.$refs.input.select();
            }
        }
    };
</script>
