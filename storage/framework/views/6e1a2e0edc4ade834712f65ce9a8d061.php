<?php $__env->startSection('content'); ?>
    <div class="header-title">
        <h1>List of Blog</h1>
        <a href="<?php echo e(route('blogsdata.create')); ?>"> create blog</a>
    </div>

    <div class="data">
        <h3>Total blog published: <span><?php echo e($total); ?></span></h3>
    </div>

    <table class="custom-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Author</th>
                <th>Date</th>
                <th>Tags</th>
                <th>Preview Text</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($blog->id); ?></td>
                    <td><?php echo e($blog->title); ?></td>
                    <td><?php echo e($blog->subtitle); ?></td>
                    <td><?php echo e($blog->author_name); ?></td>
                    <td><?php echo e($blog->publication_date); ?></td>
                    <td><?php echo e($blog->tags); ?></td>
                    <td><?php echo e($blog->preview_text); ?></td>
                    <td class="actions">
                        
                        <a href="<?php echo e(route('blogsdata.edit', $blog->id)); ?>">Edit</a>
                        <form action="<?php echo e(route('blogsdata.destroy', $blog->id)); ?>" method="POST" class="deleteform">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('Are you sure?')"> Delete</button>
                        </form>
                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="pagination">
        <?php echo e($blogs->links('pagination::default')); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admintemplate', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/p/Desktop/PROJECT/Talanta/TalantaWebsite/resources/views/admin/blog/index.blade.php ENDPATH**/ ?>