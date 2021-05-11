@include('navbar')
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body{

        }

        .loader {
            border: 4px solid #f3f3f3;
            border-radius: 50%;
            border-top: 4px solid #3498db;
            width: 30px;
            height: 30px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

</head>


<body>
<!-- final table -->
<center><a href="{{Route('mainpage')}}"><p style="color:#00387b; "><u><i class="fa fa-arrow-left" aria-hidden="true"></i> Back To Main Search</u></p></a></center>
<center><div class="panel panel-primary" style="width: 50%;background-color: rgba(255, 255, 255, 0.5);">
        <div class="panel-heading" style="background-color: #00387b;border-color: #00387b;">
            <center><div>
                    <h2 class="text-center">Search By Dimensions</h2>
                </div>
            </center>
        </div>
        <div class="panel-body">

            <div class="col-md-12">
                <div class="loader" id="loader1" style="display: none;"></div>
                <select class="form-control" name="manufacturer" id="manufacturer">
                    <option selected="false">
                        Manufacturer
                    </option>
                    @foreach(DB::table('manufacturer')
                    ->select('manufacturer.*')
                    ->get() as $dinadata)
                        <option value="{{$dinadata->name}}">{{$dinadata->name}}</option>
                    @endforeach
                </select>
                <br>
            </div>
            <div class="col-md-6">
                <div class="loader" id="loader2" style="display: none;"></div>
                <select class="form-control" name="equipmentType" id="equipmentType">
                    <option selected="false">
                        equipmentType
                    </option>
                </select>
                <br>
            </div>
            <div class="col-md-6">
                <div class="loader" id="loader3" style="display: none;"></div>
                <select class="form-control" name="make" id="make">
                    <option selected="false">
                        make
                    </option>
                </select>
                <br>
            </div>
            <div class="col-md-6">
                <div class="loader" id="loader4" style="display: none;"></div>
                <select class="form-control" name="model" id="model">
                    <option selected="false">
                        model
                    </option>
                </select>
                <br>
            </div>
            <div class="col-md-6">
                <div class="loader" id="loader5" style="display: none;"></div>
                <select class="form-control" name="modelsn" id="modelsn">
                    <option selected="false">
                        Model serial number
                    </option>
                </select>
                <br>
            </div>
            <div class="col-md-6">
                <div class="loader" id="loader6" style="display: none;"></div>
                <select class="form-control" name="enginemanu" id="enginemanu">
                    <option selected="false">
                        Engine Manufacturer
                    </option>
                </select>
                <br>
            </div>
            <div class="col-md-6">
                <div class="loader" id="loader7" style="display: none;"></div>
                <select class="form-control" name="engine" id="engine">
                    <option selected="false">
                        engine
                    </option>
                </select>
                <br>
            </div>
            <div class="col-md-6">
                <div class="loader" id="loader8" style="display: none;"></div>
                <select class="form-control" name="enginesn" id="enginesn">
                    <option selected="false">
                        Engine SN
                    </option>
                </select>
                <br>
            </div>
            <div class="col-md-6">
                <div class="loader" id="loader9" style="display: none;"></div>
                <select class="form-control" id="year" name="year">
                    <option selected="false">
                        year
                    </option>
                </select>
            </div><br><br>



            <div class="col-md-12">
                <button class="btn btn-primary btn-lg" style="background-color: #00387b;" id="search"><i class="fa fa-search"></i> Search</button>
            </div>
        </div>

    </div></center>


@if (\Session::has('noitem'))
    <div class="text-center">
        <div class="alert alert-success">
            <span style="color:red;font-size: 30px;"><i class="fa fa-warning" style="font-size:48px;"></i>&nbsp;&nbsp;{!! \Session::get('noitem') !!}</span>
        </div>
    </div>
@endif
@if(isset($alldata) && $alldata -> count() > 0)

    <center><div class="panel panel-primary" style="width: 75%;background-color: rgba(255, 255, 255, 0.2);">
            <div class="panel-heading" style="background-color:#00387b;border-color: #00387b;">
                Information <i class="fa fa-info"></i>
            </div>

            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                    <th>Id</th>
                    <th>Manufacturer</th>
                    <th>Equipment Type</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Model Serial Number</th>
                    <th>Engine Manufacturer</th>
                    <th>Engine</th>
                    <th>Engine Serial Number</th>
                    <th>Year</th>
                    </thead>
                    <tbody>
                    @foreach($alldata as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->manufacturer}}</td>
                            <td>{{$data->equipmentType}}</td>
                            <td>{{$data->make}}</td>
                            <td>{{$data->model}}</td>
                            <td>{{$data->modelsn}}</td>
                            <td>{{$data->enginemanufacturer}}</td>
                            <td>{{$data->engine}}</td>
                            <td>{{$data->enginesn}}</td>
                            <td>{{$data->year}}</td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div></center>
    <center><a href="{{Route('advancedsearch')}}"><button class="btn btn-primary" style="background-color: #00387b; id="clear"><i class="fa fa-trash"></i> Clear Search</button></a></center>



