<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="page-title"><b>Daftar Baru Jamaah Haji</b></h4>
                        <hr>

                        <form class="form-horizontal" role="form" action="#" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Nama Lengkap</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">No. KTP</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="noktp" placeholder="No. KTP" required="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Tempat Lahir</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="tempatlahir" placeholder="Tempat Lahir" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Tanggal Lahir</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="tanggallahir" required="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <div class="radio radio-success radio-inline">
                                        <input type="radio" id="jk1" value="L" name="jk">
                                        <label for="jk1"> Laki-Laki </label>
                                    </div>
                                    <div class="radio radio-pink radio-inline">
                                        <input type="radio" id="jk2" value="P" name="jk">
                                        <label for="jk2"> Perempuan </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status Perkawinan</label>
                                <div class="col-sm-10">
                                    <div class="radio radio-primary radio-inline">
                                        <input type="radio" id="sp1" value="sm" name="sp">
                                        <label for="sp1"> Menikah </label>
                                    </div>
                                    <div class="radio radio-danger radio-inline">
                                        <input type="radio" id="sp2" value="bm" name="sp">
                                        <label for="sp2"> Belum Menikah </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Alamat</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Kelurahan</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Kecamatan</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Kabupaten / Kota</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="kota" placeholder="Kabupaten / Kota" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">No. Handphone</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="nohp" placeholder="No. Handphone" required="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">E-mail</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Pekerjaan</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Nama Ahli Waris</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="ahliwaris" placeholder="Nama Ahli Waris" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">No. Handphone Ahli Waris</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="nohpahliwaris" placeholder="No Handphone Ahli Waris" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Referensi</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="referensi" placeholder="Referensi" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pembayaran</label>
                                <div class="col-sm-10">
                                    <div class="radio radio-custom radio-inline">
                                        <input type="radio" id="p1" value="c" name="pembayaran">
                                        <label for="p1"> Cash </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="p2" value="p" name="pembayaran">
                                        <label for="p2"> Pembiayaan </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">DP</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="dp" placeholder="DP" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">KTP</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="ktp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">KK</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="kk">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Buku Nikah</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="bukunikah">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Paspor</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="paspor">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Vaksin</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="vaksin">
                                </div>
                            </div>
                            

                            <div class="form-group" style="padding-left: 16%;">
                                <div class="col-sm-offset-6 col-sm-1">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                                      
                    </div>
                </div>
            </div>
        </div> <!-- container -->          
    </div> <!-- content -->

    <footer class="footer">
       © 2019 Kerja Praktek Muhammad Fadhli
    </footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->