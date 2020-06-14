<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WebsiteContactFormRequest</title>
</head>
<body>
<b>Message Received from the website!</b><br>
<b>Name:</b>{{ $data['name'] }}<br>
<b>Email:</b>{{ $data['email'] }}<br>
<b>Message</b>{{ $data['message'] }}

</body>
</html>
