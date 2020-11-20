@extends('layout.layout')

@section('content')


<div>
{{--    @if($errors->any())--}}
{{--        @foreach($errors->all() as $error)--}}
{{--            <li>{{$error}}</li>--}}
{{--        @endforeach--}}
{{--        @endif--}}
<form method='post' action="{{route('films.save')}}"  enctype="multipart/form-data" >

    <div class="container">
        <h1>Add movie</h1>
        <hr>

        <label><b>Title</b></label>

        <input type="text" class="form-control @error('title') is-invalid @enderror " placeholder="Enter Title" name="title" >
{{--        @if($errors->first('title'))--}}
{{--            <p class="text-danger">{{$errors->first('title')}}</p>--}}
{{--        @endif--}}
        @error('title')
            <p class="text-danger">{{$errors->first('title')}}</p>

        @enderror
        <label><b>Director</b></label>
        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid': ''}} " placeholder="Enter Director" name="director"  >
        @if($errors->first('director'))
            <p class="text-danger">{{$errors->first('director')}}</p>
        @endif
        <label><b>Enter rate</b></label>
        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid': ''}} " placeholder="Enter rate" name="rate" >
        @if($errors->first('rate'))
            <p class="text-danger">{{$errors->first('rate')}}</p>
        @endif
        <hr>
        @csrf
        <button type="submit" class="submit">Submit</button>
    </div>




</form>



@endsection


