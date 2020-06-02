<?php $__env->startSection('titrePage'); ?>
    Liste des Films
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>

    <div class="col-4 m-2 font-weight-bold border pb-2">
        <div class="row border-bottom p-2">
            <div class="col-4 al">
                Films
            </div>
            <div class="col-4">
                <div class="select">
                    <select onchange="window.location.href = this.value">
                        <option value="<?php echo e(route('films.index')); ?>" <?php if (! ($laCategorie)): ?> selected <?php endif; ?>>Toutes catégories</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e(route('films.categorie', $categorie->libelle)); ?>" <?php echo e($laCategorie == $categorie->libelle ? 'selected' : ''); ?>><?php echo e($categorie->libelle); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <a class="btn btn-primary" href="<?php echo e(route('films.create')); ?>">Créer un film</a>
            </div>
        </div>
        <div class="col-12 pt-2">
            Titre
        </div>
            <?php $__currentLoopData = $lesFilms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <hr/>
                <div class="row">
                    <div class="col-4">
                        <?php echo e($film->titre); ?>

                    </div>
                    <div class="col-2">
                        <a class="btn btn-success" href="<?php echo e(route('films.show', $film->id)); ?>">Voir</a>
                    </div>
                    <div class="col-3">
                        <a class="btn btn-warning" href="<?php echo e(route('films.edit', $film->id)); ?>">Modifier</a>
                    </div>
                    <div class="col-3">
                        <form action="<?php echo e(route('films.destroy', $film->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Exam_TP\resources\views/listeFilms.blade.php ENDPATH**/ ?>