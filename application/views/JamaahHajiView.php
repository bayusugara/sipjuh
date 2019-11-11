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
                    <h4 class="page-title"> Data Jamaah Haji</h4>
                    <hr>
                </div>
                <div class="card-box">
                    <a href="<?=base_url('PendaftaranHajiController/daftarJamaah');?>" ><button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#daftarbaru"><i class="fa fa-plus m-r-5"></i> <span> Daftar Baru </span></button></a>
                        <br><br>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th><center>NO</center></th>
                            <th><center>Nama</center></th>
                            <th><center>No. KTP</center></th>
                            <th><center>TTL</center></th>
                            <th><center>Jenis Kelamin</center></th>
                            <th><center>Status Perkawinan</center></th>
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
                                <td></td>
                                <td><center><a href="#" onclick="return confirm('Anda Yakin Menghapus Data?')"><button class="btn btn-icon waves-effect waves-light btn-danger"> <i class="glyphicon glyphicon-remove"></i> </button></a></center>
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
<!-- Modal TAMBAH pengguna -->