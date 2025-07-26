<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-Talantatrust</title>
  <link rel="stylesheet" href="<?php echo e(asset('admin/admintemplate.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('admin/create.css')); ?>">
  <link rel="icon" href="<?php echo e(asset('images/Talanta Trust official logo-11.png')); ?>" type="image/x-icon">

    <!-- common links to everypage -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-...your-integrity-code..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>

   <div class="sidebar">
      <div class="logo"><img src="<?php echo e(asset('images/Talanta Trust official logo-01.png')); ?>" alt="" srcset=""></div>
        <ul>
            <li class="<?php echo e(request()->is('dashboard') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
            </li>

            <li class="<?php echo e(request()->is('blogs*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('blogsdata.index')); ?>">Blogs</a>
            </li>
            <li class="<?php echo e(request()->is('settings') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('settings.index')); ?>">Settings</a>
            </li>
        </ul>

   </div>

    <div class="main-content">
        <div class="navbar">
                <p> <i class="fa-solid fa-user" style="margin-right:10px"></i>  <?php echo e(auth()->user()->email); ?></p>
                <form method="POST" action="<?php echo e(route('logout')); ?>" class="logout-form">
                    <?php echo csrf_field(); ?>
                    <button type="submit"> <i class="fa-solid fa-power-off" style="color:red"></i> Logout</button>
                </form>
        </div>
        <div class="main">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <script>
    let maxParagraphs = 6;
    let paragraphCount = 0;

    function addParagraph() {
        if (paragraphCount >= maxParagraphs) {
            alert("You can only add up to 6 paragraphs.");
            return;
        }

        const container = document.createElement('div');
        container.classList.add('paragraph');

        container.innerHTML = `
            <div class="p-action">
            <h1>Paragraph ${paragraphCount + 1}</h1>
            <button class="remove-button" type="button" onclick="removeParagraph(this)"><i class="fa-solid fa-trash"></i></button>
            </div>

            <div class="inside">
                <label>Title</label>
                <input type="text" name="paragraphs[${paragraphCount}][title]" required>
                <label>Content</label>
                <textarea name="paragraphs[${paragraphCount}][content]" rows="10" required></textarea>
                <br>
            </div>
        `;

        document.getElementById('paragraph-wrapper').appendChild(container);
        paragraphCount++;
    }

    function removeParagraph(button) {
        const paragraphDiv = button.closest('.paragraph');
        paragraphDiv.remove();
        paragraphCount--;

        // Optional: Re-number remaining paragraphs and update input names
        const allParagraphs = document.querySelectorAll('#paragraph-wrapper .paragraph');
        allParagraphs.forEach((para, index) => {
            para.querySelector('h1').textContent = `Paragraph ${index + 1}`;
            para.querySelector('input').setAttribute('name', `paragraphs[${index}][title]`);
            para.querySelector('textarea').setAttribute('name', `paragraphs[${index}][content]`);
        });
    }
</script>


</body>
</html>
<?php /**PATH /home/p/Desktop/PROJECT/Talanta/TalantaWebsite/resources/views/admin/admintemplate.blade.php ENDPATH**/ ?>