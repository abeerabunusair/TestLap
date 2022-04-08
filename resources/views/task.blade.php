<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($tasks as $task):?>
        <li>{{ $task }}</li>
        <?php endforeach ;?>
    </ul>
    <hr>
    <ul>
        @foreach ($tasks as $key => $task)
            <li><a href="{{ 'show/'.$key }}">{{ $task }}</a></li>
        @endforeach
    </ul>

</body>

</html>
