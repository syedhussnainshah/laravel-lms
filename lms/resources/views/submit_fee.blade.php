<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS FIle Included -->
    <?php include_once 'link.php' ?>
</head>
<body>

    <!-- Navbar included -->
    <?php include_once 'navbar.php' ?>
    <!-- Sidebar included -->
    <?php include_once 'sidebar.php' ?>

    <!-- Main Section Start Here -->
    <main>
        <div class="container">
            <h1>Submit Fee</h1>

            <section>
                <form class="row g-3" action="show_fee_detail.php">
                    <div class="col-md-6">
                        <label class="form-label">Class</label>
                        <select class="form-select">
                            <option selected>KG</option>
                            <option>Nursery</option>
                            <option>Prep</option>
                            <option>One</option>
                            <option>Two</option>
                            <option>Three</option>
                            <option>Four</option>
                            <option>Five</option>
                            <option>Six</option>
                            <option>Seven</option>
                            <option>Eight</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Section</label>
                        <select class="form-select">
                            <option selected>A</option>
                            <option>B</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Roll Number</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>

            </section>
        </div>
    </main>
    <!-- Main Section End Here -->
    
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
</html>
