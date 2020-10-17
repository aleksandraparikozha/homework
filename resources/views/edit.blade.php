@extends('layout.layout')

@section('content')

    <body>

    <form method='post' action="{{route('films.update', $filmId)}}"  enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="container">
            <h1>Edit movie</h1>
            <hr>

            <label><b>Title</b></label>

            <input type="text" placeholder="Enter Title" name="title" required>

            <label><b>Director</b></label>
            <input type="text" placeholder="Enter Director" name="director"  required>

            <label><b>Enter rate</b></label>
            <input type="text" placeholder="Enter rate" name="rate" required>
            <hr>
            <button type="submit" class="submit">Submit</button>

        </div>


        </div>
    </form>

    </body>



@endsection
