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
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <div style="margin-right:10px;float:right">
                <a href="<?php echo e(url('add-student')); ?>" class="btn btn-success">
                    <ion-icon name="person-add-outline"></ion-icon>
                    Add Student
                </a>
            </div>

            <div style="margin-right:100px;float:right;">
                <form action="<?php echo e(route('search')); ?>" method="GET" class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search by name" aria-label="Search" name="query">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
            <form action="<?php echo e(route('Student.filter')); ?>" method="GET" class="d-flex">
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
                        <?php
                    
            $i=($data->currentPage() - 1) * $data->perPage() + 1;
        
                        ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($stud->name); ?></td>
                                <td><?php echo e($stud->email); ?></td>
                                <td><?php echo e($stud->phone); ?></td>
                                <td><?php echo e($stud->address); ?></td>
                                <td>
                                    <a href="<?php echo e(url('edit-student/'.$stud->id)); ?>" class="btn btn-success"><ion-icon name="open-outline"></ion-icon>Edit</a> |  
                                    <a href="<?php echo e(url('delete-student/'.$stud->id)); ?>" class="btn btn-success"><ion-icon name="trash-outline"></ion-icon>Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($data->links('pagination::bootstrap-5')); ?>

            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html><?php /**PATH /home/ben/Desktop/project/CRUD/resources/views/student-list.blade.php ENDPATH**/ ?>