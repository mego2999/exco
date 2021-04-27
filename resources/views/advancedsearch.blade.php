<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        body{
            margin: 100px;
        }
    </style>

</head>


<body>
<!-- final table -->

<div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="text-center">Application Search</h2>
    </div>
    <div class="panel-body">
        <div class="">
            <span>Manufacturers</span>
        <select class="form-control" name="manufacturer">
            <option selected="false">
               Companies
            </option>
            @foreach(DB::table('manufacturer')
            ->select('manufacturer.*')
            ->get() as $dinadata)
            <option value="{{$dinadata->name}}">{{$dinadata->name}}</option>
            @endforeach
        </select>
        </div><br>
        <div class="">
            <span>equipmentType</span>
            <select class="form-control" name="equipmentType" id="equipmentType">
                <option selected="false">
                    equipmentType
                </option>
            </select>
        </div><br>
        <div class="">
            <span>make</span>
            <select class="form-control" name="make">
                <option selected="false">
                    make
                </option>
            </select>
        </div><br>
        <div class="">
            <span>Model</span>
            <select class="form-control" name="model">
                <option selected="false">
                    model
                </option>
            </select>
        </div><br>
        <div class="">
            <span>Model serial number</span>
            <select class="form-control" name="modelsn">
                <option selected="false">
                    Model serial number
                </option>
            </select>
        </div><br>
        <div class="">
            <span>Engine Manufacturer</span>
            <select class="form-control" name="enginemanu">
                <option selected="false">
                    Engine Manufacturer
                </option>
            </select>
        </div><br>
        <div class="">
            <span>Engine</span>
            <select class="form-control" name="engine">
                <option selected="false">
                    engine
                </option>
            </select>
        </div><br>
        <div class="">
            <span>Engine Serial Number</span>
            <select class="form-control" name="enginesn">
                <option selected="false">
                    Engine SN
                </option>
            </select>
        </div><br>
        <div class="">
            <span>Year</span>
            <select class="form-control" id="year" name="year">
                <option selected="false">
                    year
                </option>
            </select>
        </div><br><br>



        <div class="col-md-3">
            <button class="btn btn-primary" id="search"><i class="fa fa-search"></i> Search</button>
        </div>
    </div>

</div>



@if(isset($mycompanies) && $mycompanies -> count() > 0)
    <div class="panel panel-primary">
        <div class="panel-heading">
            Information <i class="fa fa-info"></i>
        </div>

        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <th>id</th>
                <th>company name</th>
                <th>employee number</th>
                </thead>
                <tbody>
                @foreach($mycompanies as $company)
                    <tr>
                        <td>{{$company->id}}</td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->employeenum}}</td>
                        @endforeach

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <center><a href="{{Route('advancedsearch')}}"><button class="btn btn-primary" id="clear"><i class="fa fa-trash"></i> Clear Search</button></a></center>
@endif




</body>


<script type="text/javascript">

    /*state*/
    jQuery(document).ready(function () {
        jQuery('select[name="manufacturer"]').on('change', function () {
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
                        });
                    }
                });
            } else {
                $('select[name="equipmentType"]').empty();
            }
        });


        /*make*/

            jQuery('select[name="equipmentType"]').on('change', function () {
                var equipmentTypeID = jQuery(this).val();
                if (equipmentTypeID) {
                    jQuery.ajax({
                        url: '/make/' + equipmentTypeID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            jQuery('select[name="make"]').empty(); // remove last selected item
                            jQuery('select[name="make"]').append('<option>make</option>');
                            jQuery.each(data, function (key, value) {

                                $('select[name="make"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="make"]').empty();
                }
            });



        /*model*/

            jQuery('select[name="make"]').on('change', function () {
                var makeID = jQuery(this).val();
                if (makeID) {
                    jQuery.ajax({
                        url: '/model/' + makeID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            jQuery('select[name="model"]').empty(); // remove last selected item
                            jQuery('select[name="model"]').append('<option>model</option>');
                            jQuery.each(data, function (key, value) {

                                $('select[name="model"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="model"]').empty();
                }
            });



        /*model serial number*/

        jQuery('select[name="model"]').on('change', function () {
            var modelID = jQuery(this).val();
            if (modelID) {
                jQuery.ajax({
                    url: '/modelsn/' + modelID,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                            jQuery('select[name="modelsn"]').empty(); // remove last selected item
                            jQuery('select[name="modelsn"]').append('<option>modelSN</option>');
                        jQuery.each(data, function (key, value) {
                            $('select[name="modelsn"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="modelsn"]').empty();
            }
        });


        /*Engine Manufacturer*/

        jQuery('select[name="model"]').on('change', function () {
            var modelID = jQuery(this).val();
            if (modelID) {
                jQuery.ajax({
                    url: '/enginemanu/' + modelID,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        jQuery('select[name="enginemanu"]').empty(); // remove last selected item
                        jQuery('select[name="enginemanu"]').append('<option>modelSN</option>');
                        jQuery.each(data, function (key, value) {
                            $('select[name="enginemanu"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="enginemanu"]').empty();
            }
        });


    });
</script>


<!--Button Clicked-->

<script type="text/javascript">

    $("#search").on("click", function ()
    {
        var link = document.getElementById("company").value;

        $.ajax({
           url: window.location.href="getData/"+link,
        });
    });

</script>

<!--Button Clicked-->
</html>
