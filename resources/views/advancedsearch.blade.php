<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="text-center">Multiple Search</h2>
    </div>
    <div class="panel-body">
        <div class="col-md-3">
        <select class="form-control" name="country">
            <option selected="false">
                Country
            </option>
        </select>
        </div>
        <div class="col-md-6">
            <select class="form-control" name="state">
                <option selected="false">
                    State
                </option>
            </select>
        </div>
        <div class="col-md-3">
            <button class="btn btn-primary" id="search"><i class="fa fa-search"></i> Search</button>
        </div>
    </div>

</div>
</body>


<script type="text/javascript">
    jQuery(document).ready(function ()
    {
       jQuery('select[name="country"]').on('change', function ()
       {
          var countryID = jQuery(this).val();
          if(countryID)
          {
              jQuery.ajax({
                  url: '/getStates/'+ countryID,
                  type: "GET",
                  dataType: "json",
                  success:function (data)
                  {
                      jQuery('select[name="state"]').empty(); // remove last selected item
                      jQuery.each(data, function (key,value){
                         $('select[name="state"]').append('<option value="'+ key +'">'+ value + '</option>');
                      });
                  }
              });
          }else{
              $('select[name="state"]').empty();
          }
       });
    });
</script>


<!--Button Clicked-->

<script type="text/javascript">

    $(#search).on("click", function ()
    {
        var link = document.getElementById("state").value;

        $.ajax({
           url: window.location.href="getData/"+link,
        });
    });

</script>

<!--Button Clicked-->







</html>
