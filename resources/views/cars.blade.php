<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Cars List</h1>

    <div class="card p-4 shadow">
        <ul class="list-group">
            @foreach($mycar as $car)
                <li class="list-group-item">{{ $car }}</li>
            @endforeach
        </ul>
    </div>

    <div class="mt-3 text-center">
        <a href="/" class="btn btn-primary">Back Home</a>
    </div>
</div>

</body>
</html>