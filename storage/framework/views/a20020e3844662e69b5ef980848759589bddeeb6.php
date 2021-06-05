<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Doa
        </h2>
        <table class="w-full text-left rounded-lg mt-10">
            <thead class="text-white" style="background-image: linear-gradient(to bottom right, #62D69F, #41A7A5);>
                <tr class=" text-gray-800 border border-b-0">
                <th class="px-4 py-3">No.</th>
                <th class="px-4 py-3">Judul</th>
                <th class="px-4 py-3"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $doas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                        <td class="px-4 py-4"><?php echo e($loop->iteration); ?></td>
                        <td class="px-4 py-4"><?php echo e($doa->judul); ?></td>
                        <td class="px-4 py-4">
                            <a href="/doas/<?php echo e($doa->doa_id); ?>" class="btn text-white font-bold px-2 py-1 text-sm 
                                uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400"
                                style="background-color: #41A7A5">Detail</a>
                        </td>


                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
     <?php $__env->endSlot(); ?>



    





 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\nabil\Videos\MOODO-WEB-BISMILLAH\MOODO-WEB-BISMILLAH\resources\views/doa/index.blade.php ENDPATH**/ ?>