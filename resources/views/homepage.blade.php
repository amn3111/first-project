<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
   <div class="container">
           <div class="card">
        <div class="card-body">
              <div class="row">
          <div class="col d-flex justify-content-center">
               <form action="{{ route('values') }}" method="post">
             @csrf
               <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
                </div>
               </div>

                 <div class="row mt-3">
                    <div class="col text-center">
                      <button type="submit" class="btn btn-success">ارسال </button>
                    </div>
                 </div>

            </form>
          </div>
       </div>
        </div>
      </div>
     </div>
</body>
</html>