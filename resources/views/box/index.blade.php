<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload a file to Box v2</title>
</head>
<body>
<h1>Upload a file to Box v2</h1>
<hr />
{{ Form::open(['method' => 'post', 'url' => route('box.upload'), 'files' => true]) }}
<p>
    {{ Form::text('file_name', '', ['required' => true, 'placeholder' => 'File name']) }}
</p>
<p>
    {{ Form::file('file', ['required' => true]) }}
</p>
<p>
    {{ Form::submit('Upload') }}
</p>
{{ Form::close() }}
</body>
</html>
