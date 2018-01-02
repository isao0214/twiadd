<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css"/>
        <title>Hello Vue</title>

        <link rel="stylesheet" href="css/app.css">

        <script type="text/javascript">
            window.Laravel = window.Laravel || {};
            window.Laravel.csrfToken = "{{csrf_token()}}";
        </script>
    </head>
    <body>
        <div id="app">
            @{{ message }}
        </div>
        <div id="app-2">
            <span v-bind:title="message">
                Hover your mouse over me for a few seconds
                to see my dynamically bound title!
            </span>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>