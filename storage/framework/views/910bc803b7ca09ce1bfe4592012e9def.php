<?php $__env->startSection('content'); ?>
    <div class="header-title">
        <h1>Update Blog</h1>
        <a href="<?php echo e(route('blogsdata.index')); ?>">back</a>
    </div>
    <form action="<?php echo e(route('blogsdata.update',$blogs->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="title">Blog title</label>
            <input type="text"  name="title"  required value="<?php echo e($blogs->title); ?>">
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" id="subtitle"  name="subtitle" value="<?php echo e($blogs->subtitle); ?>"  required>
        </div>
        <div class="form-group">
            <label for="author">Author Name</label>
            <input type="text" id="author"  name="author_name"  required value="<?php echo e($blogs->author_name); ?>">
        </div>
        <div class="form-group">
            <label for="date">Date of Publication</label>
            <input type="date" id="date"  name="publication_date"  required value="<?php echo e($blogs->publication_date); ?>">
        </div>

        <div class="form-group">
            <label for="preview">Preview Text:</label>
            <textarea rows="5" cols="40"  id="preview" name="preview_text"><?php echo e($blogs->preview_text); ?></textarea>
        </div>

        <h3>Blog Content</h3>

        

        <?php $__currentLoopData = $blogs->paragraphs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $paragraph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="paragraph">
                <div class="p-action">
                    <h1>Paragraph <?php echo e($loop->iteration); ?></h1>
                    <button class="remove-button" type="button" onclick="removeParagraph(this)"><i class="fa-solid fa-trash"></i></button>
                </div>

                <div class="inside">
                        <input type="hidden" name="paragraphs[<?php echo e($index); ?>][id]" value="<?php echo e($paragraph->id); ?>">
                        <label>Title</label>
                        <input type="text" name="paragraphs[<?php echo e($index); ?>][title]" value="<?php echo e(old("paragraphs.$index.title", $paragraph->title)); ?>" required>
                        <label>Content</label>
                        <textarea name="paragraphs[<?php echo e($index); ?>][content]" rows="10" required><?php echo e(old("paragraphs.$index.content", $paragraph->content)); ?></textarea>
                </div>


            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <div class="form-group">
            <label for="tags">Tags</label>
            <select name="tags" id="tags">
                <option style="font-weight: 900;color:black" selected value="<?php echo e($blogs->tags); ?>"><?php echo e($blogs->tags); ?></option>
                <option value="Our stories">Our stories</option>
                <option value="News & updates">News & updates</option>
                <option value="Community voices">Community voices</option>
                <option value="Project highlights">Project highlights</option>
            </select>
        </div>

        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea rows="5" cols="40" id="comment" name="comments"></textarea>
        </div>

        <div class="form-group">
            <label for="">Cover Image</label>
            <input type="file"  name="cover_image" >
            <img src="<?php echo e(asset(''.$blogs->cover_image)); ?>" alt="">
        </div>

        <div class="form-group">
            <label for="">Large Image</label>
            <input type="file"  name="large_image" >
            <img src="<?php echo e(asset(''.$blogs->large_image)); ?>" alt="">
        </div>

        <div class="form-group">
            <label for="">Featured Image</label>
            <input type="file"  name="feature_image[]" multiple >
            <?php $__currentLoopData = $blogs->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(asset(''.$image->image_path)); ?>" alt="">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <button type="submit" class="btn-save">Submit</button>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admintemplate', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/p/Desktop/PROJECT/Talanta/TalantaWebsite/resources/views/admin/blog/edit.blade.php ENDPATH**/ ?>