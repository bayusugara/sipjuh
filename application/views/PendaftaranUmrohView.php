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
                    <h2><strong>Pilih Paket Umroh</strong></h2>
                </div>
            </div>
           
            <br>
            <div class="card-box">
                <!-- mulai wiget -->
                <div class="row">
                    <?php
                    foreach($data_paket as $dp){ ?>
                    <a href="<?=base_url('PendaftaranUmrohController/dataJamaah/'.$dp->id_paket);?>">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget-bg-color-icon card-box ">
                            <div class="text-center">
                                <h3 class="text-custom"><b>Program <?php echo $dp->program; ?></b></h3>
                                <p class="text-dark"><b>Fasilitas:</b></p>
                                <p class="text-muted"><?php echo $dp->program; ?></p>
                                <p class="text-muted">Biaya <?php echo $dp->fasilitas; ?> Rupiah</p>
                                <p class="text-muted">Waktu keberangkatan <?php echo $dp->tanggal_keberangkatan; ?></p>
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