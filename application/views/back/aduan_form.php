
<p><?php
// print_r($_SESSION); 
?></p>
<h1 class="mt-4"><?=ucfirst($page)?> Aduan</h1><hr>

<div class="box-body ">
    <div class="row">
        <div class="col-md-4 col-md-offset-8">
            <form action="<?=site_url('customer/process')?>" method="post">
                <div class="form-group ">
                    <label for="">Nama *</label>
                    <input type="hidden" name="customer_id" value="<?=$row->nama?>">
                    <input type="text" name="customer_name" value="<?=$row->nama?>" class="form-control" required>
                </div>
                <div class="form-group ">
                    <label for="">Telp / HP *</label>
                    <input type="number" name="phone" value="<?=$row->telp?>" class="form-control" required>
                </div>
                <div class="form-group ">
                    <label for="">Email *</label>
                    <input name="addr" class="form-control" required><?=$row->nama?>
                </div>
                <div class="form-group ">
                    <label for="">Nama Terlapor *</label>
                    <input name="addr" class="form-control" required><?=$row->nama?>
                </div>
                <div class="form-group ">
                    <label for="">Jabatan *</label>
                    <input name="addr" class="form-control" required><?=$row->nama?>
                </div>
                <div class="form-group ">
                    <label for="">Pelanggaran *</label>
                    <input name="addr" class="form-control" required><?=$row->nama?>
                </div>
                <div class="form-group ">
                    <label for="">Waktu *</label>
                    <input type="date" name="waktu" class="form-control" required><?=$row->nama?>
                </div>
                <div class="form-group ">
                    <label for="">Lokasi *</label>
                    <textarea name="addr" class="form-control" required><?=$row->nama?></textarea>
                </div>
                <div class="form-group ">
                    <label for="">Kronologi *</label>
                    <textarea name="addr" class="form-control" required><?=$row->nama?></textarea>
                </div>
                <div class="form-group ">
                    <label for="">Bukti *</label>
                    <input type="file" name="bukti" class="form-control" required><?=$row->nama?>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-flat" type="submit" name="<?=$page?>"><i class="fa fa-paper-plane"></i> Submit</button>
                    <button class="btn btn-flat" type="reset"><i class="fa fa-xing"></i> Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

