<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin DKM Masjid</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

@include('layout.admin.dashboard')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div class="container mt-5">
                <div class="card shadow-sm p-4">
                    <h2 class="mb-4">Profil Saya</h2>
            
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
            
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="mb-3">
                                @if (Auth::user()->profile_image)
                                    <img src="{{ asset('storage/profile_image' ) }}" alt="Profile Image" class="rounded-circle img-thumbnail" width="150">
                                @else
                                    <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile" class="rounded-circle img-thumbnail" width="150">
                                @endif
                            </div>
                            <h4>{{ Auth::user()->name }}</h4>
                            <p class="text-muted">{{ Auth::user()->email }}</p>
                        </div>
                        
                        <div class="col-md-8">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
            
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input disabled type="text" class="form-control" id="name" name="name" value="" required>
                                </div>
            
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input disabled type="text" class="form-control " name="profile_image">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nomor TLP</label>
                                    <input disabled type="text" class="form-control " name="profile_image">
                                </div>
            
                                <button type="submit" class="btn btn-primary">Edit Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- End of Main Content -->

            <!-- Footer -->
          
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>  <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>