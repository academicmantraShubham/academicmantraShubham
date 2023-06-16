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
        Name: {{ $detail['name'] ?? '' }}
    </div>
    <div>
        Email: {{ $detail['email'] ?? '' }}
    </div>
    <div>
        Service: {{ $detail['service'] ?? '' }}
    </div>
    <div>
        Deadline: {{ $detail['deadline'] ?? '' }}
    </div>
    <div>
        Topic: {{ $detail['topic'] ?? ''  }}
    </div>
    <div>
        Word Count: {{ $detail['word_count'] ?? '' }}
    </div>
    <div>
        Message: {{ $detail['message'] ?? '' }}
    </div>
</body>
</html>