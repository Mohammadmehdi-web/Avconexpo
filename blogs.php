<!DOCTYPE html>
<html lang="zxx" style="overflow-x: hidden !important;">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author">
    <meta name="description">
    <!-- ======== Page title ============ -->
    <title>AVCONEXPO | Blogs</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/logo/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Splitting.css >>-->
    <link rel="stylesheet" href="assets/css/splitting.css">
    <!--<< Magnific popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< NiceSelect.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- Header Section Start -->
    <?php
        include('header.php');
   ?>

    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Blogs</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="https://auctest.rf.gd/avconexpo_test/">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-regular fa-slash-forward"></i>
                    </li>
                    <li>
                        Blogs
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Blog Section S T A R T -->
    <div class="blog-section fix">
        <div class="blog-container-wrapper style1 section-padding fix">
            <div class="container">
                <div class="blog-wrapper style1">
                    <?php
                            include('db_con.php'); 

                            $limit = 8; 
                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            $offset = ($page - 1) * $limit;

                            // Fetch blogs
                            $sql = "SELECT blogs.id, blogs.blog_heading AS heading, blogs.blog_url, blogs.created_at, 
                                    (SELECT image FROM blogs_images WHERE blogs_images.blog_id = blogs.id LIMIT 1) AS image 
                                    FROM blogs ORDER BY blogs.id DESC LIMIT $limit OFFSET $offset";
                            $result = $con->query($sql);
                            $total_result = $con->query("SELECT COUNT(*) AS total FROM blogs");
                            $total_blogs = $total_result->fetch_assoc()['total'];
                            $total_pages = ceil($total_blogs / $limit);
                           
                        ?>
                    <div class="row g-4">

                        <?php if ($result->num_rows > 0): ?>
                        <?php while ($blog = $result->fetch_assoc()): ?>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="thumb img-shine">
                                    <a href="blog/<?= htmlspecialchars($blog['blog_url']); ?>"> <img
                                            src="blog/blog_uploads/<?= htmlspecialchars($blog['image']); ?>"
                                            alt="thumb"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="date">
                                        <img src="assets/img/icon/dateIcon1_1.svg" alt="icon">
                                        <span><?= date("M d, Y", strtotime($blog['created_at'])); ?></span>
                                    </div>
                                    <div class="content">
                                        <h4><a
                                                href="blog/<?= htmlspecialchars($blog['blog_url']); ?>"><?= htmlspecialchars($blog['heading']); ?></a>
                                        </h4>
                                        <div class="link-meta"><a
                                                href="blog/<?= htmlspecialchars($blog['blog_url']); ?>">Read more <i
                                                    class="fa-regular fa-arrow-right"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php else: ?>
                        <div class="col-12 text-center">
                            <p>No blogs found.</p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <!-- Pagination -->
                    <?php if ($total_pages > 1): ?>
                    <div class="page-nav-wrap text-center mt-4">
                        <ul>
                            <li>
                                <a href="?page=<?= max(1, $page - 1); ?>">«</a>
                            </li>
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li>
                                <a class="<?= ($i == $page) ? 'active' : ''; ?>" href="?page=<?= $i; ?>"><?= $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            <li>
                                <a href="?page=<?= min($total_pages, $page + 1); ?>">»</a>
                            </li>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Section    S T A R T -->
    <?php
        include('footer.php');
   ?>

    <!--<< All JS Plugins >>-->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Tilt Js >>-->
    <script src="assets/js/tilt.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific popup Js >>-->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Splitting Animation Js >>-->
    <script src="assets/js/splitting.js"></script>
    <!--<< NIce Select Js >>-->
    <script src="assets/js/nice-select.min.js"></script>


    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
    <script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML =
                    "window.__CF$cv$params={r:'91772caad9bee16a',t:'MTc0MDQ4MTA0Ni4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/b0e4a89976ce/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }
        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c();
            else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
            else {
                var e = document.onreadystatechange || function() {};
                document.onreadystatechange = function(b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();
    </script>
</body>

</html>