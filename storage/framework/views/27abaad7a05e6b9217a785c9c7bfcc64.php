<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work-with-us-Talantatrust welcomes to work with us in digital transformation</title>
    <link rel="icon" href="<?php echo e(asset('images/Talanta Trust official logo-11.png')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('css/contact.css')); ?>">
    <!-- common links to everypage -->
    <link rel="stylesheet" href="<?php echo e(asset('css/nav.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('css/nav-constant.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/links-to-pages.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/copyright.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-...your-integrity-code..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="<?php echo e(asset('js/script.js')); ?>" defer></script>
    <style>
        .empty{
            width: 100%;
            height: 50vh;
            background-color: #fff;
            background-image: url('images/FooterImages/HeaderTalantaTrustTanzania7.webp');
            background-size: cover; /* or 'contain' */
            background-position: center;
            background-repeat: no-repeat;
            display: block;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .empty img{
            height: auto;
            width: 100%
            max-width:100%
            /* display: block;
            object-fit: contain;
            aspect-ratio:49/20; */
          }

          .links-to-pages .image-with-links .divs{
            height: 100%;
            position: relative;
            background-image: url('../images/FooterImages/work-with-us-Talanta-Trust13.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .links-to-pages .image-with-links .divs:nth-child(2){
            background-image: url('../images/FooterImages/work-with-us-Talanta-Trust8.webp');
        }
    </style>

</head>
<body>
   <?php echo $__env->make('header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php if(session('success')): ?>
        <div id="success-alert" style="padding: 15px; background-color: #90be41; color: #fff; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px; position: absolute;left:25%;top:0; z-index:100101001;width:50%;margin:0 auto">
            <?php echo e(session('success')); ?>

        </div>

        <script>
            setTimeout(function () {
                document.getElementById('success-alert').style.display = 'none';
            }, 5000); // hides after 5 seconds
        </script>
    <?php endif; ?>

      <div class="empty">
      </div>

     <div class="contents">
        <div class="titles">
            <h2>Create impact with us</h2>
        </div>
        <div class="content-form">
            <div class="form-holder">
                <div class="maelezo">
                    <h2>How you would like to be part of Talanta Trust?</h2>
                    <p>We are excited to collaborate with you! Please fill out the form below so we can tailor our services to meet your needs.</p>
                </div>
                <form class="forms" action="<?php echo e(route('workwithus.send')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-input">
                        <div class="divs">
                            <label for="name">Full Name*</label>
                            <input type="text" name="names" id="name">
                        </div>
                    </div>

                    <div class="form-input">
                        <div class="divs">
                            <label for="email">Email Address*</label>
                            <input type="text" name="email" id="email">
                        </div>
                    </div>

                    <div class="form-input">
                        <div class="divs">
                            <label for="phone">Phone Number*</label>
                            <input type="text" name="phone" id="phone">
                        </div>
                    </div>

                    <div class="form-input">
                        <div class="divs">
                            <label for="company">Company</label>
                            <input type="text" name="company" id="company">
                        </div>
                    </div>

                    <div class="form-multiple">
                        <h3 for="Service">Type of Service Needed</h3>
                        <div class="divs">
                            <div class="checkboxes">

                                <label class="checkbox-label">
                                    <input type="checkbox" id="contentCreation" name="services[]" value="contentCreation">
                                    <span class="checkmark"></span>
                                    <label for=""><strong>Content Creation</strong> (Copywriting, Content Strategy, SEO Optimization and more)</label>
                                </label>

                                <label class="checkbox-label">
                                    <input type="checkbox" id="Photography" name="services[]" value="Photography">
                                    <span class="checkmark"></span>
                                    <label for="vehicle1"><strong>Photography & Videography </strong>(Field activities, Interviews, Events and more)</label>
                                </label>

                                <label class="checkbox-label">
                                    <input type="checkbox" id="branding" name="services[]" value="branding">
                                    <span class="checkmark"></span>
                                    <label for="vehicle1"><strong>Branding and Graphic Design </strong>(Logo Design, Brand Guidelines, Visual Identity and more)</label>
                                </label>

                                <label class="checkbox-label">
                                    <input type="checkbox" id="Documentary" name="services[]" name="services[]" value="Documentary">
                                    <span class="checkmark"></span>
                                    <label for="vehicle1"><strong>Documentary & Storytelling</strong> (Creating Inspiring Documentaries and more)</label>
                                </label>

                                <label class="checkbox-label">
                                    <input type="checkbox" id="writing" name="services[]" value="writing">
                                    <span class="checkmark"></span>
                                    <label for="vehicle1"><strong>Writing Services</strong> (Grant Proposals, Annual Reports and more)</label>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" id="Printing" name="services[]" value="Printing">
                                    <span class="checkmark"></span>
                                    <label for="vehicle1"><strong>Printing Solutions</strong> (Brochures, Flyers, Banners, Reports and more)</label>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" id="social" name="services[]" value="social">
                                    <span class="checkmark"></span>
                                    <label for="vehicle1"><strong>Social Media Management</strong> (Content Creation, Engagement, Posting and more)</label>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" id="NGO" name="services[]" value="NGO">
                                    <span class="checkmark"></span>
                                    <label for="vehicle1"><strong>NGO Consultancy</strong> (Strategic Planning, Project Management, Capacity Building and more)</label>
                                </label>

                            </div>
                        </div>
                    </div>

                    <label class="big-message" for="message">Project Description</label>
                    <textarea id="textArea" name="project" rows="4" cols="50" placeholder="Write us your message....."></textarea>

                    <label class="big-message" for="message">Additional Information or Questions</label>
                    <textarea id="textArea" name="additional" rows="4" cols="50" placeholder="Write us your message....."></textarea>

                    <button type="submit"  id="submit">Submit</button>
                </form>

                

            </div>

        </div>
     </div>

    <section class="links-to-pages">
        <div class="image-with-links">
            <div class="divs">
                <div class="overlay">
                <a href="<?php echo e(route('about-us')); ?>">About us</a>
                <p>Connect with passion that moves us and makes us thrive</p>
            </div>
        </div>
            <div class="divs">
                <div class="overlay">
                    <a href="<?php echo e(route('gallery')); ?>">Gallery</a>
                    <p>If your interested with our services,let find a way to get connected</p>
                </div>
            </div>
        </div>
    </section>

<?php echo $__env->make('footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH /home/p/Desktop/PROJECT/Talanta/TalantaWebsite/resources/views/work-with-us.blade.php ENDPATH**/ ?>