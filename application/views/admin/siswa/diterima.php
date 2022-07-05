<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
  <li class="breadcrumb-item">
      <a href="<?=site_url('admin/dashboard');?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
      <a href="<?=site_url('admin/siswa');?>">Siswa</a>
    </li>
    <li class="breadcrumb-item active">
      Diterima
    </li>
  </ol>

  <!-- Page Content -->
  <h1>Siswa Diterima</h1>
  <hr>
  <?=$this->session->flashdata('pesan');?>
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <span>
        Data Semua siswa yang diterima
      </span>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Siswa</th>
              <th>NISN</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php if(count($siswa) > 0): ?>
            <?php $no = 1; ?>
            <?php foreach($siswa as $s): ?>
            <tr>
              <td><?=$no++;?></td>
              <td><?=$s['nama_siswa'];?></td>
              <td><?=$s['nisn'];?></td>
              <td>
                <a href="<?=site_url('admin/siswa/detail/'.$s['id']);?>" title="Detail"><i class="fas fa-eye"></i></a>
                <a href="<?=site_url('admin/siswa/verifikasi/'.$s['id']);?>" title="Verifikasi"><i class="fas fa-edit"></i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

</div>