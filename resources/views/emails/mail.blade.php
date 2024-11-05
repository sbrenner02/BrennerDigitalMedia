<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WebsiteContactFormRequest</title>
</head>
<body>
<b>Message Received from BDM Website!</b><br>
<b>Name:</b>{{ $data['name'] }}<br>
<b>Email:</b>{{ $data['email'] }}<br>
<b>Message</b>{!! nl2br(e($data['message']))!!}}

</body>
</html>
