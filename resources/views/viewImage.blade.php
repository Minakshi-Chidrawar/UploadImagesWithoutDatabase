<div id="mycarousel" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner" role="listbox">

        @foreach($images as $image)

            <div class="item">

                <img src="{{ asset( $image ) }}">

            </div>

        @endforeach

    </div>


    <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">

        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

        <span class="sr-only">Previous</span>

    </a>
    <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">

        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

        <span class="sr-only">Next</span>

    </a>

</div>