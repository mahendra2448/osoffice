<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/metastyles.php'; ?>
</head>
<body>
    <?php include 'includes/nav.php'; ?>
    
    <main id="content">
        
        <div class="section header page" data-parallax="scroll" data-image-src="assets/img/hero-page.png">
            <div class="container-fluid d-flex">
                <div class="heading-text align-self-center">
                    <h1 class="heading mb-1">Getting Involved</h1>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container p-5">
                <div class="row mb-5">
                    <div class="col">
                        <h2 class="mb-2">Donate</h2>
                        <p>Although you can download it free, but you can make a little donation for us to keep maintaining the softwares</p>
                        <form action="#">
                            <div class="form-group d-flex w-75">
                                <input type="text" class="form-control w-25 mr-2" required placeholder="$0">
                                <button class="btn btn-primary" type="submit">Sent</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="mb-2">Contribute</h2>
                        <p>Have a passion in making a software?  We welcome you to contribute your code in our software.</p>
                        <form action="#">
                            <div class="form-group d-flex w-75">
                                <input type="text" class="form-control w-50 mr-2" required placeholder="Enter your email">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>