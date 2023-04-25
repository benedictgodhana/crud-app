<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
<div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
    <h2>Add Student</h2>
    
    <form action="{{url('save-student')}}" method="post">
        @csrf
        <div class="md-3">
            <label class="form-lebel">Name</label>
            <input type="text" style="border: 2px solid black;" class="form-control" name="name" placeholder="Enter name" value="{{old('name')}}">
            @error('name')
            <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @enderror
            
        </div>
        <div class="md-3">
            <label class="form-lebel">Email</label>
            <input type="text" style="border: 2px solid black;" class="form-control" name="email" placeholder="Enter email" value="{{old('email')}}">
            @error('email')
            <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @enderror
            
        <div class="md-3">
            <label class="form-lebel">Phone</label>
            <input type="text" style="border: 2px solid black;" class="form-control" name="phone" placeholder="Enter phone number" value="{{old('phone')}}">
            @error('phone')
            <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @enderror
        </div>
        <div class="md-3">
            <label class="form-lebel">Address</label>
            <textarea type="text" style="border: 2px solid black;" class="form-control" name="address" placeholder="Enter Address" value="{{old('address')}}"></textarea>
            @error('address')
            <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @enderror
        </div><br>
        <button type="submit" class="btn btn-success"><ion-icon name="save-outline"></ion-icon>Save</button>
        <a href="{{url('student-list')}}" class="btn btn-danger"><ion-icon name="arrow-back-outline"></ion-icon>Back</a>
    </form>
        </div>
    </div>
</div>
</body>
</html>