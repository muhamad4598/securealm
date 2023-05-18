<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>all user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4" style="margin-top:30px">
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">change role</th>
                            <th scope="col">Last login</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->role); ?></td>
                                <?php if($user->role == 'user'): ?>
                                <td><a href="/admin/make-admin/<?php echo e($user->id); ?>">change role to admin</a></td>
                                    
                                <?php else: ?>
                                    <td><a href="/admin/make-user/<?php echo e($user->id); ?>">change role to user</a></td>
                                <?php endif; ?>
                                <td><?php echo e($user->last_login); ?></td>
                                <td><a href="/admin/delete-user/<?php echo e($user->id); ?>">delete user</a></td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\Users\nissrin ahmad\Desktop\laravel\securealm\resources\views/admin.blade.php ENDPATH**/ ?>