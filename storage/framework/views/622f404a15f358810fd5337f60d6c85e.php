<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery-TalantTrust</title>
    <link rel="icon" href="<?php echo e(asset('images/Talanta Trust official logo-11.png')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('css/gallery.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/nav.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/nav-constant.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/links-to-pages.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/copyright.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('css/nav-constant.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-...your-integrity-code..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="<?php echo e(asset('js/script.js')); ?>" defer></script>
</head>
<body>

    <?php echo $__env->make('header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <section class="container">

        <div class="title">
            <h1>Gallery</h1>
            <div class="gallery_links">
                <div class="link_img">
                    <a href="#video-holder">originals</a>
                    <img src="<?php echo e(asset('images/svg/talanta-trust-vector-01.svg')); ?>" alt="">
                </div>

                <div class="link_img">
                    <a href="#image-holder">eyes</a>
                   <img src="<?php echo e(asset('images/svg/talanta-trust-vector-01.svg')); ?>" alt="">
                </div>
            </div>
        </div>

        <div class="content" id="video-holder">
            <div class="small-title"><h2>Talanta Trust <span>originals</span></h2></div>
            <div class="media content-videos">
                <div class="grid-item images image-wrapper">
                    <a href="https://youtu.be/qcGEhwapFSA" target="_blank">
                       <img  src="<?php echo e(asset('images/VideoThumbnail/Talanta-Trust-Videos1.webp')); ?>" >
                    </a>
                </div>

                <div class="grid-item images image-wrapper">
                    <a href="https://youtu.be/XlfFeom5uYI?si=pTFPrQogp8iJU3cG" target="_blank">
                       <img  src="<?php echo e(asset('images/VideoThumbnail/Talanta-Trust-Videos2.webp')); ?>" >
                    </a>
                </div>
                <div class="grid-item images image-wrapper">
                    <a href="https://youtu.be/QzA3Xcskw6U?si=MH57prf8zHndfAYX" target="_blank">
                       <img  src="<?php echo e(asset('images/VideoThumbnail/Talanta-Trust-Videos3.webp')); ?>">
                    </a>
                </div>
                <div class="grid-item images image-wrapper">
                    <a href="https://youtu.be/fxwXTG-Z1FE?si=VWKP8njZbS7w0Oa-" target="_blank">
                       <img  src="<?php echo e(asset('images/VideoThumbnail/Talanta-Trust-Videos4.webp')); ?>">
                    </a>
                </div>
                <div class="grid-item images image-wrapper">
                    <a href="https://youtu.be/C7DFStZ18wY?si=E9G_e-46VMhTgDEP" target="_blank">
                       <img  src="<?php echo e(asset('images/VideoThumbnail/Talanta-Trust-Videos5.webp')); ?>">
                    </a>
                </div>
                <div class="grid-item images image-wrapper">
                    <a href="https://youtu.be/vf0H8YZdyyY?si=Uy8wTR7Q2wMKGdiu" target="_blank">
                      <img  src="<?php echo e(asset('images/VideoThumbnail/Talanta-Trust-Videos6.webp')); ?>">
                    </a>
                </div>
            </div>
        </div>

        <div class="content" id="image-holder">
            <div class="small-title"><h2>Talanta Trust <span>Eyes</span></h2>
                <div class="filters">
                    <button class="filter-btn active-filter" data-category="all">All</button>
                    <button class="filter-btn" data-category="wildlife">Wildlife</button>
                    <button class="filter-btn" data-category="culture">Culture</button>
                     <button class="filter-btn" data-category="nature">Nature</button>
                    <button class="filter-btn" data-category="people">People</button>

               </div>
            </div>

            <div class="media content-images">
                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography46.webp')); ?>" data-category="people">
                </div>

                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography3.webp')); ?>" data-category="people">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography4.webp')); ?>"  data-category="people">
                </div>
                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography12.webp')); ?>" data-category="people">
                </div>

                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography5.webp')); ?>" data-category="wildlife">
                </div>
                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography6.webp')); ?>" data-category="wildlife">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography7.webp')); ?>" data-category="wildlife" >
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography8.webp')); ?>"  data-category="wildlife" >
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography9.webp')); ?>" data-category="wildlife">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography10.webp')); ?>"  data-category="wildlife">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography11.webp')); ?>" data-category="wildlife">
                </div>

                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography13.webp')); ?>" data-category="people">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography14.webp')); ?>"  data-category="people">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography15.webp')); ?>" data-category="people">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography16.webp')); ?>"  data-category="wildlife">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography17.webp')); ?>" data-category="wildlife">
                </div>
                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography18.webp')); ?>" data-category="wildlife">
                </div>

                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography19.webp')); ?>" data-category="people">
                </div>

                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography20.webp')); ?>" data-category="nature">
                </div>

                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography21.webp')); ?>" data-category="nature" >
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography22.webp')); ?>"  data-category="culture" >
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography23.webp')); ?>" data-category="culture">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography24.webp')); ?>"  data-category="nature">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography25.webp')); ?>" data-category="culture">
                </div>
                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography26.webp')); ?>" data-category="culture">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography27.webp')); ?>" data-category="wildlife" >
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography28.webp')); ?>"  data-category="culture" >
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography29.webp')); ?>" data-category="culture">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography30.webp')); ?>"  data-category="culture">
                </div>

                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography31.webp')); ?>" data-category="culture">
                </div>
                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography32.webp')); ?>" data-category="culture">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography33.webp')); ?>" data-category="culture">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography34.webp')); ?>"  data-category="wildlife">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography35.webp')); ?>" data-category="nature">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography36.webp')); ?>"  data-category="wildlife">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography37.webp')); ?>" data-category="people">
                </div>
                                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography38.webp')); ?>" data-category="people">
                </div>


                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography39.webp')); ?>" data-category="nature">
                </div>

                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography40.webp')); ?>" data-category="nature">
                </div>

                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography41.webp')); ?>"  data-category="wildlife">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography42.webp')); ?>" data-category="wildlife">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography43.webp')); ?>"  data-category="wildlife">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography44.webp')); ?>" data-category="wildlife">
                </div>
                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography45.webp')); ?>" data-category="wildlife">
                </div>

                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography46.webp')); ?>" data-category="people">
                </div>

                <div class="grid-item images image-wrapper">
                    <img src="<?php echo e(asset('images/GalleryWEBp/Talanta-Trust-Photography47.webp')); ?>" data-category="people">
                </div>
            </div>
            <button id="show-more-btn-images">Load More</button>
        </div>

    </section>

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
                    <a href="<?php echo e(route('work-with-us')); ?>">Connect with us</a>
                    <p>If your interested with our services,let find a way to get connected </p>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <script>
        const images = document.querySelectorAll('.images');
        const showMoreImagesBtn = document.getElementById('show-more-btn-images');
        showMoreImagesBtn.addEventListener('click', () => {
            images.forEach(element => {
               if(element.style.display !== 'block'){
                element.style.display ='block';
               }
            });
            showMoreImagesBtn.style.display = 'none';
        });
    </script>

    
    <script>
        const videos = document.querySelectorAll('.videos');
        const showMoreBtn = document.getElementById('show-more-btn');
        showMoreBtn.addEventListener('click', () => {
            videos.forEach(element => {
               if(element.style.display !== 'block'){
                element.style.display ='block';
               }
            });
            showMoreBtn.style.display = 'none';
        });
    </script>

    <script>
        const filterButtons = document.querySelectorAll('.filter-btn');
            const imagesfilter = document.querySelectorAll('.image-wrapper');

            filterButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                const selectedCategory = event.currentTarget.getAttribute('data-category');

                filterButtons.forEach(btn => btn.classList.remove('active-filter'));
                this.classList.add('active-filter');

                imagesfilter.forEach(image => {
                const img = image.querySelector('img');
                const imageCategory = img.getAttribute('data-category');
                if (selectedCategory === 'all' || selectedCategory === imageCategory) {
                    image.style.display = 'flex';
                } else {
                    image.style.display = 'none';
                }
                });
            });
            });

    </script>

</body>
</html>
<?php /**PATH /home/p/Desktop/PROJECT/Talanta/TalantaWebsite/resources/views/gallery.blade.php ENDPATH**/ ?>