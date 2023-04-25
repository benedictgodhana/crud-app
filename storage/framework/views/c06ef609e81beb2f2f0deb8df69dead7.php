<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
    <h2>Edit Student</h2>
    <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
    <form action="<?php echo e(url('update-student')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
        <div class="md-3">
            <label class="form-lebel">Name</label>
            <input type="text" style="border: 2px solid black;" class="form-control" name="name" placeholder="Enter name" value="<?php echo e($data->name); ?>">
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
            <input type="text"  style="border: 2px solid black;" class="form-control" name="email" placeholder="Enter email" value="<?php echo e($data->email); ?>">
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
            <input type="text" style="border: 2px solid black;"  class="form-control" name="phone" placeholder="Enter phone number" value="<?php echo e($data->phone); ?>">
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
            <textarea type="text" style="border: 2px solid black;" class="form-control" name="address" placeholder="Enter Address" value="<?php echo e($data->address); ?>"></textarea>
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
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="<?php echo e(url('student-list')); ?>" class="btn btn-danger">Back</a>
    </form>
        </div>
    </div>
</div>
</body>
</html><?php /**PATH /home/ben/Desktop/project/CRUD/resources/views/edit-student.blade.php ENDPATH**/ ?>