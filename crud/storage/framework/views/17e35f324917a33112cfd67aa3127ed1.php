<?php $__env->startSection('content'); ?>
    <article>
        <h1>
            Produtos
            <a class="btn btn-primary" href='<?php echo e(route('produto.inserir')); ?>'>
                Inserir produto
            </a>
        </h1>

        <table class="table">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Preço</th>
                  <th scope="col">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($produto->id); ?>

                            </td>
                            <td>
                                <?php echo e($produto->nome); ?>

                            </td>
                            <td>
                                <?php echo e($produto->preco); ?>

                            </td>
                            <td>
                                <a class="btn btn-success" href='<?php echo e(route('produto.alterar', ["id" => $produto->id])); ?>'>
                                    Editar
                                </a>
                                <a class="btn btn-danger" href='#'>
                                    Apagar
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
        </table>
    </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zeps/classes/pw3/crud/resources/views/produto/listar.blade.php ENDPATH**/ ?>