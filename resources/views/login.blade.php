<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
        {{ csrf_field() }}

        <div class="errors">{{ $errors->first('auth') }}</div>
        <div>
            <label for=""></label>
            <input type="text" name="email">
        </div>

        <div>
            <label for=""></label>
            <input type="password" name="password" id="">
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>