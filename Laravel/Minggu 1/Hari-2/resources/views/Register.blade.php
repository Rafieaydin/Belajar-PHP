<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="post">
    {{-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"> --}}
    @csrf
    <p>First name:</p>
    <input type="text" name="nama_awal">
    <p>Last name:</p>
    <input type="text" name="nama_akhir">
    <p>Gender:</p>
    <input type="radio"> Male
    <input type="radio"> Female
    <input type="radio"> Other
    <p>Nationality:</p>
    <select name="" id="">
        <option value="">Indonesian</option>
         <option value="">Indonesian</option>
    </select>
    <p>Languange Spoken:</p>
    <input type="checkbox"> Bahasa Indonesia
    <input type="checkbox"> English
    <input type="checkbox"> Other
    <p>Blm:</p>
    <textarea name="" id="" cols="30" rows="10"></textarea><br>
    <button type="submit">Sign Up</button>
    </form>
</body>
</html>
