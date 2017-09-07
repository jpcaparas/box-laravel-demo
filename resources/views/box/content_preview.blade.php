<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8"/>
    <title>Box Content Preview Demo</title>

    <!-- polyfill.io only loads a Promise polyfill if your browser needs one -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=Promise"></script>

    <!-- Latest version of Preview SDK for your locale -->
    <script src="https://cdn01.boxcdn.net/platform/preview/1.9.0/en-US/preview.js"></script>
    <link rel="stylesheet" href="https://cdn01.boxcdn.net/platform/preview/1.9.0/en-US/preview.css"/>
</head>
<body>
<h1>Box Content Preview v2</h1>
<hr />
<div class="preview-container" style="height:400px;width:575px"></div>
<p>
    <a href="{{ route('box') }}">&larr; Upload a new file</a>
</p>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
<script>
  axios.post('/box/access_token').then(function(response)
  {
    var preview = new Box.Preview();
    var accessToken = response.data.token;
    preview.show('{{ $fileId }}', accessToken, {
      container: '.preview-container',
      header: 'none',
      showAnnotations: false,
      showDownload: true,
    });
  }).catch(function(error)
  {
    console.log(error);
  });
</script>
</body>
</html>
