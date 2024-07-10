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
    @if ($data['service'])
        <div>

            Service: {{ $data['service'] ?? '' }}
        </div>
    @endif
    <div>
        Deadline: {{ $data['deadline'] ?? '' }}
    </div>
    <div>
        Topic: {{ $data['topic'] ?? '' }}
    </div>
    <div>
        Word Count: {{ $data['word_count'] ?? '' }}
    </div>
    @if ($data['message'])
        <div>
            Message: {{ $data['message'] ?? '' }}
        </div>
    @endif

</body>

</html>
