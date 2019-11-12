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
                    <h4 class="page-title"> Data Pengguna </h4>
                    <hr>
                </div>
                <div class="card-box">
                    <a href="#" ><button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#tambahpengguna"><i class="fa fa-plus m-r-5"></i> <span> Data Pengguna</span></button></a>
                        <br><br>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th><center>No.</center></th>
                            <th><center>Username</center></th>
                            <th><center>Password</center></th>
                            <th><center>Nama</center></th>
                            <th><center>Hak Akses</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach($pengguna as $p){ ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $p->username; ?></td>
                                <td><?php echo $p->password; ?></td>
                                <td><?php echo $p->nama; ?></td>
                                <td><?php echo $p->level; ?></td>
                                <td><center>
                                    <button id="editButton" class="btn btn-icon waves-effect waves-light btn-warning editButton" data-toggle="modal" data-target="#ubahpassword" data-username="<?= $p->username ?>"> <i class="glyphicon glyphicon-lock"></i> </button>
                                    |
                                    <a href="<?=base_url('DataPenggunaController/hapus_data/'.$p->username);?>" onclick="return confirm('Anda Yakin Menghapus Data?')"><button class="btn btn-icon waves-effect waves-light btn-danger"> <i class="glyphicon glyphicon-trash"></i> </button></a></center>
                                </td>
                            </tr>
                            <?php } ?>
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

<!-- Modal Tambah Pengguna -->
<div id="tambahpengguna" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Pengguna</h4>
            </div>
            <form class="form-horizontal" role="form"  action="<?=base_url('DataPenggunaController/tambah_data');?>" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
            <div class="modal-body">
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Username</label>
                    <div class="col-sm-7">
                        <input type="text" name="username" placeholder="Username" autofocus="" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-7">
                        <input type="password" name="password" placeholder="Password" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Nama</label>
                    <div class="col-sm-7">
                        <input type="text" name="nama" placeholder="Nama" autofocus="" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Hak Akses</label>
                    <div class="col-sm-7">
                        <select id="level" class="form-control select1" name="level" required>
                            <option value="">Pilih Hak Akses</option>
                            <option>Admin</option>
                            <option>Staff</option>
                        </select>
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

<!-- Model Edit Pengguna -->
<div id="ubahpassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Ubah Password</h4>
            </div>
            <form class="form-horizontal" role="form"  action="<?=base_url('DataPenggunaController/ubah_password');?>" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-4 control-label">Password Baru</label>
                    <div class="col-md-7">
                        <input id="editUsername" type="hidden" class="form-control" name="username" value=""  required="" >
                        <input type="text" id="editPassword" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Konfirmasi Password Baru</label>
                    <div class="col-md-7">
                        <input id="editPassword2" data-parsley-equalto="#editPassword" type="password" required placeholder="Password" class="form-control">
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
</div>

<script type="text/javascript">
    window.onload = function(){
        $('.editButton').on('click', function(){
            var username = $(this).data('username');
            $('#editUsername').val(username);
        });
    }
</script>