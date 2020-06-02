<?php $__env->startSection('titrePage'); ?>
    Information sur le Film
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <div class="col-3 border m-3">
        <div class="row font-weight-bold border-bottom p-2">
            <div class="col-8">
                Titre : <?php echo e($film->titre); ?>

            </div>
            <div class="offset-2">
                <a class="btn btn-primary" href="<?php echo e(route('films.index')); ?>">Retour</a>
            </div>
        </div>
        <div class="m-3">
            <div class="row">
                Année de sortie : <?php echo e($film->anneeSortie); ?>

            </div>
            <div class="row">
                Categorie : <?php echo e($categorie); ?>

            </div>
            <hr/>
            <div class="row">
                <?php echo e($film->description); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Exam_TP\resources\views/afficherFilm.blade.php ENDPATH**/ ?>