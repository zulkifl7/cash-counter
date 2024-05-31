<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/homePage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <title>Home</title>
</head>

<body>
    <div class="mainHeading">
        <div class="headingHolder">
            <h1>Welcome to Cash Counter!</h1>
            <p>Your go to cash register tool..!</p>
        </div>
    </div>
    <div class="mid">
        <div class="holder">
            <a href="{{ route('admin.login') }}" class="greenButton">admin</a>
            <a href="{{ route('user.login') }}" class="blueButton">user</a>
        </div>
    </div>

</body>

</html>
