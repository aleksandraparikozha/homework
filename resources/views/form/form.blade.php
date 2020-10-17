<body>

<form action="{{route('films.save')}}" method='POST' enctype="multipart/form-data" >
    <div class="container">
        <h1>Add movie</h1>
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
