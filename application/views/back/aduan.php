
<p><?php
// print_r($_SESSION); 
?></p>
<h1 class="mt-4">Aduan Saya</h1><hr>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">
  Tambah Aduan
</button>
<br>
<br>
<?php $this->view('message')?>
<table class="table table-hover">
    <thead>
        <tr>
        <th>#</th>
        <th>Waktu Lapor</th>
        <th>Nama Terlapor</th>
        <th>Bukti</th>
        <th>Status</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach($row->result() as $key=> $data) {?>
        <tr>
            <td><?=$no++?></td>
            <td><?=indo_date($data->waktu)?></td>
            <td><?=$data->nama_terlapor?></td>
            <td><?=$data->bukti?></td>
            <td><?php $status = $data->status_id;
            if($status <= 1){
                echo "Terdaftar";
            }else{
                echo "Diproses";
            }
            ?></td>
            <td>-</td>
        </tr>
        <?php }?>
    </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Aduan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- isi -->
        <?php echo form_open_multipart('aduan/proses') ?>
                <div class="form-group ">
                    <label for="">Nama *</label>
                    <input type="hidden" value="<?=$this->islogin->data_login()->user_id?>" name="user_id">
                    <input type="text" name="nama" value="aaa" class="form-control" required>
                </div>
                <div class="form-group ">
                    <label for="">Telp / HP *</label>
                    <input type="number" value="123456" name="telp" value="" class="form-control" required>
                </div>
                <div class="form-group ">
                    <label for="">Email *</label>
                    <input name="email" value="aaa@gmail.com" class="form-control" required>
                </div>
                <div class="form-group ">
                    <label for="">Nama Terlapor *</label>
                    <input name="nama_terlapor" value="aaa" class="form-control" required>
                </div>
                <div class="form-group ">
                    <label for="">Jabatan *</label>
                    <input name="jabatan" value="aaa" class="form-control" required>
                </div>
                <div class="form-group ">
                    <label for="">Pelanggaran *</label>
                    <input name="pelanggaran" value="aaa" class="form-control" required>
                </div>
                <div class="form-group ">
                    <label for="">Waktu *</label>
                    <input type="date" name="waktu" class="form-control" required>
                </div>
                <div class="form-group ">
                    <label for="">Lokasi *</label>
                    <textarea name="lokasi" value="aaa" class="form-control" required></textarea>
                </div>
                <div class="form-group ">
                    <label for="">Kronologi *</label>
                    <textarea name="kronologi"  value="aaa" class="form-control" required></textarea>
                </div>
                <div class="form-group ">
                    <label for="">Bukti *</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <!-- end isi -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
