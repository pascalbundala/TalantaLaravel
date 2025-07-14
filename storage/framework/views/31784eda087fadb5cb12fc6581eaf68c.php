<h3>New Contact Message</h3>
<p><strong>Name:</strong> <?php echo e($data['names']); ?></p>
<p><strong>Email:</strong> <?php echo e($data['email']); ?></p>
<p><strong>Phone Number:</strong> <?php echo e($data['phone']); ?></p>
<p><strong>Company:</strong> <?php echo e($data['company']); ?></p>
<p><strong>Project:</strong> <?php echo e($data['project']); ?></p>
<p><strong>Additional:</strong> <?php echo e($data['additional']); ?></p>

<?php if(!empty($data['services'])): ?>
<p><strong>Interested in:</strong></p>
<ul>
    <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($service); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>
<?php /**PATH /home/p/Desktop/PROJECT/Talanta/TalantaWebsite/resources/views/emails/workwithus.blade.php ENDPATH**/ ?>