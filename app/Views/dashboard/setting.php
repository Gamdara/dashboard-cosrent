<?= $this->extend('include/base') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Setting</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Setting</li>
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
              <form action="<?= base_url('/dashboard/setting/update') ?>" method="POST" class="card-body row">
                <input type="hidden" name="user_id" value="<?= auth()->user()->user_id ?>">
                <?php if (session('error') !== null) : ?>
                    <div class="alert alert-danger w-100 " role="alert"><?= session('error') ?></div>
                <?php endif ?>
                <div class="form-group col-12">
                  <label for="exampleInputEmail1">Username</label>
                  
                  <input name="secret" value="<?= auth()->user()->email ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group col-12">
                  <label for="exampleInputEmail1">Password</label>
                  <input name="secret2" value="" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group col-12">
                  <label for="exampleInputEmail1">Confirm Password</label>
                  <input name="confirm" value="" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <button class="btn btn-primary">Simpan </button>
              </form>
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


<?= $this->endSection() ?>