<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>profile information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class='container'>
        <div class='row'>
            <div class="col-md-4 col-md-offset-4" style="margin-top:30px">
                <h2>Edit<h2>
                        <hr>
                        <div class='form-group'>
                            <form action="/editConfirmed" method="post">
                                <?php if(Session::has('SUCCESS')): ?>
                                    <div class="alert alert-success"><?php echo e(Session::get('SUCCESS')); ?></div>
                                <?php endif; ?>
                                <?php if(Session::has('FAILED')): ?>
                                    <div class="alert alert-danger"><?php echo e(Session::get('FAILED')); ?></div>
                                <?php endif; ?>
                                <?php echo csrf_field(); ?>
                                <div class='form-group'>
                                    <label for='name'>Name</label>
                                    <input type='text' class='form-control' value='<?php echo e($user[0]->name); ?>'
                                        name='name'>
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <?php echo e($message); ?>

                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </span>
                                </div>
                                <div class='form-group'>
                                    <label for='blood'>Blood type</label>
                                    <input type='text' class='form-control' value='<?php echo e($user[0]->blood); ?>'
                                        name='blood'>
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['blood'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <?php echo e($message); ?>

                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </span>

                                </div>
                                <div class='form-group'>
                                    <label for='sex'>sex</label>
                                    <select type='text' class='form-control' 
                                        name='sex'>
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                    </select>
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['sex'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <?php echo e($message); ?>

                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </span>

                                </div>
                                <div class='form-group'>
                                    <label for='email'>Email</label>
                                    <input type='text' class='form-control' value='<?php echo e($user[0]->email); ?>'
                                        name='email'>
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <?php echo e($message); ?>

                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </span>

                                </div>
                                <input type="hidden" name="id" value='<?php echo e($user[0]->id); ?>' />
               
                                
                                <button class=' btn btn-block btn-primary' style="margin-top: 20px">Confirm</button>
                                
                            </form>
                           
                        </div>
            </div>
        </div>
    </div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>
<?php /**PATH C:\Users\nissrin ahmad\Desktop\laravel\securelam\resources\views/editProfile.blade.php ENDPATH**/ ?>