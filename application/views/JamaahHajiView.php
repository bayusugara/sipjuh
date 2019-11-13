<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php
    $nama_bulan = array('01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
?>
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
                    <a href="<?=base_url('PendaftaranHajiController/daftarJamaah/'.$id_paket);?>" ><button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#daftarbaru"><i class="fa fa-plus m-r-5"></i> <span> Daftar Baru </span></button></a>
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
                            <?php
                                $no = 1;
                                foreach ($data_jamaah as $key => $value) { 
                                    $tgl_lahir['tanggal'] = substr($value->tanggal_lahir, 8,2);
                                    $tgl_lahir['bulan'] = $nama_bulan[substr($value->tanggal_lahir, 5,2)];
                                    $tgl_lahir['tahun'] = substr($value->tanggal_lahir, 0,4);
                                ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?= $value->nama_lengkap;?></td>
                                <td><?= $value->no_ktp;?></td>
                                <td><?= $value->tempat_lahir.', '.implode(' ', $tgl_lahir)?></td>
                                <td><?= $value->jenis_kelamin;?></td>
                                <td><?= $value->status_perkawinan;?></td>
                                <td><center><a href="<?=base_url('PendaftaranHajiController/hapus/'.$value->id_daftar_jamaah);?>" onclick="return confirm('Anda Yakin Menghapus Data?')"><button class="btn btn-icon waves-effect waves-light btn-danger"> <i class="glyphicon glyphicon-remove"></i> </button></a></center>
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
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<!-- Modal TAMBAH pengguna -->