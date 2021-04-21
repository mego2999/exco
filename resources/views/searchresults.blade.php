<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</head>

<body>
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

</body>

</html>
