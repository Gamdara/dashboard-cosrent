<?= $this->extend('include/base') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pesanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pesanan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php if (session('alert') !== null) : ?>
                  <div class="alert alert-success w-100 " role="alert"><?= session('alert') ?></div>
              <?php endif ?>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Penerima</th>
                    <th>Kostum</th>
                    <th>Alamat</th>
                    <th>No Handphone</th>
                    <th>Jenis Payment</th>
                    <th>Tanggal Sewa</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    foreach ($pesanans as $pesanan) {
                        echo "
                        <tr>
                            <td>$pesanan[nama_penerima]</td>
                            <td>$pesanan[kostum]</td>
                            <td>$pesanan[alamat]</td>
                            <td>$pesanan[no_hp]</td>
                            <td>$pesanan[jenis_payment]</td>
                            <td>$pesanan[tanggal_sewa]</td>
                            <td>
                            <a href='".base_url('dashboard/pesanan/'.$pesanan['id'])."' ><button class='border-0 rounded bg-primary text-white'><i class='fa fa-eye' aria-hidden='true'></i></button></a>
                            <a onclick='return confirm(`yakin ingin menghapus?`)' href='".base_url('dashboard/pesanan/delete/'.$pesanan['id'])."' ><button class='border-0 rounded bg-danger text-white'><i class='fa fa-trash' aria-hidden='true'></i></button></a>
                            </td>
                        </tr>    
                        ";
                    }
                  ?>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
<!-- Page specific script -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<?= $this->endSection() ?>

