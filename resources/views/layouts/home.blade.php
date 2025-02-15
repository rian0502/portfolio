<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MFH</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="shortcut icon" href="/assets//img/portfolio/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="/assets/styles/style.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-dark text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">MFH</a><button data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive"
                class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#portfolio">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#project">Project</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a
                            class="nav-link py-3 px-0 px-lg-3 rounded btn btn-sm btn-success"
                            href="./assets/file/MuhammadFebrianHasibuan-CV.pdf" target="_blank"><i
                                class="bi bi-file-earmark-arrow-down-fill"></i> <strong>CV</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


    <footer class="text-center footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p>Tambun-Selatan<br>Bekasi Kabupaten, 17510</p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase">Around the Web</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a
                                class="btn btn-outline-light text-center btn-social rounded-circle" role="button"
                                href="https://www.facebook.com/MFRHS05" target="_blank"><i
                                    class="fa fa-facebook fa-fw"></i></a></li>
                        <li class="list-inline-item"><a
                                class="btn btn-outline-light text-center btn-social rounded-circle" role="button"
                                href="https://github.com/rian0502" target="_blank"><i
                                    class="fa fa-github fa-fw"></i></a></li>
                        <li class="list-inline-item"><a
                                class="btn btn-outline-light text-center btn-social rounded-circle" role="button"
                                href="https://www.linkedin.com/in/muhammad-febrian-hasibuan/" target="_blank"><i
                                    class="fa fa-linkedin-square fa-fw"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0"><span>Freelance is a free to use, open source Bootstrap theme.&nbsp;</span></p>
                </div>
            </div>
        </div>
    </footer>

    <div class="text-center text-white copyright py-4">
        <div class="container"><small>Copyright ©&nbsp;MFH 2022</small></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/freelancer.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#projectTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true
            });
        });
    </script>



</body>

</html>
