
<header>
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="img-brand" src="<?= '/assets/img/logo.png' ?>" alt="OSOffice logo">
            </a>
            
            <div class="mobile-menu">
                <button class="m-toggle"></button>

                <div class="menu">
                    <div class="overlay"></div>
                    <div class="menu-wrapper d-flex">
                        <div class="accordion align-self-center m-auto text-center navigasi" id="menu-item">
                            
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0"><a class="btn-link btn" rel="noreferrer" href="">Home</a></h2>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0"><a class="btn-link btn" rel="noreferrer" href="">Products</a></h2>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0"><a class="btn-link btn" rel="noreferrer" href="">Support</a></h2>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0"><a class="btn-link btn" rel="noreferrer" href="">Get Involved</a></h2>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0"><a class="btn-link btn" rel="noreferrer" href="">FREE DOWNLOAD</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], "") ? 'active' : ''; ?>" rel="noreferrer" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], "product")? 'active' : ''; ?>" rel="noreferrer" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], "support")? 'active' : ''; ?>" rel="noreferrer" href="support.php">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], "involve")? 'active' : ''; ?>" rel="noreferrer" href="get-involved.php">Get Involved</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn-ctc" rel="noreferrer" href="products.php">FREE DOWNLOAD</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>