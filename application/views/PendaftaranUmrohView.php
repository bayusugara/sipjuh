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
                    <h2><strong>Pilih Paket Umroh</strong></h2>
                </div>
            </div>
           
            <br>
            <div class="card-box">
                <!-- mulai wiget -->
                <div class="row">
                    <?php foreach ($data_paket as $dp){ 
                        $biaya = number_format($dp->biaya,0,",",".");
                        $tgl_keberangkatan['tanggal'] = substr($dp->tanggal_keberangkatan, 8,2);
                        $tgl_keberangkatan['bulan'] = $nama_bulan[substr($dp->tanggal_keberangkatan, 5,2)];
                        $tgl_keberangkatan['tahun'] = substr($dp->tanggal_keberangkatan, 0,4);
                    ?>
                    <a href="<?=base_url('PendaftaranUmrohController/dataJamaah/'.$dp->id_paket);?>">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget-bg-color-icon card-box ">
                            <div class="text-center">
                                <h3 class="text-custom"><b>Program <?=$dp->program;?></b></h3>
                                <p class="text-dark"><b>Fasilitas:</b></p>
                                <p class="text-muted"><?=$dp->fasilitas;?></p>
                                <p class="text-dark"><b>Biaya:</b></p>
                                <p class="text-muted"><?='Rp. '.$biaya.',00';?></p>
                                <p class="text-dark"><b>Waktu Keberangkatan:</b></p>
                                <p class="text-muted"><?= implode(' ', $tgl_keberangkatan)?></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    </a>
                    <?php } ?>
                </div>
                <!-- akhir wiget -->

            </div>
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