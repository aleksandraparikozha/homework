@extends('layout.layout')

@section('content')


    <div>
        {{--    @if($errors->any())--}}
        {{--        @foreach($errors->all() as $error)--}}
        {{--            <li>{{$error}}</li>--}}
        {{--        @endforeach--}}
        {{--        @endif--}}
        <form method='post' action="{{route('user.save')}}"  enctype="multipart/form-data" >

            <div class="container">
                <h1>Sign up</h1>
                <hr>

                <label><b>User</b></label>

                <input type="text" class="form-control @error('name') is-invalid @enderror " placeholder="Enter username" name="name" >
                {{--        @if($errors->first('title'))--}}
                {{--            <p class="text-danger">{{$errors->first('title')}}</p>--}}
                {{--        @endif--}}
                @error('name')
                <p class="text-danger">{{$errors->first('name')}}</p>

                @enderror
                <label><b>Email</b></label>
                <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid': ''}} " placeholder="Enter email" name="email"  >
                @if($errors->first('email'))
                    <p class="text-danger">{{$errors->first('email')}}</p>
                @endif
                <label><b>Password</b></label>
                <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid': ''}} " placeholder="Enter password" name="password" >
                @if($errors->first('password'))
                    <p class="text-danger">{{$errors->first('password')}}</p>
                @endif
                <hr>
                @csrf
                <button type="submit" class="submit">Submit</button>
            </div>




        </form>



@endsection
