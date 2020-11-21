

    <html>
    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>




    <label>Name:</label>
    {{$name = Auth::user()->name}} <br>
    <label>Email:</label>
    {{$email = Auth::user()->email}}
    <table>
        <tr>
        <th>Title</th>
        <th>Director</th>
        <th>Rate</th></tr>

    @foreach($films as $film)
@if($film->user_id==Auth::user()->id)
    <tr>
        <td>
    {{$film->title}}</td>
        <td>{{$film->director}}</td>
        <td>{{$film->rate}}</td>
        </tr>
        @endif
    @endforeach
        </table>

    </body>
