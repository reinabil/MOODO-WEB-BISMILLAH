<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Profile')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php if(Laravel\Fortify\Features::canUpdateProfileInformation()): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-profile-information-form')->html();
} elseif ($_instance->childHasBeenRendered('KVFCrxy')) {
    $componentId = $_instance->getRenderedChildComponentId('KVFCrxy');
    $componentTag = $_instance->getRenderedChildComponentTagName('KVFCrxy');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('KVFCrxy');
} else {
    $response = \Livewire\Livewire::mount('profile.update-profile-information-form');
    $html = $response->html();
    $_instance->logRenderedChild('KVFCrxy', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-border','data' => []]); ?>
<?php $component->withName('jet-section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords())): ?>
                <div class="mt-10 sm:mt-0">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-password-form')->html();
} elseif ($_instance->childHasBeenRendered('nAYKH70')) {
    $componentId = $_instance->getRenderedChildComponentId('nAYKH70');
    $componentTag = $_instance->getRenderedChildComponentTagName('nAYKH70');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nAYKH70');
} else {
    $response = \Livewire\Livewire::mount('profile.update-password-form');
    $html = $response->html();
    $_instance->logRenderedChild('nAYKH70', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-border','data' => []]); ?>
<?php $component->withName('jet-section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php endif; ?>

            <div class="mt-10 sm:mt-0">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form')->html();
} elseif ($_instance->childHasBeenRendered('Jkg79hS')) {
    $componentId = $_instance->getRenderedChildComponentId('Jkg79hS');
    $componentTag = $_instance->getRenderedChildComponentTagName('Jkg79hS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Jkg79hS');
} else {
    $response = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form');
    $html = $response->html();
    $_instance->logRenderedChild('Jkg79hS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>

            <?php if(Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures()): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-border','data' => []]); ?>
<?php $component->withName('jet-section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                <div class="mt-10 sm:mt-0">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.delete-user-form')->html();
} elseif ($_instance->childHasBeenRendered('KfwgntC')) {
    $componentId = $_instance->getRenderedChildComponentId('KfwgntC');
    $componentTag = $_instance->getRenderedChildComponentTagName('KfwgntC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('KfwgntC');
} else {
    $response = \Livewire\Livewire::mount('profile.delete-user-form');
    $html = $response->html();
    $_instance->logRenderedChild('KfwgntC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            <?php endif; ?>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\nabil\Videos\MOODO-WEB-BISMILLAH\MOODO-WEB-BISMILLAH\resources\views/profile/show.blade.php ENDPATH**/ ?>