@include('navbar')
<html>
<head>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<style>
    table{
        border: 1px solid gray;
    }
    tbody{
        border: 1px solid gray;
    }
    tr{
        border: 1px solid gray;
    }
    th{
        border: 1px solid gray;
        color: aliceblue;
    }
    td{
        border: 1px solid gray;
        color: grey;
        font-weight: bold;
    }
</style>
</head>

<body>
<center><a href="{{Route('mainpage')}}"><p style="color:white; "><u><i class="fa fa-arrow-left" aria-hidden="true"></i> Back To Main Search</u></p></a></center>
<center><div style="width: 50%">
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Replace Part No.</th>
        <th scope="col">Replace Brand</th>
        <th scope="col">Exco Part No.</th>
    </tr>
    </thead>
    <tbody>
    @foreach($exco as $first)
    <tr>

        <td>{{$first->replacePartNumber}}</td>
        <td>{{$first->replaceBrand}}</td>
        <td><a href="{{Route('description',$first->excopart)}}">{{$first->excopart}}</a></td>

    </tr>
    @endforeach

    </tbody>
</table>
</div>
</center>
</body>

</html>
