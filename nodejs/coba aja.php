<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>TAMBAH JURUSAN</font></strong></h4>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('Jurusan/tambah_data'); ?>" enctype="multipart/form-data" >
    <div class="box-body">

<div class="form-group">
      <label for="id_jurusan">ID</label>
          <input type="text" class="form-control" id="id_jurusan" placeholder="Masukkan ID Jurusan" name="id_jurusan" maxlength="3" required="required">
          </div>        

    <div class="form-group">
      <label for="nama_jurusan">Jurusan</label>
          <input type="text" class="form-control" id="nama_jurusan" placeholder="Masukkan Jurusan" name="nama_jurusan" required="required">
          </div>        

    </div><!-- /.box-body -->

    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('jurusan'); ?>" class="btn btn-info">Batal</a>
    </div>
  </form>
</div><!-- /.box -->

<script type="text/javascript">

$('#form').submit(function() 
{
    if ($.trim($("#nama_jurusan").val()) === "") {
        alert('Data masih kosong !!!');
    return false;
    }
});

</script>