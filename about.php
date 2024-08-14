<?php 

session_start();
    include_once ("admin/class/adminback.php");
    $obj = new adminback();

    $cata_info = $obj-> p_display_catagory();
    $cataDatas = array();
    while($data = mysqli_fetch_assoc($cata_info)){
        $cataDatas[]=$data;
    }

  







?>




<?php
include_once("includes/head.php");
?>

<body class="biolife-body">
    <!-- Preloader -->

    <?php
    include_once("includes/preloader.php");
    ?>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">

        <?php
        include_once("includes/header_top.php");
        ?>

        <?php
        include_once("includes/header_middle.php");
        ?>

        

    </header>
     <!--Hero Section-->
     <div class="hero-section hero-background">
        <h1 class="page-title">Organic Fruits</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index.php" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">About us</span></li>
            </ul>
        </nav>
    </div>

<!-- Main content -->
<div id="main-content" class="main-content">

<div class="welcome-us-block">
    <div class="container">
        <h4 class="title">Welcome to Biolife store!</h4>
        <div class="text-wraper">
            <p class="text-info">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,</p>
            <p class="qt-text">“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.”</p>
        </div>
    </div>
</div>

<div class="why-choose-us-block">
    <div class="container">
        <h4 class="box-title">Why Choose us</h4>
        <b class="subtitle">Natural food is taken from the world's most modern farms with strict safety cycles</b>
        <div class="showcase">
            <div class="sc-child sc-left-position">
                <ul class="sc-list">
                    <li>
                        <div class="sc-element color-01">
                            <span class="biolife-icon icon-fresh-drink"></span>
                            <div class="txt-content">
                                <span class="number">01</span>
                                <b class="title">Always Fresh</b>
                                <p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="sc-element color-02">
                            <span class="biolife-icon icon-healthy-about"></span>
                            <div class="txt-content">
                                <span class="number">02</span>
                                <b class="title">Overall Healthy</b>
                                <p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="sc-element color-03">
                            <span class="biolife-icon icon-green-safety"></span>
                            <div class="txt-content">
                                <span class="number">03</span>
                                <b class="title">Environmental Safety</b>
                                <p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="sc-child sc-center-position">
                <figure><img src="assets/images/about-us/abt.jpg" alt="" width="622" height="656"></figure>
            </div>
            <div class="sc-child sc-right-position">
                <ul class="sc-list">
                    <li>
                        <div class="sc-element color-04">
                            <span class="biolife-icon icon-capacity-about"></span>
                            <div class="txt-content">
                                <span class="number">04</span>
                                <b class="title">Antioxidant Capacity</b>
                                <p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="sc-element color-05">
                            <span class="biolife-icon icon-arteries-about"></span>
                            <div class="txt-content">
                                <span class="number">05</span>
                                <b class="title">Good For Arteries</b>
                                <p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="sc-element color-06">
                            <span class="biolife-icon icon-title"></span>
                            <div class="txt-content">
                                <span class="number">06</span>
                                <b class="title">Quality Standards</b>
                                <p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

</div>
            

    <!-- FOOTER -->

    <?php
    include_once("includes/footer.php");
    ?>

    <!--Footer For Mobile-->
    <?php
    include_once("includes/mobile_footer.php");
    ?>

    <?php
    include_once("includes/mobile_global.php")
    ?>


    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <?php
    include_once("includes/script.php")
    ?>
</body>

</html>