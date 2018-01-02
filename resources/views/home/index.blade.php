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

        <div id="app-3">
            <span v-if="seen">Now you see me</span>
        </div>

        <div id="app-4">
            <ol>
                <li v-for="todo in todos">
                    @{{ todo.text }}
                </li>
            </ol>
        </div>

        <div id="app-5">
            <p>@{{ message }}</p>
            <button v-on:click="reverseMessage">Reverse Message</button>
        </div>

        <div id="app-6">
            <p>@{{ message }}</p>
            <input v-model="message">
        </div>

        <div id="app-7">
            <ol>
                <!--
                  各 todo-item の内容を表す todo オブジェクトを与えます。
                  これにより内容は動的に変化します。
                  また後述する "key" を各コンポーネントに提供する必要があります。
                -->
                <todo-item v-for="item in groceryList" v-bind:todo="item"></todo-item>
            </ol>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>