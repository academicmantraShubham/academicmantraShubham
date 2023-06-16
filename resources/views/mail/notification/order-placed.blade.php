<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Now</title>
</head>
<body>
    <div>
        Name: {{ $data['name'] ?? '' }}
    </div>
    <div>
        Email: {{ $data['email'] ?? '' }}
    </div>
    <div>
        Service: {{ $data['service'] ?? '' }}
    </div>
    <div>
        Deadline: {{ $data['deadline'] ?? '' }}
    </div>
    <div>
        Topic: {{ $data['topic'] ?? ''  }}
    </div>
    <div>
        Word Count: {{ $data['word_count'] ?? '' }}
    </div>
    <div>
        Message: {{ $data['message'] ?? '' }}
    </div>
</body>
</html>