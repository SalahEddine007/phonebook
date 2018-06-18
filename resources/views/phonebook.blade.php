<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn VueJs</title>
    {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px}
.w3-row-padding, .w3-row-padding>.w3-half, .w3-row-padding>.w3-third, .w3-row-padding>.w3-twothird, .w3-row-padding>.w3-threequarter, .w3-row-padding>.w3-quarter, .w3-row-padding>.w3-col {
    padding: 0 8px;
}
.w3-white, .w3-hover-white:hover {
    color: #3cb371;
    background-color: #3cb371!important;
}
</style> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">

        <Myheader></Myheader>
        <br>
        <div class="container">
            <router-view></router-view>
        </div>

        <Myfooter></Myfooter>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>