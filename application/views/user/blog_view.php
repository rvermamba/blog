<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/templatemo-xtra-blog.css" rel="stylesheet">

</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
                <h1 class="text-center">Blogs</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item active"><a href="index.html" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Blog Home
                    </a></li>
                    <li class="tm-nav-item"><a href="post.html" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Single Post
                    </a></li>
                    <li class="tm-nav-item"><a href="about.html" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        About Xtra
                    </a></li>
                    <li class="tm-nav-item"><a href="contact.html" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Contact Us
                    </a></li>
                </ul>
            </nav>
            <div class="tm-mb-65">
                <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
           
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>            
            <div class="row tm-row">
                <?php foreach($blogdetails as $details) { ?>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                                        <img  src="<?php echo IMAGE_URL.'uploads/'.$details->folder_name.'/'.$details->upload_doc; ?>" width="300px;" height="300px;" alt="Image" class="img-fluid">                            
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php echo $details->blog_title; ?></h2>
                    </a>                    
                    <p class="tm-pt-30">
                        <?php echo $details->blog_description; ?>
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Blog Date</span>
                        <span class="tm-color-primary"><?php echo date('d-M-y',strtotime($details->inserted_date)); ?></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>Blog Category</span>
                        <span><?php echo $details->category_name; ?></span>
                    </div>
                </article>
                <?php } ?>
            </div>
            <div class="row ">

                <div class="tm-paging-wrapper">
               
                <nav class="tm-paging-nav d-inline-block">
                     <?php echo $this->pagination->create_links(); ?>



                 </nav>


    
  
            </div>            
            </div>            
            <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                    Design: <a rel="nofollow" target="_parent"  class="tm-external-link">Rohit Verma</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright © 2022-23
                </div>
            </footer>
        </main>
    </div>
    <script src="<?php echo base_url(); ?>assets/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/templatemo-script.js"></script>
</body>
</html>