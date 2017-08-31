<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>SI GIS - Implementasi GIS</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">

    <link rel="icon" href="<?php echo base_url() ?>assets/images/icon.png" type="image/png" sizes="16x16">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="image-top">
          <img src="<?php echo base_url() ?>assets/images/icon.png" alt="logo" width="50px" style="margin-right: 10px;">
      </div>
      <a class="navbar-brand" href="#">Geographic Information System (GIS)</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <?php $this->load->view('menu', $menu); ?>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>

        <!-- top navigation -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari lokasi..." disabled>
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button" disabled>
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" disabled>
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
        <!-- end top navigation -->
      </div>
    </nav>
    <!-- End Navigation -->

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?php echo base_url() ?>assets/#">Home</a>
          </li>
          <li class="breadcrumb-item active">Marker Maps</li>
        </ol>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-map"></i>
            Marker Maps
          </div>
          <div class="card-body">
            <?php echo $map['js']; ?>
            <?php echo $map['html']; ?>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy; Punel developer 2017</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="<?php echo base_url() ?>assets/#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="add-data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title " >FORM ADD DATA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form class="form-horizontal" action="<?php echo site_url('marker/simpan'); ?>" method="post" id="form-tambah-data">
          <div class="modal-body">
                <input type="hidden" name="latitude" id="latitude" value="" required>
                <input type="hidden" name="langitude" id="langitude" value="" required>
                <div class="form-group">
                    <label for="nama" class="control-label col-md-4">Keterangan</label>
                    <div class="col-md-12">
                        <textarea name="keterangan" id="keterangan" rows="3" class="form-control" required></textarea>
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Save</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url() ?>assets/login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>
    <script type="text/javascript">
        var inputData = function( latitude, langitude ){
            var form = $('#form-tambah-data');
            $('#latitude').val( latitude );
            $('#langitude').val( langitude );
            $('#add-data').modal('show');
            $('#keterangan').focus();
        }
    </script>
  </body>

</html>
