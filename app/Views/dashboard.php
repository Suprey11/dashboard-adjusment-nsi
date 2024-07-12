<?= $this->extend('Navbar/main_layout') ?>

<?= $this->section('Navbar/content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row mb-4">
        <div class="col-xl-4 col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>
    </div>

    <div class="container-fluid">

        <div class="container-fluid">

            <div class="container-fluid">
                <!-- First Row -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">

                            <!-- Card 1 -->
                            <div class="col-xl-4 col-md-6 mb-3">
                                <a href="adjustment_inventory.html" class="text-decoration-none" style="display: block; transition: transform 0.2s;">
                                    <div class="card border-left-primary shadow-lg h-100 py-4">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xxl font-weight-bold text-primary text-uppercase mb-3">
                                                        Adjustment Inventory
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-sliders-h fa-4x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-xl-4 col-md-6 mb-3">
                                <a href="transfer_stock.html" class="text-decoration-none" style="display: block; transition: transform 0.2s;">
                                    <div class="card border-left-success shadow-lg h-100 py-4">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xxl font-weight-bold text-success text-uppercase mb-3">
                                                        Transfer Stock
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-exchange-alt fa-4x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-xl-4 col-md-6 mb-3">
                                <a href="cancel_lot.html" class="text-decoration-none" style="display: block; transition: transform 0.2s;">
                                    <div class="card border-left-danger shadow-lg h-100 py-4">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xxl font-weight-bold text-danger text-uppercase mb-3">
                                                        Cancel Lot
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-ban fa-4x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- Second Row -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <!-- Card 4 -->
                            <div class="col-xl-4 col-md-6 mb-3">
                                <a href="waiting_approved.html" class="text-decoration-none" style="display: block; transition: transform 0.2s;">
                                    <div class="card border-left-warning shadow-lg h-100 py-4">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xxl font-weight-bold text-warning text-uppercase mb-3">
                                                        Waiting Approved
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-hourglass-half fa-4x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Card 5 -->
                            <div class="col-xl-4 col-md-6 mb-3">
                                <a href="approved.html" class="text-decoration-none" style="display: block; transition: transform 0.2s;">
                                    <div class="card border-left-primary shadow-lg h-100 py-4">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xxl font-weight-bold text-primary text-uppercase mb-3">
                                                        Approved
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-check fa-4x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Card 6 -->
                            <div class="col-xl-4 col-md-6 mb-3">
                                <a href="disapproved.html" class="text-decoration-none" style="display: block; transition: transform 0.2s;">
                                    <div class="card border-left-danger shadow-lg h-100 py-4">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xxl font-weight-bold text-danger text-uppercase mb-3">
                                                        Disapproved
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-times fa-4x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.container-fluid -->

            <script>
                document.querySelectorAll('a').forEach(link => {
                    link.addEventListener('mouseover', function() {
                        this.style.transform = 'scale(1.05)';
                    });
                    link.addEventListener('mouseout', function() {
                        this.style.transform = 'scale(1)';
                    });
                });
            </script>

        </div>
<?= $this->endSection() ?>
