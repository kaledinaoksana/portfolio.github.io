
<!DOCTYPE html>
<html lang="en">
<head>
    <title>KPMG project</title>
    <?php include 'website/blocks/head.php'; ?>
</head> 
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #19202e;">
            <div class="container-fluid" style="padding-left: 16%; padding-right: 16%;">
                <!-- Navbar content -->
                <?php include 'website/blocks/nav-bar-main.php'; ?>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="main-content-wrapper">
            <div class="container-fluid">
                <div class="resume-wrapper mx-auto rounded-5">
                    <div class="resume-header px-4 px-lg-5">
                        <div class="resume-profile-holder text-center">

                            <!-- Content of the portfolio -->
                            <?php include 'website/articles/kpmg_art.php'; ?>
                            <hr>
                            <!-- Row for two columns -->
                            <div class="row">
                                <div class="col-md-6">
                                    <?php include 'website/articles/amazon_art.php'; ?>
                                </div>
                                <div class="col-md-6">
                                    <?php include 'website/articles/covid_art.php'; ?>
                                </div>
                            </div>
                            <hr>
                            <!-- Row for two columns -->
                            <div class="row">
                                <div class="col-md-6">
                                    <?php include 'website/articles/crypto_art.php'; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'website/blocks/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="assets/fontawesome/js/all.js"></script>
</body>
</html>
