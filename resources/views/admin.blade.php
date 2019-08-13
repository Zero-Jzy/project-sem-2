<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="{{csrf_token()}}=" name="csrf-token" />
    <title>Admin page</title>
    <link href="{{asset('admin_css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app"></div>
<script src="{{asset('admin_js/app.js')}}" ></script>
</body>
</html>
