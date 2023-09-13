<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>import excel file</title>
</head>

<body>
    <center>
        <form style="margin-top: 50px;" action="{{ route('users.import') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Upload Your Excel File</label>
                <input type="file" name="file">
            </div>
            <br>
            <button type="submit">Upload</button>
        </form>
    </center>
</body>

</html>
