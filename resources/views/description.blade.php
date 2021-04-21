<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>

<style>
    .single {
        padding: 30px 15px;
        margin-top: 5px;
        background: #fcfcfc;
        border: 1px solid #f0f0f0; }
    .single h3.side-title {
        margin: 0;
        margin-bottom: 10px;
        padding: 0;
        font-size: 20px;
        color: #333;
        text-transform: uppercase; }
    .single h3.side-title:after {
        content: '';
        width: 100%;
        height: 1px;
        background: #ff173c;
        display: block;
        margin-top: 6px; }

    .single ul {
        margin-bottom: 0; }
    .single li a {
        color: #666;
        font-size: 14px;
        text-transform: uppercase;
        border-bottom: 1px solid #f0f0f0;
        line-height: 40px;
        display: block;
        text-decoration: none; }
    .single li a:hover {
        color: #ff173c; }
    .single li:last-child a {
        border-bottom: 0; }
</style>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- Category -->
            <div class="single category">
                <h3 class="side-title">Product Description</h3>
                <ul class="list-unstyled">
                    @if(isset($mego) && $mego -> count() > 0)
                        @foreach($mego as $product)
                    <li><a href="#" title="">BALDWIN PART NO. <span class="pull-right">{{$product->baldwinPart}}</span></a></li>
                    <li><a href="#" title="">EXCO PARTNO. <span class="pull-right">{{$product->excopart}}</span></a></li>
                    <li><a href="#" title="">Length (Inches) <span class="pull-right">{{$product->lengthInch}}</span></a></li>
                    <li><a href="#" title="">Length (mm) <span class="pull-right">{{$product->lengthMM}}</span></a></li>
                    <li><a href="#" title="">Width (mm) <span class="pull-right">{{$product->widthMM}}</span></a></li>
                    <li><a href="#" title="">Height  (mm) <span class="pull-right">{{$product->heightMM}}</span></a></li>
                    <li><a href="#" title="">Width (Inches) <span class="pull-right">{{$product->widthInches}}</span></a></li>
                    <li><a href="#" title="">Height (Inches) <span class="pull-right">{{$product->heightInches}}</span></a></li>
                            <li><a href="#" title="">Outlet <span class="pull-right">{{$product->outlet}}</span></a></li>
                            <li><a href="#" title="">OD (Inches) <span class="pull-right">{{$product->odInches}}</span></a></li>
                            <li><a href="#" title="">OD (mm) <span class="pull-right">{{$product->odMM}}</span></a></li>
                            <li><a href="#" title="">OD2 (Inches) <span class="pull-right">{{$product->baldwinPart}}</span></a></li>
                            <li><a href="#" title="">OD2 (mm) <span class="pull-right">{{$product->odMM2}}</span></a></li>
                            <li><a href="#" title="">ID (Inches) <span class="pull-right">{{$product->idInches}}</span></a></li>
                            <li><a href="#" title="">ID (mm) <span class="pull-right">{{$product->idMM}}</span></a></li>
                            <li><a href="#" title="">Thread (Sort) <span class="pull-right">{{$product->threadSort}}</span></a></li>
                            <li><a href="#" title="">Thread (mm) <span class="pull-right">{{$product->threadMM}}</span></a></li>
                            <li><a href="#" title="">Thread  (Inches) <span class="pull-right">{{$product->threadInches}}</span></a></li>
                            <li><a href="#" title="">Per Inch <span class="pull-right">{{$product->perInch}}</span></a></li>
                            <li><a href="#" title="">Gaskets/ I. Gskt. <span class="pull-right">{{$product->gaskets}}</span></a></li>
                            <li><a href="#" title="">Features / Contains <span class="pull-right">{{$product->features}}</span></a></li>
                        @endforeach
                    @elseif(isset($exco) && $exco -> count() > 0)
                        @foreach($exco as $product)
                            <li><a href="#" title="">BALDWIN PART NO. <span class="pull-right">{{$product->baldwinPart}}</span></a></li>
                            <li><a href="#" title="">EXCO PARTNO. <span class="pull-right">{{$product->excopart}}</span></a></li>
                            <li><a href="#" title="">Length (Inches) <span class="pull-right">{{$product->lengthInch}}</span></a></li>
                            <li><a href="#" title="">Length (mm) <span class="pull-right">{{$product->lengthMM}}</span></a></li>
                            <li><a href="#" title="">Width (mm) <span class="pull-right">{{$product->widthMM}}</span></a></li>
                            <li><a href="#" title="">Height  (mm) <span class="pull-right">{{$product->heightMM}}</span></a></li>
                            <li><a href="#" title="">Width (Inches) <span class="pull-right">{{$product->widthInches}}</span></a></li>
                            <li><a href="#" title="">Height (Inches) <span class="pull-right">{{$product->heightInches}}</span></a></li>
                            <li><a href="#" title="">Outlet <span class="pull-right">{{$product->outlet}}</span></a></li>
                            <li><a href="#" title="">OD (Inches) <span class="pull-right">{{$product->odInches}}</span></a></li>
                            <li><a href="#" title="">OD (mm) <span class="pull-right">{{$product->odMM}}</span></a></li>
                            <li><a href="#" title="">OD2 (Inches) <span class="pull-right">{{$product->baldwinPart}}</span></a></li>
                            <li><a href="#" title="">OD2 (mm) <span class="pull-right">{{$product->odMM2}}</span></a></li>
                            <li><a href="#" title="">ID (Inches) <span class="pull-right">{{$product->idInches}}</span></a></li>
                            <li><a href="#" title="">ID (mm) <span class="pull-right">{{$product->idMM}}</span></a></li>
                            <li><a href="#" title="">Thread (Sort) <span class="pull-right">{{$product->threadSort}}</span></a></li>
                            <li><a href="#" title="">Thread (mm) <span class="pull-right">{{$product->threadMM}}</span></a></li>
                            <li><a href="#" title="">Thread  (Inches) <span class="pull-right">{{$product->threadInches}}</span></a></li>
                            <li><a href="#" title="">Per Inch <span class="pull-right">{{$product->perInch}}</span></a></li>
                            <li><a href="#" title="">Gaskets/ I. Gskt. <span class="pull-right">{{$product->gaskets}}</span></a></li>
                            <li><a href="#" title="">Features / Contains <span class="pull-right">{{$product->features}}</span></a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>
