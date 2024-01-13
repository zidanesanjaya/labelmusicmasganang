<!DOCTYPE html>
<html>
<head>
    <title>Mail Direct GNG Music</title>
</head>
<body>
    <h3>Anda Mendapatkan Email Baru Dari : </h3>
    <p>Nama : {{$mailData['full_name']}}</p>
    <p>email : {{$mailData['email']}}</p>
    <p>phone : {{$mailData['phone']}}</p>
    <br><br>
    <p>{{ $mailData['body'] }}</p>
     
    <p>Thank you</p>
</body>
</html>