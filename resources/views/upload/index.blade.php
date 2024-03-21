<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>

<img
    width="200px"
    height="200px"
    src="{{asset('storage/app/dev/5At6l57SbENY2xeNc8i5c3zQVfN8n6bamO6o4FFm.jpg')}}"
    alt=""
/>

<form method="post" enctype="multipart/form-data" action="{{route('uploads.store')}}">
    @csrf

    <input type="file" name="file" id="file">

    <button type="submit">
        Upload
    </button>

</form>
</body>
</html>
