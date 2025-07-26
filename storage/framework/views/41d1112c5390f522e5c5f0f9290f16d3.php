<?php $__env->startSection('content'); ?>
   <div class="header-title">
    <h1>Create Blog</h1>
    <a href="<?php echo e(route('blogsdata.index')); ?>">back</a>
</div>
    <form action="<?php echo e(route('blogsdata.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="title">Blog title</label>
            <input type="text"  name="title"  required>
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" id="subtitle"  name="subtitle"  required>
        </div>
        <div class="form-group">
            <label for="author">Author Name</label>
            <input type="text" id="author"  name="author_name"  required>
        </div>
        <div class="form-group">
            <label for="date">Date of Publication</label>
            <input type="date" id="date"  name="publication_date"  required>
        </div>

        <div class="form-group">
            <label for="preview">Preview Text:</label>
            <textarea rows="5" cols="40"  id="preview" name="preview_text"></textarea>
        </div>

        <h3>Blog Content</h3>
        <div id="paragraph-wrapper"></div>
        <button type="button" class="add" onclick="addParagraph()">Add Content</button><br><br>

        <div class="form-group">
            <label for="tags">Tags</label>
            <select name="tags" id="tags">
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
        </div>

        <div class="form-group">
            <label for="">Large Image</label>
            <input type="file"  name="large_image" >
        </div>

        <div class="form-group">
            <label for="">Featured Image</label>
            <input type="file"  name="feature_image[]" multiple >
        </div>

        <button type="submit" class="btn-save">Submit</button>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admintemplate', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/p/Desktop/PROJECT/Talanta/TalantaWebsite/resources/views/admin/blog/create.blade.php ENDPATH**/ ?>