<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    

     <?php $__env->slot('header'); ?> 
        <h2 class="font-bold text-xl text-center text-gray-800 leading-tight">Jurnal Harianmu</h2>
        <hr class="my-4">
        <div class="pt-3">
            <a class="btn text-white shadow"
                style="border-radius: 25px; padding: 10px 25px 10px 25px; background-image: linear-gradient(to bottom right, #62D69F, #41A7A5);"
                href="/notes/create" class="text-sm text-gray-700 underline">Tambah Data</a>
        </div>
        <div class="py-1">
            <!-- TODO MULAI LOOPING -->
            <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="max-w-md py-4 px-8 shadow-lg rounded-lg my-5"
                    style="background-image: linear-gradient(to bottom right, #62D69F, #41A7A5);">
                    <div>
                        <h3 class="text-white text-2xl font-semibold"><?php echo e($note->title); ?></h3>
                        <h6 class="text-gray-100 text-sm"><?php echo e($note->updated_at); ?></h5>
                            <h4 class="mt-2 text-white font-semibold">Mood: <?php if($note->mood_id == 1): ?>
                                    Sedih
                                <?php endif; ?>
                                <?php if($note->mood_id == 2): ?>
                                    Biasa aja
                                <?php endif; ?>
                                <?php if($note->mood_id == 3): ?>
                                    Senang
                                <?php endif; ?>
                            </h4>
                            <h4 class="mt-2 text-white font-semibold"><?php echo e($doas[$note->doa_id - 1]['judul']); ?></h4>
                    </div>
                    <div class="flex justify-center mt-3 space-x-3">
                        <a href="/notes/<?php echo e($note->note_id); ?>" class="btn text-white font-bold px-2 py-1 text-sm 
                                        uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400"
                            style="background-color: #41A7A5">Detail</a>

                        <a href="/notes/<?php echo e($note->note_id); ?>/edit"
                            class="btn bg-green-400 text-white font-bold px-2 py-1 text-sm uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400">
                            Edit</a>
                        <form action="/notes/<?php echo e($note->note_id); ?>" method="post" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit"
                                class="btn bg-red-400 text-white font-bold px-2 py-1 text-sm uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400">
                                Delete</button>
                        </form>

                    </div>
                    <div class="flex justify-end mt-2">

                        <h2 class="text-gray-200 text-xl font-semibold"><?php echo e($loop->iteration); ?></h2>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- NOTE Card -->



        <!-- ini apa???? yg dibawah sini? -->

        



        <div class="bg-white rounded-lg shadow-lg">
            <div class="block overflow-x-auto mx-6 mb-8">

            </div>
        </div>
     <?php $__env->endSlot(); ?>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\nabil\Videos\MOODO-WEB-BISMILLAH\MOODO-WEB-BISMILLAH\resources\views/note/index.blade.php ENDPATH**/ ?>