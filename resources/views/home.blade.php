@extends('main')

@section('content')

<!-- search bar -->

@include('components.searchBar')

<!-- search bar -->

     @include('components.trending')

    <div class="container " >
        <hr>
    </div>

<<<<<<< HEAD
     @include('components.comingsoon')
=======
    <!-- @include('components.popular')
>>>>>>> c7f5ca0848ba4917d10ff20eafd6c0c15d578fa9


     <div class="container mt-5 d-none d-md-block" >
        <hr>
    </div>
<<<<<<< HEAD
 
    
=======

    @include('components.allTimePopular')

    <div class="container mt-5" >
        <br>
    </div> -->

>>>>>>> c7f5ca0848ba4917d10ff20eafd6c0c15d578fa9

@endsection