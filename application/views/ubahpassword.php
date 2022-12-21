<section class="sec1">
    <h1 class="display-4 text-center text-white mb-1 padding-top title-home">Ubah Password</h1>
    <div class="container">
        <div class="box-header" style="padding-top: 60px; width: 350px; margin: auto;">
            <?php echo $this->session->flashdata('message'); ?>
            <form action="<?php echo base_url('home/ubahpassword'); ?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="password" class="text-white">Password Lama</label>
                        <input class="form-control" type="password" name="password" 
                        id="password" placeholder="Masukkan Password Lama"/>
                        <?php echo form_error('password', '<small class="text-warning pl-1">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="new_password1" class="text-white">Password Baru</label>
                        <input class="form-control" type="password" name="new_password1" 
                        id="new_password1" placeholder="Masukkan Password Baru" />
                        <?php echo form_error('new_password1', '<small class="text-warning pl-1">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="new_password2" class="text-white">Konfirmasi Password</label>
                        <input class="form-control" type="password" name="new_password2" 
                        id="new_password2" placeholder="Konfirmasi Password" />
                        <?php echo form_error('new_password2', '<small class="text-warning pl-1">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Ganti Password</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>

</section>