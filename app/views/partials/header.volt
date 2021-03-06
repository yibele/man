<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    {{ javascript_include('js/jquery-3.2.1.min.js')}}
    <script type="text/javascript" src="http://cdn.webfont.youziku.com/wwwroot/js/wf/youziku.api.min.js?"></script>
    <script type="text/javascript" src="http://cdn.webfont.youziku.com/youziku.justtime.js"></script>
    <title>{{title}}</title>
    {% block style %}
    {% endblock %}
    {{ stylesheet_link('/css/bulma.css')}}
    {{ stylesheet_link('/css/override.css')}}
    {{ stylesheet_link('/css/app.css') }}
    {{ stylesheet_link('/css/start.css') }}
    {{ javascript_include('js/vue.js') }}

</head>
<body>
