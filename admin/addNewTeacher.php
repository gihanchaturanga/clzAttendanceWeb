<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Teacher</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include 'adminSidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Add New Teacher</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add New Teacher</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- /.card -->

                    <div class="row mt-lg-5 mt-md-4 mt-sm-1">
                        <div class="offset-md-3 col-md-6">

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Add details of the teacher</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name of Teacher<span class="text-danger">*</span></label>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-shield"></i></span>
                                            </div>
                                            <input id="name" type="text" class="form-control">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- Date dd/mm/yyyy -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Mobile No.<span class="text-danger">*</span></label><br>
                                        <div class="">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                                <input id="mobile" type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="form-group">
                                        <label>Username<span class="text-danger">*</span></label><br>
                                        <div class="">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-user"></i></span>
                                                </div>
                                                <input id="username" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>Password<span class="text-danger">*</span></label><br>
                                        <div class="">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                </div>
                                                <input id="pwd" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!-- /.form group -->

                                        <!-- IP mask -->
                                        <div class="row mt-4">
                                            <!-- <button class="btn btn-secondary ml-auto"><i class="fas fa-arrow-circle-left"></i>&nbsp&nbspBack</button> -->
                                            <button id="input" class="btn btn-primary ml-auto mr-3"><i class="fas fa-plus-square"></i>&nbsp&nbspAdd Teacher</button>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col (left) -->

                        </div>
                        <!-- /.row -->
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.1.0
                </div>
                <strong>Copyright &copy; 2021-2022 <a href="https://adminlte.io">Revotech Solutions, Sri Lanka</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="../plugins/select2/js/select2.full.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
        <!-- InputMask -->
        <script src="../plugins/moment/moment.min.js"></script>
        <script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
        <!-- date-range-picker -->
        <script src="../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Bootstrap Switch -->
        <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- BS-Stepper -->
        <script src="../plugins/bs-stepper/js/bs-stepper.min.js"></script>
        <!-- dropzonejs -->
        <script src="../plugins/dropzone/min/dropzone.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>
        <!-- Page specific script -->
        <script>
            $(function() {
                    //Initialize Select2 Elements
                    $('.select2').select2()

                    //Initialize Select2 Elements
                    $('.select2bs4').select2({
                        theme: 'bootstrap4'
                    })

                    //Datemask dd/mm/yyyy
                    $('#datemask').inputmask('dd/mm/yyyy', {
                            'placeholder': 'dd/mm/yyyy'
                        })
                        //Datemask2 mm/dd/yyyy
                    $('#datemask2').inputmask('mm/dd/yyyy', {
                            'placeholder': 'mm/dd/yyyy'
                        })
                        //Money Euro
                    $('[data-mask]').inputmask()

                    //Date picker
                    $('#reservationdate').datetimepicker({
                        format: 'L'
                    });

                    //Date and time picker
                    $('#reservationdatetime').datetimepicker({
                        icons: {
                            time: 'far fa-clock'
                        }
                    });

                    //Date range picker
                    $('#reservation').daterangepicker()
                        //Date range picker with time picker
                    $('#reservationtime').daterangepicker({
                            timePicker: true,
                            timePickerIncrement: 30,
                            locale: {
                                format: 'MM/DD/YYYY hh:mm A'
                            }
                        })
                        //Date range as a button
                    $('#daterange-btn').daterangepicker({
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                            },
                            startDate: moment().subtract(29, 'days'),
                            endDate: moment()
                        },
                        function(start, end) {
                            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                        }
                    )

                    //Timepicker
                    $('#timepicker').datetimepicker({
                        format: 'LT'
                    })

                    //Bootstrap Duallistbox
                    $('.duallistbox').bootstrapDualListbox()

                    //Colorpicker
                    $('.my-colorpicker1').colorpicker()
                        //color picker with addon
                    $('.my-colorpicker2').colorpicker()

                    $('.my-colorpicker2').on('colorpickerChange', function(event) {
                        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                    })

                    $("input[data-bootstrap-switch]").each(function() {
                        $(this).bootstrapSwitch('state', $(this).prop('checked'));
                    })

                })
                // BS-Stepper Init
            document.addEventListener('DOMContentLoaded', function() {
                window.stepper = new Stepper(document.querySelector('.bs-stepper'))
            })

            // DropzoneJS Demo Code Start
            Dropzone.autoDiscover = false

            // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
            var previewNode = document.querySelector("#template")
            previewNode.id = ""
            var previewTemplate = previewNode.parentNode.innerHTML
            previewNode.parentNode.removeChild(previewNode)

            var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
                url: "/target-url", // Set the url
                thumbnailWidth: 80,
                thumbnailHeight: 80,
                parallelUploads: 20,
                previewTemplate: previewTemplate,
                autoQueue: false, // Make sure the files aren't queued until manually added
                previewsContainer: "#previews", // Define the container to display the previews
                clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
            })

            myDropzone.on("addedfile", function(file) {
                // Hookup the start button
                file.previewElement.querySelector(".start").onclick = function() {
                    myDropzone.enqueueFile(file)
                }
            })

            // Update the total progress bar
            myDropzone.on("totaluploadprogress", function(progress) {
                document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
            })

            myDropzone.on("sending", function(file) {
                // Show the total progress bar when upload starts
                document.querySelector("#total-progress").style.opacity = "1"
                    // And disable the start button
                file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
            })

            // Hide the total progress bar when nothing's uploading anymore
            myDropzone.on("queuecomplete", function(progress) {
                document.querySelector("#total-progress").style.opacity = "0"
            })

            // Setup the buttons for all transfers
            // The "add files" button doesn't need to be setup because the config
            // `clickable` has already been specified.
            document.querySelector("#actions .start").onclick = function() {
                myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
            }
            document.querySelector("#actions .cancel").onclick = function() {
                    myDropzone.removeAllFiles(true)
                }
                // DropzoneJS Demo Code End
        </script>
        <script src="../plugins/toastr/toastr.min.js"></script>
        <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <script>
            $(function() {
                bsCustomFileInput.init();
            });


            $(document).ready(function(){
                $('body').addClass('layout-fixed');
                $(window).trigger('resize');
                $("#name").focus();

                $("#name").keypress(function(event){
                    if(event.keyCode == 13){
                        $("#mobile").focus();
                    }
                });
                $("#mobile").keypress(function(event){
                    if(event.keyCode == 13){
                        $("#username").focus();
                    }
                });
                $("#username").keypress(function(event){
                    if(event.keyCode == 13){
                        $("#pwd").focus();
                    }
                });
                $("#pwd").keypress(function(event){
                    if(event.keyCode == 13){
                        $("#input").click();
                    }
                });

                //--------------------------------------------Ajax things

                $("#input").click(function(){
                    var name = $("#name").val();
                    var mobile = $("#mobile").val().replaceAll("\)", '').replaceAll("\(", '').replaceAll("-", '').replaceAll(' ', '');
                    var user = $("#username").val();
                    var pwd = $("#pwd").val();
                    //checking empty fields
                    if($("#name").val() != "" && $("#mobile").val() != "" && $("#username").val() != "" && $("#pwd").val() != ""){
                        //ajax things
                        $.ajax({
                            type: "GET",
                            url: "../php/addNewTeacher.php",
                            data: {
                                name: name,
                                mobile: mobile,
                                user: user,
                                pwd: pwd
                            },
                            success: function(res){
                                if(res == 1){
                                    toastr.success('Teacher Has Been Added');
                                    clear();
                                }else if(res == 2){
                                    toastr.error('Unexpected Error Occured, Please Try Again');
                                }else if(res == 3){
                                    toastr.warning('Please fill all of required fields nnn');
                                }else if(res == 4){
                                    toastr.info('Duplicate Entry! Teacher is already registered.');
                                }
                            }
                        });

                    }else{
                        toastr.warning('please fill all of the required fields');
                    }
                });

            });

            function clear(){
                $("#name").val("").focus();
                $("#mobile").val("");
                $("#username").val("");
                $("#pwd").val("");
            }
        </script>
</body>

</html>