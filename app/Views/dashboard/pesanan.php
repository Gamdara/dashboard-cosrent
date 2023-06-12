<?= $this->extend('include/base') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Pesanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item">Pesanan</li>
              <li class="breadcrumb-item active"><?= $pesanan['id'] ?></li>
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
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body row">
                <div class="form-group col-6">
                  <label for="exampleInputEmail1">Nama Penerima</label>
                  <input readonly value="<?= $pesanan['nama_penerima'] ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputEmail1">Kostum yang disewa</label>
                  <input readonly value="<?= $pesanan['kostum'] ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group  col-6">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input readonly value="<?= $pesanan['alamat'] ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group  col-6">
                  <label for="exampleInputEmail1">No Handphone</label>
                  <input readonly value="<?= $pesanan['no_hp'] ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group  col-6">
                  <label for="exampleInputEmail1">Jenis Payment</label>
                  <input readonly value="<?= $pesanan['jenis_payment'] ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group  col-6">
                  <label for="exampleInputEmail1">Tanggal Sewa</label>
                  <input readonly value="<?= $pesanan['tanggal_sewa'] ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
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

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Diri</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body row">
                <div class="form-group col-6">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input readonly value="<?= $datadiri['nama_lengkap'] ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputEmail1">Social Media</label>
                    <div class="row ">
                      <input readonly value="<?= $datadiri['social_media'] ?>" type="email" class="col-6 form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <input readonly value="<?= $datadiri['social_media2'] ?>" type="email" class="col-6 form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputEmail1">Foto KTP</label>
                 
                  <img class="col-12" height="400" src=<?= site_url('dashboard/img/'.$datadiri['id'].'/ktp' )?> alt="" srcset="">
                
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputEmail1">Foto KTP + Selfie</label>
                  <img class="col-12" height="400" src=<?= site_url('dashboard/img/'.$datadiri['id'].'/ktp_selfie' )?> alt="" srcset="">
                </div>
                <div class="form-group  col-6">
                  <label for="exampleInputEmail1">Handphone Kerabat</label>
                  <input readonly value="<?= $datadiri['hp_kerabat'] ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <a class="text-white" href="<?= base_url('dashboard') ?>"><button class="btn btn-success mb-4 "> Kembali</button></a>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

  <script>
    function openImage(element){
      let newTab = window.open()
      setTimeout(() => {
        newTab.document.body.innerHTML = element.innerHTML
      }, 500)
      return false
    }
  </script>

<?= $this->endSection() ?>