<!DOCTYPE html>
<html>
<head>
    <title>Exco Search</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>



    <style>

        .search-form .form-group {
            float: right !important;
            transition: all 0.35s, border-radius 0s;
            width: 32px;
            height: 32px;
            background-color: #fff;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
            border-radius: 25px;
            border: 1px solid #ccc;
        }
        .search-form .form-group input.form-control {
            padding-right: 20px;
            border: 0 none;
            background: transparent;
            box-shadow: none;
            display:block;
        }
        .search-form .form-group input.form-control::-webkit-input-placeholder {
            display: none;
        }
        .search-form .form-group input.form-control:-moz-placeholder {
            /* Firefox 18- */
            display: none;
        }
        .search-form .form-group input.form-control::-moz-placeholder {
            /* Firefox 19+ */
            display: none;
        }
        .search-form .form-group input.form-control:-ms-input-placeholder {
            display: none;
        }
        .search-form .form-group:hover,
        .search-form .form-group.hover {
            width: 100%;
            border-radius: 4px 25px 25px 4px;
        }
        .search-form .form-group span.form-control-feedback {
            position: absolute;
            top: -1px;
            right: -2px;
            z-index: 2;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
            color: #3596e0;
            left: initial;
            font-size: 14px;
        }

    </style>
</head>
<!-- Coded with love by Mutiullah Samim-->
<body>

@if (\Session::has('noitems'))
    <div class="text-center">
        <div class="alert alert-success">
            <span style="color:red;font-size: 30px;"><i class="material-icons" style="color:red;font-size: 25px;">&#xe002;</i>&nbsp;&nbsp;{!! \Session::get('noitems') !!}</span>
        </div>
    </div>
    {{--       <script type="text/javascript">--}}
    {{--           myFunction();--}}
    {{--       </script>--}}

@endif


<form method="GET" action="{{Route('mego')}}">
<div class="container">
    <div class="row">
        <h2>Exco Search box</h2>
        <div class="search">
            <input type="text" class="form-control input-sm" maxlength="64" name="myid" placeholder="Search" required/>
            <button type="submit" class="btn btn-primary btn-sm">Search</button>
        </div>
    </div>
</div>
</form>

</body>
</html>
