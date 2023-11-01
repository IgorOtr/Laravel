<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('home.store')}}" method="post">
        <input type="hidden" value="{{csrf_token()}}" name="_token">
        <input placeholder="Post Title:" type="text" name="post_title" id="">
        <input placeholder="Post Content" type="text" name="post_content" id="">
        <button type="submit">Create</button>
    </form>
</body>
</html>