@endif




</body>


<script type="text/javascript">

    /*state*/

    jQuery('select[name="manufacturer"]').on('change', function () {
        document.getElementById("loader2").style.display = "block";
        var manufacturerID = jQuery(this).val();
        if (manufacturerID) {
            jQuery.ajax({
                url: '/equipmentType/' + manufacturerID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    jQuery('select[name="equipmentType"]').empty(); // remove last selected item
                    jQuery('select[name="equipmentType"]').append('<option>equipmentType</option>');
                    jQuery.each(data, function (key, value) {

                        $('select[name="equipmentType"]').append('<option value="' + key + '">' + value + '</option>');
                        document.getElementById("loader2").style.display = "none";
                    });
                }
            });
        } else {
            $('select[name="equipmentType"]').empty();
        }
    });


    /*make*/

    jQuery('select[name="equipmentType"]').on('change', function () {
        document.getElementById("loader3").style.display = "block";
        var manufacturer = document.getElementById("manufacturer").value;
        var equipmentTypeID = jQuery(this).val();
        if (equipmentTypeID) {
            jQuery.ajax({
                url: '/make/' + equipmentTypeID + "/" + manufacturer,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    jQuery('select[name="make"]').empty(); // remove last selected item
                    jQuery('select[name="make"]').append('<option>make</option>');
                    jQuery.each(data, function (key, value) {

                        $('select[name="make"]').append('<option value="' + key + '">' + value + '</option>');
                        document.getElementById("loader3").style.display = "none";
                    });
                }
            });
        } else {
            $('select[name="make"]').empty();
        }
    });



    /*model*/

    jQuery('select[name="make"]').on('change', function () {
        document.getElementById("loader4").style.display = "block";
        var manufacturer = document.getElementById("manufacturer").value;
        var equipmentType = document.getElementById("equipmentType").value;
        var makeID = jQuery(this).val();
        if (makeID) {
            jQuery.ajax({
                url: '/model/' + makeID + "/" + manufacturer + "/" + equipmentType,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    jQuery('select[name="model"]').empty(); // remove last selected item
                    jQuery('select[name="model"]').append('<option>model</option>');
                    jQuery.each(data, function (key, value) {

                        $('select[name="model"]').append('<option value="' + key + '">' + value + '</option>');
                        document.getElementById("loader4").style.display = "none";
                    });
                }
            });
        } else {
            $('select[name="model"]').empty();
        }
    });



    /*model serial number*/

    jQuery('select[name="model"]').on('change', function () {
        document.getElementById("loader5").style.display = "block";
        var manufacturer = document.getElementById("manufacturer").value;
        var equipmentType = document.getElementById("equipmentType").value;
        var makeID = document.getElementById("make").value;
        var modelID = jQuery(this).val();
        if (modelID) {
            jQuery.ajax({
                url: '/modelsn/' + modelID + "/" + makeID + "/" + manufacturer + "/" + equipmentType,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    jQuery('select[name="modelsn"]').empty(); // remove last selected item
                    jQuery('select[name="modelsn"]').append('<option>modelSN</option>');
                    jQuery.each(data, function (key, value) {
                        $('select[name="modelsn"]').append('<option value="' + key + '">' + value + '</option>');
                        document.getElementById("loader5").style.display = "none";
                    });
                }
            });
        } else {
            $('select[name="modelsn"]').empty();
        }
    });


    /*Engine Manufacturer*/

    jQuery('select[name="model"]').on('change', function () {
        document.getElementById("loader6").style.display = "block";
        var manufacturer = document.getElementById("manufacturer").value;
        var equipmentType = document.getElementById("equipmentType").value;
        var makeID = document.getElementById("make").value;
        var modelID = jQuery(this).val();
        if (modelID) {
            jQuery.ajax({
                url: '/enginemanu/' + modelID + "/" + makeID + "/" + manufacturer + "/" + equipmentType,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    jQuery('select[name="enginemanu"]').empty(); // remove last selected item
                    jQuery('select[name="enginemanu"]').append('<option>Engine Manufacturer</option>');
                    jQuery.each(data, function (key, value) {
                        $('select[name="enginemanu"]').append('<option value="' + key + '">' + value + '</option>');
                        document.getElementById("loader6").style.display = "none";
                    });
                }
            });
        } else {
            $('select[name="enginemanu"]').empty();
        }
    });


    /*Engine*/

    jQuery('select[name="enginemanu"]').on('change', function () {
        document.getElementById("loader7").style.display = "block";
        var manufacturer = document.getElementById("manufacturer").value;
        var equipmentType = document.getElementById("equipmentType").value;
        var makeID = document.getElementById("make").value;
        var modelID = document.getElementById("model").value;
        var enginemanuID = jQuery(this).val();
        if (enginemanuID) {
            jQuery.ajax({
                url: '/engine/' + enginemanuID + "/" + modelID + "/" + makeID + "/" + manufacturer + "/" + equipmentType,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    jQuery('select[name="engine"]').empty(); // remove last selected item
                    jQuery('select[name="engine"]').append('<option>Engine</option>');
                    jQuery.each(data, function (key, value) {
                        $('select[name="engine"]').append('<option value="' + key + '">' + value + '</option>');
                        document.getElementById("loader7").style.display = "none";
                    });
                }
            });
        } else {
            $('select[name="engine"]').empty();
        }
    });


    /*Engine Serial number*/

    jQuery('select[name="engine"]').on('change', function () {
        document.getElementById("loader8").style.display = "block";
        var manufacturer = document.getElementById("manufacturer").value;
        var equipmentType = document.getElementById("equipmentType").value;
        var makeID = document.getElementById("make").value;
        var modelID = document.getElementById("model").value;
        var enginemanuID = document.getElementById("enginemanu").value;
        var engineID = jQuery(this).val();
        if (engineID) {
            jQuery.ajax({
                url: '/engineSN/' + engineID + "/" + enginemanuID + "/" + modelID + "/" + makeID + "/" + manufacturer + "/" + equipmentType,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    jQuery('select[name="enginesn"]').empty(); // remove last selected item
                    jQuery('select[name="enginesn"]').append('<option>Engine SN</option>');
                    jQuery.each(data, function (key, value) {
                        $('select[name="enginesn"]').append('<option value="' + key + '">' + value + '</option>');
                        document.getElementById("loader8").style.display = "none";
                    });
                }
            });
        } else {
            $('select[name="enginesn"]').empty();
        }
    });


    /*year*/

    jQuery('select[name="engine"]').on('change', function () {
        document.getElementById("loader9").style.display = "block";
        var manufacturer = document.getElementById("manufacturer").value;
        var equipmentType = document.getElementById("equipmentType").value;
        var makeID = document.getElementById("make").value;
        var modelID = document.getElementById("model").value;
        var enginemanuID = document.getElementById("enginemanu").value;
        var engineID = jQuery(this).val();
        if (engineID) {
            jQuery.ajax({
                url: '/year/' + engineID + "/" + enginemanuID + "/" + modelID + "/" + makeID + "/" + manufacturer + "/" + equipmentType,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    jQuery('select[name="year"]').empty(); // remove last selected item
                    jQuery('select[name="year"]').append('<option>Year</option>');
                    jQuery.each(data, function (key, value) {
                        $('select[name="year"]').append('<option value="' + key + '">' + value + '</option>');
                        document.getElementById("loader9").style.display = "none";
                    });
                }
            });
        } else {
            $('select[name="year"]').empty();
        }


    });
</script>


<!--Button Clicked-->

<script type="text/javascript">

    $("#search").on("click", function ()
    {
        var manufacturer = document.getElementById("manufacturer").value;
        var equipmentType = document.getElementById("equipmentType").value;
        var make = document.getElementById("make").value;
        var model = document.getElementById("model").value;
        var modelSN = document.getElementById("modelsn").value;
        var engineManufacturer = document.getElementById("enginemanu").value;
        var engine = document.getElementById("engine").value;
        var engineSerial = document.getElementById("enginesn").value;
        var year = document.getElementById("year").value;

        $.ajax({
            url: window.location.href="getData/"+manufacturer+"/"+equipmentType+"/"+make+"/"+model+"/"+modelSN+"/"+engineManufacturer+"/"+engine+"/"+engineSerial+"/"+year,
        });
    });

</script>

<!--Button Clicked-->
</html>

