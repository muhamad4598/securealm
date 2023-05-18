<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px"></div>
            <h4>Welcome to your dashboard</h4>
            <button><a href='/edit/<?php echo e($data->id); ?>'>Edit your profile</a></button>
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Sex</th>
                    <th>Blood type</th>
                    <th>BS</th>
                    <th>BA</th>
                    <th>MA</th>
                    <th>PHD</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo e($data->name); ?></td>
                        <td><?php echo e($data->email); ?></td>
                        <td><?php echo e($data->sex); ?></td>
                        <td><?php echo e($data->blood); ?></td>
                        <?php if(in_array('bs', $certificates)): ?>
                            <td><a href="/deleteBs/<?php echo e($data->id); ?>">delete</a></td>
                        <?php else: ?><td><a href="/addBs/<?php echo e($data->id); ?>">add</a></td>
                        <?php endif; ?>
                        <?php if(in_array('ma', $certificates)): ?>
                            <td><a href="/deleteMa/<?php echo e($data->id); ?>">delete</a></td>
                        <?php else: ?><td><a href="/addMa/<?php echo e($data->id); ?>">add</a></td>
                        <?php endif; ?>
                        <?php if(in_array('ms', $certificates)): ?>
                            <td><a href="/deleteMs/<?php echo e($data->id); ?>">delete</a></td>
                        <?php else: ?><td><a href="/addMs/<?php echo e($data->id); ?>">add</a></td>
                        <?php endif; ?>
                        <?php if(in_array('phd', $certificates)): ?>
                            <td><a href="/deletePhd/<?php echo e($data->id); ?>">delete</a></td>
                        <?php else: ?><td><a href="/addPhd/<?php echo e($data->id); ?>">add</a></td>
                        <?php endif; ?>



                        <td><a href="logout">log out</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\nissrin ahmad\Desktop\laravel\securelam\resources\views/dashboard.blade.php ENDPATH**/ ?>