<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top:20px">
    <div class="row">
        <div class="col-md-12">
            <h2>Student List</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div style="margin-right:10px;float:right">
                <a href="{{url('add-student')}}" class="btn btn-success">
                    <ion-icon name="person-add-outline"></ion-icon>
                    Add Student
                </a>
            </div>

            <div style="margin-right:100px;float:right;">
                <form action="{{route('search')}}" method="GET" class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search by name" aria-label="Search" name="query">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
            <form action="{{route('Student.filter')}}" method="GET" class="d-flex">
            <div style="margin-right:100px;float:right;">
        <input type="text" class="form-control me-2" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group" style="margin-left: 10px; margin-top: 0px;">
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
    </div>
    <button type="submit" class="btn btn-success" style="margin-left: 20px; height: 35px; padding: 0px 15px; margin-top: 0px; width: 80px;">Filter</button>
</form>


                <table class="table" style="border-collapse: collapse; border: 4px">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                    
            $i=($data->currentPage() - 1) * $data->perPage() + 1;
        
                        @endphp
                        @foreach ($data as $stud)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$stud->name}}</td>
                                <td>{{$stud->email}}</td>
                                <td>{{$stud->phone}}</td>
                                <td>{{$stud->address}}</td>
                                <td>
                                    <a href="{{url('edit-student/'.$stud->id)}}" class="btn btn-success"><ion-icon name="open-outline"></ion-icon>Edit</a> |  
                                    <a href="{{url('delete-student/'.$stud->id)}}" class="btn btn-success"><ion-icon name="trash-outline"></ion-icon>Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>