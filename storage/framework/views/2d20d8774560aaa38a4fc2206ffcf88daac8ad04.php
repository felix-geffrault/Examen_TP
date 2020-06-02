<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <?php echo Html::style('lib/bootstrap/bootstrap.css'); ?>

    <title><?php echo $__env->yieldContent('titrePage'); ?></title>
</head>
<body>

<?php if(session()->has('info')): ?>
    <div class="card text-white bg-success m-3">
        <div class="card-body">
            <p class="card-text"><?php echo e(session('info')); ?></p>
        </div>
    </div>
<?php endif; ?>

<?php echo $__env->yieldContent('contenu'); ?>
<?php echo Html::script('lib/jquery/jquery-3.5.1.min.js'); ?>

<?php echo Html::script('lib/js/bootstrap.bundle.js'); ?>

<?php echo Html::script('lib/js/bootstrap.js/bootstrap.js'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Exam_TP\resources\views/template.blade.php ENDPATH**/ ?>