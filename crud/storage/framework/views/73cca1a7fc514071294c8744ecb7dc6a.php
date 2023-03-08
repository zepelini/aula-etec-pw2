<?php $__env->startSection('content'); ?>
    <article>   
        <h1>
            Produtos
            <a  class="btn btn-outline-primary" href='<?php echo e(route('produto.listar')); ?>'>
                Voltar para a listagem
            </a>
        </h1>
        <form action='<?php echo e(route('produto.salvar')); ?>' method="POST">
            <?php echo csrf_field(); ?>
            
            <div class="form-group">
                <label for='nome'>Nome</span>
                <input name='nome' id='nome' type='text' class="form-control mb-3" />
            </div>
            <div class="form-group">
                <label for='preco'>Preço</span>
                <input name='preco' id='preco' type='text' class="form-control mb-3" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            </div>
        </form>
    </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zeps/classes/pw3/crud/resources/views/produto/inserir.blade.php ENDPATH**/ ?>