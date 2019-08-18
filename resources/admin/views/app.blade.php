<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link href='/css/app.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div id="app">
        {!! $ssr !!}
    </div>
    <script defer src="{{ mix('js/app-client.js') }}"> </script>
  </body>
</html>
