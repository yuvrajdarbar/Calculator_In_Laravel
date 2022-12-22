
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <title>Calculator</title>
</head>
<body>
   
    <h3 class="mt-3">Welcome to my Calculator</h3>
    @isset($result)
    <p class="mt-3">Your result is here: {{$result}}</p>
    @endisset
    <form action="" method="post">
        @csrf
        
        <div class="col-md-12">
            <label for="inputSubject"> Enter first number: </label> 
            <input type="text" name='num1' class="form-control mt-2" required placeholder="Please Enter first number">
        </div>
        <div class="col-md-12">
            <label for="inputSubject">Enter second number:</label>
             <input type="text" name='num2' class="form-control mt-2" required placeholder="Please Enter second number">
            </div>
            <div class="col-md-12">
                <label for="inputSubject">Select Operator: </label>
                <select name="operator" class="form-control mt-2" required>
                    <option>Select Operator</option>
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">*</option>
        <option value="4">/</option>
    </select>
            </div>
            <div class="col-md-8" style="margin-left: 40%">
    <input type="submit" value="submit" class="btn btn-primary mt-3 mb-3">
</div>
</form>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
</body>
</html>