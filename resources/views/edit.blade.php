@extends('layout.layout')

@section('content')

    <body>

    <form method='post' action="{{route('films.update', $film)}}"  enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="container">
            <h1>Edit movie</h1>
            <hr>

            <label><b>Title</b></label>

            <input type="text" placeholder="Enter Title" name="title" value="{{old('title', $film->title)}}">

            <label><b>Director</b></label>
            <input type="text" placeholder="Enter Director" name="director"  value="{{old('director', $film->director)}}">

            <label><b>Enter rate</b></label>
            <input type="text" placeholder="Enter rate" name="rate" value="{{old('rate', $film->rate)}}">
            <hr>
            <button type="submit" class="submit">Submit</button>

        </div>


        </div>
    </form>

    </body>



@endsection
