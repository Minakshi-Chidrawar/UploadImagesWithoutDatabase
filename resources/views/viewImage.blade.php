<!DOCTYPE html>
<html>
<head>
    <title>Shree Adhya Shakti Mataji</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto|Lobster|Satisfy" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container bs-callout">
    <div id="mycarousel" class="carousel slide" data-ride="carousel">        
        <div class="carousel-inner" role="listbox">

            @foreach(array_chunk($images, 4) as $items)
                <div class="row">
                    @foreach($items as $item)
                    <div class="col-sm-3 portfolio-item">
                        <div>
                            <img  class="img-responsive" style="border: 2px; margin: 10px;" src= "/upload/12052019/{{ $item }}" width="200px" height="200px">
                        </div>
                    </div>
                    @endforeach
                </div>

            @endforeach

        </div>
    </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>