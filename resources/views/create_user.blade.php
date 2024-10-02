<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{ route('user.store') }}" method="post">
    @csrf 
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>
<br>
    <label for="npm">NPM:</label>
    <input type="text" id="npm" name="npm" required>
<br>
    <label for="kelas">Kelas:</label>
    <input type="text" id="kelas" name="kelas" required>
<br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>