<div class="text-center">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#1d1d1d" fill-opacity="10" d="M0,96L48,122.7C96,149,192,203,288,192C384,181,480,107,576,80C672,53,768,75,864,101.3C960,128,1056,160,1152,165.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
  <footer>
    <img class="logo2" src="<?php echo base_url('assets/img/Logo SIMILU transparan.png'); ?>">
    <p class="font-weight-bold text-center"> Copyright ©2022 SIMILU All Rights Reserved. </p>
  </footer>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo base_url('assets/'); ?>js/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>sweetalert/sweetalert2.all.min.js"></script>
<<<<<<< HEAD
<script>
  $(document).ready(function() {
    $('.nav-active').on('click', function() {
      $('.nav-active').removeClass('active');
      $(this).addClass('active');
    });
    $('.btn-success').on('click', function() {
      let nama_kandidat = $(this).data('nama_kandidat');
      let id_user = $(this).data('id_user');

=======

<script>
  $(document).ready(function(){
    $('.nav-active').on('click', function(){
      $('.nav-active').removeClass('active');
      $(this).addClass('active');
    });

    $('.btn-success').on('click', function() {
      let nama_kandidat = $(this).data('nama_kandidat');
      let id_user = $(this).data('id_user');

>>>>>>> 79c003ce44f39c152dbb94209723c263038e0b9b
      Swal.fire({
        title: 'Apakah Anda Yakin?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            type: 'post',
<<<<<<< HEAD
            url: '<?= base_url('home/pilih_kandidat') ?>',
=======
            url: '<?php echo site_url('home/pilih_kandidat'); ?>',
>>>>>>> 79c003ce44f39c152dbb94209723c263038e0b9b
            dataType: 'json',
            data: {
              'nama_kandidat': nama_kandidat,
              'id_user': id_user,
            },
            success: function(result) {
              if (result.success == true) {
<<<<<<< HEAD
                alert('okey');
=======
                alert('ok');
>>>>>>> 79c003ce44f39c152dbb94209723c263038e0b9b
              }
            }
          })
        }
      })
<<<<<<< HEAD


=======
>>>>>>> 79c003ce44f39c152dbb94209723c263038e0b9b
    })
  });
</script>


</body>

</html>