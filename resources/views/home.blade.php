<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">        
        <title>Accountancy Cloud Technical Task</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>

    </head>
    <body>
        <h1>Accountancy Cloud Technical Task</h1>
        <div id="app">
            <Transaction-categories
                :columns="['name', 'amount', 'date' , 'categories', 'percentage_of_total']"
            ></Transaction-categories>
        </div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>