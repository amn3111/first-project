<!DOCTYPE html>
<html>
<head>
    <title>Cars</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Cars List</h1>

    <div class="row">
        @foreach($mycar as $car)
            <div class="col-md-4">
                <div class="card mb-4 shadow">
                    <img src="{{ asset('images/' . $car['image']) }}" class="card-img-top" style="height:200px; object-fit:cover;">

                    <div class="card-body">
                        <h5 class="card-title">{{ $car['name'] }}</h5>
                        <p>Price: {{ $car['price'] }}</p>
                        <p>Brand: {{ $car['brand'] }}</p>
                        <p>Status: {{ $car['status'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center">
        <a href="/" class="btn btn-primary">Back Home</a>
    </div>
</div>

</body>
</html>