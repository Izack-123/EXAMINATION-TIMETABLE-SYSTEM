<?php 
include '../config/dbconfig.php';
session_start();

$fullname = $_SESSION['name'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include 'includes/sidebar.php'; ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include 'includes/navbar.php'; ?>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="time.php?time=5"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Exam Timetable</a></div>
                    <div class="row">
                        <a class="col-md-6 col-xl-3 mb-4" href="faculty.php" style="text-decoration-style: none;">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold h5 mb-0"><span>Faculty</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-building fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <a href="department.php">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold h5 mb-0"><span>Department</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-archive fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <a href="lecturer.php">
                            <div class="card shadow border-left-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-uppercase text-info font-weight-bold h5 mb-0 mr-3"><span>Lecturers</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-user fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <a href="courses.php">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase font-weight-bold h5 mb-0"><span>Courses</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-file fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <a href="venue.php">
                            <div class="card shadow border-left-secondary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-secondary font-weight-bold h5 mb-0"><span>Venue</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-building fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>

                    <!-- <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-secondary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-secondary font-weight-bold h5 mb-0"><span>Examination Timetable</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-building fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>                    
            </div>
        </div>
            
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright ?? </span></div>
                </div>
            </footer>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/chart.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>