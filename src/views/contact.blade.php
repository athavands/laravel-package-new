<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact us</h1>
    <form action="{{ route('contact') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="your name please">
        <input type="email" name="email" placeholder="emil">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
