<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="<?php echo e(asset('admin/admintemplate.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('admin/create.css')); ?>">
  <style>
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      height: 60px;
      background-color: #2c3e50;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      color: white;
      z-index: 1000;
    }

    .navbar .logo {
      font-size: 20px;
      font-weight: bold;
    }

    .navbar .logout {
      text-decoration: none;
      color: white;
      background: #e74c3c;
      padding: 8px 12px;
      border-radius: 5px;
      font-size: 14px;
    }

    .sidebar {
      margin-top: 60px; /* Push sidebar below navbar */
    }

    .main {
      margin-top: 60px; /* Push main content below navbar */
    }
  </style>
</head>
<body>
  <div class="navbar">
    <div class="logo">🚀 AdminPanel</div>
    <a href="logout.html" class="logout">Logout</a>
  </div>

  <div class="main-content">
    <div class="sidebar">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <div class="main">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

  </div>

<script>
        let maxParagraphs = 5;
        let paragraphCount = 0;

        function addParagraph() {
            if (paragraphCount >= maxParagraphs) {
                alert("You can only add up to 5 paragraphs.");
                return;
            }

            const container = document.createElement('div');
            container.innerHTML = `<div class="paragraph">
                <h1>${paragraphCount+1}</h1>
                <div class="inside" >
                    <label>Title</label>
                    <input type="text" name="paragraphs[${paragraphCount}][title]" required>
                    <label>Content</label>
                    <textarea name="paragraphs[${paragraphCount}][content]" rows="10" required></textarea>
                </div>
                </div>
            `;
            document.getElementById('paragraph-wrapper').appendChild(container);
            paragraphCount++;
        }
</script>


</body>
</html>
<?php /**PATH /home/p/Desktop/PROJECT/Talanta/TalantaWebsite/resources/views/admin/admintemplate.blade.php ENDPATH**/ ?>