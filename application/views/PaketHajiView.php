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
                    <h4 class="page-title"> Paket Haji </h4>
                    <hr>
                </div>
                <div class="card-box">
                    <a href="#" ><button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#tambahpakethaji"><i class="fa fa-plus m-r-5"></i> <span> Paket Haji </span></button></a>
                        <br><br>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th><center>No.</center></th>
                            <th><center>Program</center></th>
                            <th><center>Fasilitas</center></th>
                            <th><center>Biaya</center></th>
                            <th><center>Keberangkatan</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data_paket as $key => $value) {
                                $tgl_keberangkatan['tanggal'] = substr($value->tanggal_keberangkatan, 8,2);
                                $tgl_keberangkatan['bulan'] = $nama_bulan[substr($value->tanggal_keberangkatan, 5,2)];
                                $tgl_keberangkatan['tahun'] = substr($value->tanggal_keberangkatan, 0,4);
                            ?>
                            <tr>
                                <td><center><?= $key+1 ?></center></td>
                                <td><center><?= $value->program ?></center></td>
                                <td><center><?= $value->fasilitas ?></center></td>
                                <td><center><?= $value->biaya ?></center></td>
                                <td><center><?= implode(' ', $tgl_keberangkatan) ?></center></td>
                                <td><center>
                                    <button class="btn btn-icon waves-effect waves-light btn-warning editButton" data-toggle="modal" data-target="#ubahpakethaji" data-id="<?= $value->id_paket ?>"> <i class="glyphicon glyphicon-pencil"></i> </button>
                                    |
                                    <a href="<?=base_url('PaketHajiController/hapus_data/'.$value->id_paket);?>" onclick="return confirm('Anda Yakin Menghapus Data?')"><button class="btn btn-icon waves-effect waves-light btn-danger"> <i class="glyphicon glyphicon-trash"></i> </button></a></center>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
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

<!-- Create Modal -->
<div id="tambahpakethaji" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Paket Haji</h4>
            </div>
            <form class="form-horizontal" role="form"  action="<?=base_url('PaketHajiController/tambah_data');?>" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
                <div class="modal-body">
                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Program</label>
                        <div class="col-sm-7">
                            <input name="program" type="text" name="program" placeholder="Program" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Fasilitas</label>
                        <div class="col-sm-7">
                            <input type="text" name="fasilitas" placeholder="Fasilitas" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Biaya</label>
                        <div class="col-sm-7">
                            <input type="number" name="biaya" placeholder="Biaya" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Keberangkatan</label>
                        <div class="col-sm-7">
                            <input type="date" name="tgl_keberangkatan" required class="form-control">
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

<!-- Edit Modal  -->
<div id="ubahpakethaji" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel"> Ubah Paket Haji </h4>
            </div>
            <form class="form-horizontal" role="form"  action="<?=base_url('PaketHajiController/edit_data');?>" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
            <div class="modal-body">
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Program</label>
                    <div class="col-sm-7">
                        <input id="id_paket" type="hidden" name="id_paket" value=""  class="form-control">
                        <input id="edit-program" type="text" name="program" placeholder="Program" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Fasilitas</label>
                    <div class="col-sm-7">
                        <input id="edit-fasilitas" type="text" name="fasilitas" placeholder="Fasilitas" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Biaya</label>
                    <div class="col-sm-7">
                        <input id="edit-biaya" type="text" name="biaya" placeholder="Biaya" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Keberangkatan</label>
                    <div class="col-sm-7">
                        <input id="edit-tgl_keberangkatan" type="date" name="tgl_keberangkatan" required class="form-control" >
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
            var id_paket = $(this).data('id');

            $.ajax({
                url : "<?= base_url('PaketHajiController/edit') ?>",
                data : {id_paket : id_paket},
                method : 'post',
                dataType : 'json',
                success : function (data){
                    //console.log(data);
                    $('#id_paket').val(data.id_paket);
                    $('#edit-program').val(data.program);
                    $('#edit-fasilitas').val(data.fasilitas);
                    $('#edit-biaya').val(data.biaya);

                    var bulan = data.tanggal_keberangkatan.substring(7,5);
                    var tgl = data.tanggal_keberangkatan.substring(8,10);
                    var tahun = data.tanggal_keberangkatan.substring(4,0);

                    $('#edit-tgl_keberangkatan').val(tahun + '-' + bulan + '-' + tgl);
                }
            });
        });
    }
</script>