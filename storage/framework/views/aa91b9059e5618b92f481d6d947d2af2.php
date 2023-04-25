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
    
    <form action="<?php echo e(url('save-student')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="md-3">
            <label class="form-lebel">Name</label>
            <input type="text" style="border: 2px solid black;" class="form-control" name="name" placeholder="Enter name" value="<?php echo e(old('name')); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-success" role="alert">
        <?php echo e($message); ?>

    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
        </div>
        <div class="md-3">
            <label class="form-lebel">Email</label>
            <input type="text" style="border: 2px solid black;" class="form-control" name="email" placeholder="Enter email" value="<?php echo e(old('email')); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-success" role="alert">
        <?php echo e($message); ?>

    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
        <div class="md-3">
            <label class="form-lebel">Phone</label>
            <input type="text" style="border: 2px solid black;" class="form-control" name="phone" placeholder="Enter phone number" value="<?php echo e(old('phone')); ?>">
            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-success" role="alert">
        <?php echo e($message); ?>

    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="md-3">
            <label class="form-lebel">Address</label>
            <textarea type="text" style="border: 2px solid black;" class="form-control" name="address" placeholder="Enter Address" value="<?php echo e(old('address')); ?>"></textarea>
            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-success" role="alert">
        <?php echo e($message); ?>

    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div><br>
        <button type="submit" class="btn btn-success"><ion-icon name="save-outline"></ion-icon>Save</button>
        <a href="<?php echo e(url('student-list')); ?>" class="btn btn-danger"><ion-icon name="arrow-back-outline"></ion-icon>Back</a>
    </form>
        </div>
    </div>
</div>
</body>
</html><?php /**PATH /home/ben/Desktop/project/CRUD/resources/views/add-student.blade.php ENDPATH**/ ?>