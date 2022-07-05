<div class="pt-5"></div>

<main role="main">

  <div class="container mt-5">
    <?php if($site['setdaftar'] != 'Tutup'): ?>
    <form action="<?=site_url('daftar');?>" method="post" enctype="multipart/form-data">
      <div class="row">

				<div class="col-md-12 mb-4">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Petunjuk Pengisian Formulir</h4>
						</div>
						<div class="card-body">
							<ul>
								<li>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</li>
								<li>Isi Data Anda Secara Benar dan Jujur.</li>
							</ul>
						</div>
					</div>
				</div>

        <!-- #1 Data Pribadi -->
        <div class="col-md-8">
          <div class="card bg-light mb-3">
            <div class="card-header">DATA PRIBADI #1</div>
            <div class="card-body">
              
              <div class="form-group">
                <label for="nama_siswa">Nama Lengkap <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama_siswa" value="<?=set_value('nama_siswa');?>">
                <small class="form-text text-muted">Nama peserta didik sesuai dokumen resmi yang berlaku (Akta atau ijazah sebelumnya).</small>
                <small class="form-text text-muted">Hanya bisa diubah melalui <a href="http://vervalpd.data.kemdikbud.go.id" target="_blank">http://vervalpd.data.kemdikbud.go.id</a></small>
                <?=form_error('nama_siswa', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                <?=form_dropdown('jenis_kelamin', $jenis_kelamin, set_value('jenis_kelamin'), 'class="form-control"');?>
              </div>
              <div class="form-group">
                <label for="nisn">NISN <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nisn" value="<?=set_value('nisn');?>">
                <small class="form-text text-muted">Nomor Induk Nasional peserta didik (jika memiliki). Jika belum memiliki, maka wajib dikosongkan. NISN memiliki format 10 digit angka. contoh: 0009321234.</small>
                <small class="form-text text-muted">Untuk memeriksa NISN, dapat mengunjungi laman <a href="http://nisn.data.kemdikbud.go.id" target="_blank">http://nisn.data.kemdikbud.go.id</a></small>
                <?=form_error('nisn', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="nik">NIK / No. Kitas (Untuk WNA) <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nik" value="<?=set_value('nik');?>">
                <small class="form-text text-muted">Nomor Induk Kependudukan yang tercantum pada kartu keluarga, Kartu Identitas Anak, atau KTP (jika sudah memiliki) bagi WNI. NIK memiliki format 16 digit angka. Contoh: 6112090906021104.</small>
                <small class="form-text text-muted">Pastikan NIK tidak tertukar dengan No. Kartu Keluarga, karena keduannya memiliki format yang sama. Bagi WNA, diisi dengan nomor Kartu Izin Tinggal Terbatas (KITAS).</small>
                <?=form_error('nik', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="tempat_lahir" value="<?=set_value('tempat_lahir');?>">
                <small class="form-text text-muted">Tempat lahir peserta didik sesuai dokumen resmi yang berlaku.</small>
                <?=form_error('tempat_lahir', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?=set_value('tanggal_lahir');?>">
                <small class="form-text text-muted">Tanggal lahir peserta didik sesuai dokumen resmi yang berlaku. Hanya bisa diubah melalui <a href="http://vervalpd.data.kemdikbud.go.id" target="_blank">http://vervalpd.data.kemdikbud.go.id</a></small>
                <?=form_error('tanggal_lahir', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="agama_siswa">Agama & Kepercayaan <span class="text-danger">*</span></label>
                <?=form_dropdown('agama_siswa', $agama_siswa, set_value('agama_siswa'), 'class="form-control"');?>
                <small class="form-text text-muted">Agama atau kepercayaan yang dianut oleh peserta didik. Apabila peserta didik adalah penghayat kepercayaan (misalnya pada daerah tertentu yang masih memiliki penganut kepercayaan), dapat memilih opsi Kepercayaan Kepada Tuhan YME.</small>
                <?=form_error('agama_siswa', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <?php
                  $data = [
                    'name'          => 'is_wna',
                    'id'            => 'is_wna',
                    'value'         => '1',
                    'checked'       => FALSE,
                    'style'         => 'margin:10px'
                  ];
                ?>
                <label for="is_wna">Apakah WNA?</label>
                <?=form_checkbox($data);?>
                <small class="form-text text-muted">Kewarganegaraan peserta didik.</small>
              </div>
              <div class="form-group">
                <label for="nama_negara">Nama Negara</label>
                <input type="text" class="form-control" name="nama_negara" value="<?=set_value('nama_negara');?>">
                <small class="form-text text-muted">Kosongkan bila bukan WNA</small>
              </div>
              <div class="form-group">
                <label for="kebutuhan_khusus">Berkebutuhan Khusus</label>
                <small class="form-text text-muted">Kebutuhan khusus yang disandang oleh peserta didik</small>
                <?=form_dropdown('kebutuhan_khusus', $kebutuhan_khusus, set_value('kebutuhan_khusus'), 'class="form-control"');?>
              </div>
              <div class="form-group">
                <label for="alamat_jalan">Alamat Jalan <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat_jalan" value="<?=set_value('alamat_jalan');?>">
                <small class="form-text text-muted">Jalur tempat tinggal peserta didik, terdiri atas gang, kompleks, blok, nomor rumah, dan sebagainya selain informasi yang diminta oleh kolom-kolom yang lain pada bgian ini. Sebagai contoh: peserta didik tinggal di sebuah kompleks perumahan Griya Adam yang berada pada Jalan Kemanggisan, dengan nomor rumah 4-C, di lingkungan RT 005 dan RW 011, Dusun Cempaka, Desa Salatiga. Maka dapat diisi dengan Jl. Kemanggisan, Komp. Griya Adam, No. 4-C.</small>
                <?=form_error('alamat_jalan', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="alamat_rt">RT <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat_rt" value="<?=set_value('alamat_rt');?>">
                <small class="form-text text-muted">Nomor RT tempat tinggal peserta didik saat ini. Dari contoh diatas, misalnya dapat diisi dengan angka 5.</small>
                <?=form_error('alamat_rt', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="alamat_rw">RW <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat_rw" value="<?=set_value('alamat_rw');?>">
                <small class="form-text text-muted">Nomor RW tempat tinggal peserwa didik saat ini. Dari contoh diatas, misalnya dapat diisi dengan angka 11.</small>
                <?=form_error('alamat_rw', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="nama_dusun">Nama Dusun</label>
                <input type="text" class="form-control" name="nama_dusun" value="<?=set_value('nama_dusun');?>">
                <small class="form-text text-muted">Kosongkan bila tidak ada.</small>
              </div>
              <div class="form-group">
                <label for="alamat_kelurahan">Nama Kelurahan / Desa <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat_kelurahan" value="<?=set_value('alamat_kelurahan');?>">
                <?=form_error('alamat_kelurahan', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="alamat_kecamatan">Kecamatan <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat_kecamatan" value="<?=set_value('alamat_kecamatan');?>">
                <?=form_error('alamat_kecamatan', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="kode_pos">Kode Pos <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="kode_pos" value="<?=set_value('kode_pos');?>">
                <?=form_error('kode_pos', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="lintang">Lintang</label>
                <input type="text" class="form-control" name="lintang" value="<?=set_value('lintang');?>">
                <small class="form-text text-muted">Tempat koordinat tempat tinggal siswa.</small>
                <?=form_error('lintang', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="bujur">Bujur</label>
                <input type="text" class="form-control" name="bujur" value="<?=set_value('bujur');?>">
                <small class="form-text text-muted">Tempat koordinat tempat tinggal siswa.</small>
                <?=form_error('bujur', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="tempat_tinggal">Tempat Tinggal <span class="text-danger">*</span></label>
                <?=form_dropdown('tempat_tinggal', $tempat_tinggal, set_value('tempat_tinggal'), 'class="form-control"');?>
                <small class="form-text text-muted">Kepemilikan tempat tinggal peserta didik saat ini (yang telah diisikan pada kolom-kolom sebelumnya di atas).</small>
              </div>
              <div class="form-group">
                <label for="moda_transportasi">Moda Transportasi <span class="text-danger">*</span></label>
                <?=form_dropdown('moda_transportasi', $moda_transportasi, set_value('moda_transportasi'), 'class="form-control"');?>
                <small class="form-text text-muted">Jenis transportasi utama atau yang paling sering digunakan peserta didik untuk berangkat kesekolah.</small>
              </div>
              <div class="form-group">
                <label for="nomor_kks">Nomor KKS (Kartu Keluarga Sejahtera)</label>
                <input type="text" class="form-control" name="nomor_kks" value="<?=set_value('nomor_kks');?>">
                <small class="form-text text-muted">Nomor kartu keluarga sejahtera (jika memiliki). Nomor yang dimaksud adalah 6 digit kode yang tertera pada sisi belakang kiri atas kartu (dibawah lambang Garuda Pancasila).</small>
              </div>
              <div class="form-group">
                <label for="anak_keberapa">Anak Keberapa <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="anak_keberapa" value="<?=set_value('anak_keberapa');?>">
                <?=form_error('anak_keberapa', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="nomor_kps">Nomor KPS/PKH</label>
                <input type="text" class="form-control" name="nomor_kps" value="<?=set_value('nomor_kps');?>">
                <small class="form-text text-muted">Kosongkan bila tidak ada.</small>
                <small class="form-text text-muted">Status peserta didik sebagai penerima manfaat KPS (Kartu Perlindungan Sosial)/PKH (Program Keluarga harapan). Peserta didik dinyatakan sebagai penerima KPS/PKH apabila tercantum di alam kartu keluarga dengan kepala keluarga pemegang KPS/PKH. Sebagai contoh, peserta didik tercantum pada KK dengan kepala keluarganya adalah kakek. Apabila kakek peserta didik tersebut pemegang KPS/PKH, maka peserta didik yang bersangkutan dinyatakan penerima KPS/PKH.</small>
              </div>
              <div class="form-group">
                <label for="layak_pip">Usulan Dari Sekolah (Layak PIP)?</label><br>
                <div class="form-check">
                  <?=form_checkbox('layak_pip', 'Ya', FALSE, 'class="form-check-label"');?>
                  <?=form_label('Ya', 'layak_pip', ['class'=>'form-check-label']);?>
                </div>
                <div class="form-check">
                  <?=form_checkbox('layak_pip', 'Tidak', FALSE, 'class="form-check-label"');?>
                  <?=form_label('Tidak', 'layak_pip', ['class'=>'form-check-label']);?>
                </div>
                <small class="form-text text-muted">Pilih Ya apabila peserta didik layak diajukan sebagai penerima manfaat Program Indonesia Pintar (seperti BSM dan sejenisnya). Pilih Tidak jika tidak memenuhi kriteria. Opsi ini khusus bagi peserta didik yang tidak memiliki KIP. Peserta didik yang memiliki KIP silahkan dipilih tidak.</small>
              </div>
              <div class="form-group">
                <label for="alasan_layak_pip">Alasan layak PIP</label>
                <?=form_dropdown('alasan_layak_pip', $alasan_layak_pip, set_value('alasan_layak_pip'), 'class="form-control"');?>
                <small class="form-text text-muted">Kosongkan jika tidak layak PIP.</small>
              </div>
              <div class="form-group">
                <label for="nomor_kip">Nomor KIP (Kartu Indonesia Pintar)</label>
                <input type="text" class="form-control" name="nomor_kip" value="<?=set_value('nomor_kip');?>">
                <small class="form-text text-muted">Nomor KIP milik peserta didik apabila sebelumnya telah dipilih sebagai penerima KIP. Nomor yang dimaksud adalah 6 digit kode yang tertera pada sisi belakang kanan atas kartu (di bawah lambang toga). Kosongkan jika bukan penerima KIP.</small>
              </div>
              <div class="form-group">
                <label for="nama_kip">Nama tertera di KIP</label>
                <input type="text" class="form-control" name="nama_kip" value="<?=set_value('nama_kip');?>">
                <small class="form-text text-muted">Nama yang tertera pada KIP milik peserta didik. Kosongkan jika bukan penerima KIP.</small>
              </div>
              <div class="form-group">
                <label for="terima_fisik_kip">Terima fisik Kartu (KIP)</label><br>
                <div class="form-check">
                  <?=form_checkbox('terima_fisik_kip', 'Ya', FALSE, 'class="form-check-label"');?>
                  <?=form_label('Ya', 'terima_fisik_kip', ['class'=>'form-check-label']);?>
                </div>
                <div class="form-check">
                  <?=form_checkbox('terima_fisik_kip', 'Tidak', FALSE, 'class="form-check-label"');?>
                  <?=form_label('Tidak', 'terima_fisik_kip', ['class'=>'form-check-label']);?>
                </div>
                <small class="form-text text-muted">Status bahwa peserta didik sudah menerima atau belum menerima Kartu Indonesia Pintar secara fisik. Kosongkan jika bukan penerima KIP.</small>
              </div>

            </div>
          </div>

          <div class="card bg-light mb-3">
            <div class="card-header">KONTAK #2</div>
            <div class="card-body">
              
              <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon Rumah</label>
                <input type="text" class="form-control" name="nomor_telepon" value="<?=set_value('nomor_telepon');?>">
                <small class="form-text text-muted">Diisi nomor telepon rumah (milik pribadi, orang tua, atau wali) tanpa tanda baca.</small>
              </div>
              <div class="form-group">
                <label for="nomor_hp">Nomor HP <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nomor_hp" value="<?=set_value('nomor_hp');?>">
                <small class="form-text text-muted">Diisi nomor telepon selular (milik pribadi, orang tua, atau wali) tanpa tanda baca.</small>
                <?=form_error('nomor_hp', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="email_siswa">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email_siswa" value="<?=set_value('email_siswa');?>">
                <small class="form-text text-muted">Diisi alamat surat elektronik (surel) peserta didik yang dapat dihubungi (milik pribadi, orang tua, atau wali).</small>
                <?=form_error('email_siswa', '<small class="form-text text-danger">', '</small>');?>
              </div>

            </div>
          </div>

          <div class="card bg-light mb-3">
            <div class="card-header">DATA AYAH KANDUNG #3</div>
            <div class="card-body">
              <div class="form-group">
                <label for="nama_ayah">Nama ayah Kandung <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama_ayah" value="<?=set_value('nama_ayah');?>">
                <small class="form-text text-muted">Nama ayah Kandung peserta didik sesuai dokumen resmi yang berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Alm., Dr., Drs., S.Pd, dan H.)</small>
                <?=form_error('nama_ayah', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="nik_ayah">NIK Ayah <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nik_ayah" value="<?=set_value('nik_ayah');?>">
                <small class="form-text text-muted">Nomor Induk Kependudukan yang tercantum pada Kartu Keluarga atau KTP ayah Kandung peserta didik.</small>
                <?=form_error('nik_ayah', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="tahun_lahir_ayah">Tahun Lahir Ayah <span class="text-danger">*</span></label>
                <input type="text" class="form-control datepicker" name="tahun_lahir_ayah" value="<?=set_value('tahun_lahir_ayah');?>">
                <small class="form-text text-muted">Tahun lahir ayah Kandung peserta didik.</small>
                <?=form_error('tahun_lahir_ayah', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="pendidikan_ayah">Pendidikan</label>
                <?=form_dropdown('pendidikan_ayah', $pendidikan_ayah, set_value('pendidikan_ayah'), 'class="form-control"');?>
                <small class="form-text text-muted">Pendidikan terakhir ayah kandung peserta didik.</small>
              </div>
              <div class="form-group">
                <label for="pekerjaan_ayah">Pekerjaan</label>
                <?=form_dropdown('pekerjaan_ayah', $pekerjaan_ayah, set_value('pekerjaan_ayah'), 'class="form-control"');?>
                <small class="form-text text-muted">Pekerjaan utama ayah kandung peserta didik. Pilih Meninggal Dunia apabila ayah Kandung peserta didik telah meninggal.</small>
              </div>
              <div class="form-group">
                <label for="penghasilan_ayah">Penghasilan Bulanan</label>
                <?=form_dropdown('penghasilan_ayah', $penghasilan_ayah, set_value('penghasilan_ayah'), 'class="form-control"');?>
                <small class="form-text text-muted">Rentang penghasilan ayah kadung peserta didik. Kosongkan kolom ini apabila ayah kandung peserta didik telah meninggal dunia atau tidak bekerja.</small>
              </div>
              <div class="form-group">
                <label for="kebutuhan_khusus_ayah">Berkebutuhan Khusus</label>
                <?=form_dropdown('kebutuhan_khusus_ayah', $kebutuhan_khusus, set_value('kebutuhan_khusus_ayah'), 'class="form-control"');?>
                <small class="form-text text-muted">Kebutuhan khusus yang disandang oleh  ayah peserta didik.</small>
              </div>
            </div>

            <div class="card-header">DATA IBU KANDUNG #4</div>
            <div class="card-body">
              <div class="form-group">
                <label for="nama_ibu">Nama ibu Kandung <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama_ibu" value="<?=set_value('nama_ibu');?>">
                <small class="form-text text-muted">Nama ibu Kandung peserta didik sesuai dokumen resmi yang berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Alm., Dr., Drs., S.Pd, dan H.)</small>
                <?=form_error('nama_ibu', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="nik_ibu">NIK ibu <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nik_ibu" value="<?=set_value('nik_ibu');?>">
                <small class="form-text text-muted">Nomor Induk Kependudukan yang tercantum pada Kartu Keluarga atau KTP ibu Kandung peserta didik.</small>
                <?=form_error('nik_ibu', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="tahun_lahir_ibu">Tahun Lahir ibu <span class="text-danger">*</span></label>
                <input type="text" class="form-control datepicker" name="tahun_lahir_ibu" value="<?=set_value('tahun_lahir_ibu');?>">
                <small class="form-text text-muted">Tahun lahir ibu Kandung peserta didik.</small>
                <?=form_error('tahun_lahir_ibu', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="pendidikan_ibu">Pendidikan</label>
                <?=form_dropdown('pendidikan_ibu', $pendidikan_ayah, set_value('pendidikan_ibu'), 'class="form-control"');?>
                <small class="form-text text-muted">Pendidikan terakhir ibu kandung peserta didik.</small>
              </div>
              <div class="form-group">
                <label for="pekerjaan_ibu">Pekerjaan</label>
                <?=form_dropdown('pekerjaan_ibu', $pekerjaan_ayah, set_value('pekerjaan_ibu'), 'class="form-control"');?>
                <small class="form-text text-muted">Pekerjaan utama ibu kandung peserta didik. Pilih Meninggal Dunia apabila ibu Kandung peserta didik telah meninggal.</small>
              </div>
              <div class="form-group">
                <label for="penghasilan_ibu">Penghasilan Bulanan</label>
                <?=form_dropdown('penghasilan_ibu', $penghasilan_ayah, set_value('penghasilan_ibu'), 'class="form-control"');?>
                <small class="form-text text-muted">Rentang penghasilan ibu kadung peserta didik. Kosongkan kolom ini apabila ibu kandung peserta didik telah meninggal dunia atau tidak bekerja.</small>
              </div>
              <div class="form-group">
                <label for="kebutuhan_khusus_ibu">Berkebutuhan Khusus</label>
                <?=form_dropdown('kebutuhan_khusus_ibu', $kebutuhan_khusus, set_value('kebutuhan_khusus_ibu'), 'class="form-control"');?>
                <small class="form-text text-muted">Kebutuhan khusus yang disandang oleh  ibu peserta didik.</small>
              </div>
            </div>

            <div class="card-header">DATA WALI #5</div>
            <div class="card-body">
              <div class="form-group">
                <label for="nama_wali">Nama Wali</label>
                <input type="text" class="form-control" name="nama_wali" value="<?=set_value('nama_wali');?>">
                <small class="form-text text-muted">Nama wali peserta didik sesuai dokumen resmi yang berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Alm., Dr., Drs., S.Pd, dan H.)</small>
                <?=form_error('nama_wali', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="nik_wali">NIK wali</label>
                <input type="text" class="form-control" name="nik_wali" value="<?=set_value('nik_wali');?>">
                <small class="form-text text-muted">Nomor Induk Kependudukan yang tercantum pada Kartu Keluarga atau KTP wali peserta didik.</small>
                <?=form_error('nik_wali', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="tahun_lahir_wali">Tahun Lahir wali</label>
                <input type="text" class="form-control datepicker" name="tahun_lahir_wali" value="<?=set_value('tahun_lahir_wali');?>">
                <small class="form-text text-muted">Tahun lahir wali peserta didik.</small>
                <?=form_error('tahun_lahir_wali', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="pendidikan_wali">Pendidikan</label>
                <?=form_dropdown('pendidikan_wali', $pendidikan_ayah, set_value('pendidikan_wali'), 'class="form-control"');?>
                <small class="form-text text-muted">Pendidikan terakhir wali peserta didik.</small>
              </div>
              <div class="form-group">
                <label for="pekerjaan_wali">Pekerjaan</label>
                <?=form_dropdown('pekerjaan_wali', $pekerjaan_ayah, set_value('pekerjaan_wali'), 'class="form-control"');?>
                <small class="form-text text-muted">Pekerjaan utama wali peserta didik. Pilih Meninggal Dunia apabila wali peserta didik telah meninggal.</small>
              </div>
              <div class="form-group">
                <label for="penghasilan_wali">Penghasilan Bulanan</label>
                <?=form_dropdown('penghasilan_wali', $penghasilan_ayah, set_value('penghasilan_wali'), 'class="form-control"');?>
                <small class="form-text text-muted">Rentang penghasilan wali kadung peserta didik. Kosongkan kolom ini apabila wali peserta didik telah meninggal dunia atau tidak bekerja.</small>
              </div>
              <div class="form-group">
                <label for="kebutuhan_khusus_wali">Berkebutuhan Khusus</label>
                <?=form_dropdown('kebutuhan_khusus_wali', $kebutuhan_khusus, set_value('kebutuhan_khusus_wali'), 'class="form-control"');?>
                <small class="form-text text-muted">Kebutuhan khusus yang disandang oleh  wali peserta didik.</small>
              </div>
            </div>
          </div>

          <div class="card bg-light mb-3">
            <div class="card-header">DATA RINCIAN PESERTA DIDIK #6</div>
            <div class="card-body">
              <div class="form-group">
                <label for="tinggi_badan">Tinggi Badan <span class="text-danger">*</span></label>
                <div class="input-group">
                  <input type="number" class="form-control" name="tinggi_badan" value="<?=set_value('tinggi_badan');?>">
                  <div class="input-group-prepend">
                    <div class="input-group-text">CM</div>
                  </div>
                </div>
                <small class="form-text text-muted">Tinggi badan pada satuan sentimeter.</small>
                <?=form_error('tinggi_badan', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="berat_badan">Berat Badan <span class="text-danger">*</span></label>
                <div class="input-group">
                  <input type="number" class="form-control" name="berat_badan" value="<?=set_value('berat_badan');?>">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Kg</div>
                  </div>
                </div>
                <small class="form-text text-muted">Berat badan pada satuan kilogram.</small>
                <?=form_error('berat_badan', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="jumlah_saudara_kandung">Jumlah Saudara Kandung <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="jumlah_saudara_kandung" value="<?=set_value('jumlah_saudara_kandung');?>">
                <small class="form-text text-muted">Jumlah saudara kandung yang dimiliki peserta didik. Kosongkan apabila peserta adalah anak tunggal</small>
                <?=form_error('jumlah_saudara_kandung', '<small class="form-text text-danger">', '</small>');?>
              </div>

            </div>
          </div>

        </div>

        <!-- #2 Data Orang Tua -->
        <div class="col-md-4">
          
          <div class="card bg-light mb-3 sticky-top">
            <div class="card-header">REGISTRASI PESERTA DIDIK #6</div>
            <div class="card-body">
              
              <div class="form-group">
                <label for="shun">Foto Scan SHUN <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="shun">
                <small class="form-text text-muted">Foto scan SHUN atau Surat Keterangan Lulus dari SMP/MTs telah dilegalisir. Ukuran max 3MB, format: JPG,JPEG,PNG</small>
                <?=form_error('shun', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="pas_foto">Pas Foto 3x4 <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="pas_foto">
                <small class="form-text text-muted">Pas foto hitam putih ukuran 3x4. ukuran max 1MB. , format: JPG,JPEG,PNG</small>
                <?=form_error('pas_foto', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="kartu_keluarga">Kartu keluarga <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="kartu_keluarga">
                <small class="form-text text-muted">Foto scan kartu keluarga. ukuran max 3MB. , format: JPG,JPEG,PNG</small>
                <?=form_error('kartu_keluarga', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="ktp_orang_tua">KTP Orang Tua <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="ktp_orang_tua">
                <small class="form-text text-muted">Foto scan KTP orang tua. ukuran max 1MB. , format: JPG,JPEG,PNG</small>
                <?=form_error('ktp_orang_tua', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="akta_kelahiran">Akta Kelahiran <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="akta_kelahiran">
                <small class="form-text text-muted">Foto scan Akta Kelahiran. ukuran max 3MB. , format: JPG,JPEG,PNG</small>
                <?=form_error('akta_kelahiran', '<small class="form-text text-danger">', '</small>');?>
              </div>

            </div>
          </div>
          
        </div>

      </div>
      <button type="submit" class="btn btn-primary">Submit Pendaftaran</button>
    </form>
    <?php else: ?>
    <section class="col-sm-12 mb-5">
      <div class="page-header"><h3>MAAF PENDAFTARAN SUDAH DITUTUP</h3></div>
      <p>Jika sudah mendaftar, silahkan <a href="<?=site_url('cetak');?>">cetak bukti pendaftaran</a></p>
    </section>
    <?php endif; ?>
  </div>

</main>
