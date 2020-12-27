@extends('layout.layout')

@section('content')


    <div>
        {{--    @if($errors->any())--}}
        {{--        @foreach($errors->all() as $error)--}}
        {{--            <li>{{$error}}</li>--}}
        {{--        @endforeach--}}
        {{--        @endif--}}
        <form method='post' action="{{route('mails.send')}}"  enctype="multipart/form-data" >

            <div class="container">
                <h1>Add movie</h1>
                <hr>

                <label><b>Title</b></label>

                <input type="mail" class="form-control @error('mail') is-invalid @enderror " placeholder="Enter mail" name="mail" >

                @csrf
                <button type="submit" class="submit">Submit</button>
            </div>




        </form>



@endsection


