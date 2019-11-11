<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="card-box table-responsive">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title"> Paket Umroh </h4>
                    <hr>
                </div>
                <div class="card-box">
                    <a href="#" ><button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#tambahpaketumroh"><i class="fa fa-plus m-r-5"></i> <span> Paket Umroh </span></button></a>
                        <br><br>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th><center>NO</center></th>
                            <th><center>Program</center></th>
                            <th><center>Fasilitas</center></th>
                            <th><center>Biaya</center></th>
                            <th><center>Keberangkatan</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><center><button class="btn btn-icon waves-effect waves-light btn-warning" data-toggle="modal" data-target="#ubahpaketumroh"> <i class="glyphicon glyphicon-pencil"></i> </button>|<a href="#" onclick="return confirm('Anda Yakin Menghapus Data?')"><button class="btn btn-icon waves-effect waves-light btn-danger"> <i class="glyphicon glyphicon-trash"></i> </button></a></center>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            </div>
            
        </div> <!-- container -->
    </div><!-- content -->

    <footer class="footer text-right">
      © 2019 Kerja Praktek Muhammad Fadhli
    </footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<!-- Modal TAMBAH Paket umroh -->
<div id="tambahpaketumroh" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Paket Umroh</h4>
            </div>
            <form class="form-horizontal" role="form"  action="#" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
            <div class="modal-body">
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Program</label>
                    <div class="col-sm-7">
                        <input type="text" name="program" placeholder="Program" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Fasilitas</label>
                    <div class="col-sm-7">
                        <input type="password" name="fasilitas" placeholder="Fasilitas" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Biaya</label>
                    <div class="col-sm-7">
                        <input type="text" name="biaya" placeholder="Biaya" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Keberangkatan</label>
                    <div class="col-sm-7">
                        <input type="date" name="keberangkatan" required class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger  waves-effect waves-light m-l-5" data-dismiss="modal">
                    Batal
                </button>
                <button type="submit" class="btn btn-default waves-effect waves-light">
                    Simpan
                </button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal UBAH Paket umroh -->
<div id="ubahpaketumroh" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel"> Ubah Paket Umroh </h4>
            </div>
            <form class="form-horizontal" role="form"  action="#" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
            <div class="modal-body">
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Program</label>
                    <div class="col-sm-7">
                        <input type="hidden" name="idpaket" value=""  class="form-control">
                        <input type="text" name="program" placeholder="Program" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Fasilitas</label>
                    <div class="col-sm-7">
                        <input type="password" name="fasilitas" placeholder="Fasilitas" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Biaya</label>
                    <div class="col-sm-7">
                        <input type="text" name="biaya" placeholder="Biaya" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Keberangkatan</label>
                    <div class="col-sm-7">
                        <input type="date" name="keberangkatan" required class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger  waves-effect waves-light m-l-5" data-dismiss="modal">
                    Batal
                </button>
                <button type="submit" class="btn btn-default waves-effect waves-light">
                    Simpan
                </button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->