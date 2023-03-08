<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aula Laravel</title>
    </head>
    <body>
        <h1>Produtos</h1>
        <a href='<?php echo e(route('produto.inserir')); ?>'>
            Inserir
        </a>
        <table>
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
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
        </table>
    </body>
</html>
<?php /**PATH /home/zeps/classes/pw3/crud/resources/views/produto/index.blade.php ENDPATH**/ ?>