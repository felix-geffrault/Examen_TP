<?php $__env->startSection('titrePage'); ?>
    Ajout de Film
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <div class="col-3 border m-3">
        <?php echo Form::open(['url' => 'films']); ?>

        <div class="row font-weight-bold border-bottom p-2">
            <div class="col-8">
                <div class="form-group <?php echo $errors->has('titre') ? 'has-error' : ''; ?>">
                    <?php echo Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'Titre du Film']); ?>

                    <?php echo $errors->first('titre', '<small class="help-block text-danger">:message</small>'); ?>

                </div>
            </div>
            <div class="offset-2">
                <a class="btn btn-primary" href="<?php echo e(route('films.index')); ?>">Retour</a>
            </div>
        </div>
        <div class="m-3">
            <div class="row">
                <div class="form-group <?php echo $errors->has('anneeSortie') ? 'has-error' : ''; ?>">
                    <?php echo Form::label('Année de sortie : '); ?>

                    <?php echo Form::number('anneeSortie', 'Année'); ?>

                    <?php echo $errors->first('anneeSortie', '<small class="help-block text-danger">:message</small>'); ?>

                </div>
            </div>
            <div class="row">
                <div class="form-group <?php echo $errors->has('id_categorie') ? 'has-error' : ''; ?>">
                    <?php echo Form::label('Catégorie : '); ?>

                    <?php echo Form::select('id_categorie', $categorieArray,null, ['placeholder' => 'Choisissez une catégorie...']); ?>

                    <?php echo $errors->first('id_categorie', '<small class="help-block text-danger">:message</small>'); ?>

                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="form-group <?php echo $errors->has('description') ? 'has-error' : ''; ?>">
                    <?php echo Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Brève description']); ?>

                    <?php echo $errors->first('description', '<small class="help-block text-danger">:message</small>'); ?>

                </div>
            </div>
            <?php echo Form::submit('Valider', ['class' => 'btn btn-info pull-right']); ?>

            <?php echo Form::close(); ?>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Exam_TP\resources\views/ajouterFilm.blade.php ENDPATH**/ ?>