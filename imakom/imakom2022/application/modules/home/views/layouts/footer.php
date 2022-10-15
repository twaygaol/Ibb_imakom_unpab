<!-- Modal Detail Pengumuman -->
<div class="modal fade" id="modal-pengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pengumuman-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="detail-pengumuman-modal">
            
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Detail Pengumuman -->


<!-- Modal Detail Agenda -->
<div class="modal fade" id="modal-agenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title agenda-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="detail-agenda-modal">
            
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Detail Agenda -->




    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">

                    <!-- ##### Google Maps ##### -->
    <!-- <div class="map-area">
        <div id="googleMap"></div>
    </div> -->

    
    <!-- Google Maps -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/google-map/map-active.js"></script> -->
                    <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="" class="text-light" style="font-weight: bold; font-size: 25px;">IMAKOM</a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> , IMAKOM-UNPAB All rights reserved <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span style="color:white;">SALAM KREATIF & BERSAHABAT</span> </a>
                
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>FOLLOW US</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
      
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?= base_url() ?>theme/clever/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url() ?>theme/clever/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->  
    <script src="<?= base_url() ?>theme/clever/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?= base_url() ?>theme/clever/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= base_url() ?>theme/clever/js/active.js"></script>

    <script src="<?= base_url('asset/vendor/AdminLTE-3.0.1/plugins/toastr/') ?>toastr.min.js"></script>
    <!-- <script src="<?= base_url('asset/vendor/AdminLTE-3.0.1/plugins/sweetalert2/') ?>sweetalert2.min.js"></script> -->
    
<!-- toast flashdata -->
<?php if ($this->session->flashdata('success')): ?>
<div class="success-message"><?= $this->session->flashdata('success') ?></div>
<script type="text/javascript">
    toastr.success($(".success-message"))
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('info')): ?>
<div class="info-message"><?= $this->session->flashdata('info') ?></div>
<script type="text/javascript">
    toastr.info($(".info-message"))
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('warning')): ?>
<div class="warning-message"><?= $this->session->flashdata('warning') ?></div>
<script type="text/javascript">
    toastr.warning($(".warning-message"))
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
<div class="error-message"><?= $this->session->flashdata('error') ?></div>
<script type="text/javascript">
    toastr.error($(".error-message"))
</script>
<?php endif; ?>

<script type="text/javascript">
    
    $(".detail-pengumuman").click(function() {
        let id_pengumuman = $(this).attr('id')
        $.ajax({
            url: "<?= base_url('home/Pengumuman/show_pengumuman/') ?>"+id_pengumuman,
            type: "GET",
            dataType: "JSON",
            success:function(response){
                $("#modal-pengumuman").modal("show")
                $(".detail-pengumuman-modal").html(response.pengumuman_deskripsi)
                $(".pengumuman-title").html(response.pengumuman_nama)
            },
            error:function(){
                console.log('Gagal mengambil data')
            }
        })
    });

    $(".detail-agenda").click(function() {
        let id_agenda = $(this).attr('id')
        $.ajax({
            url: "<?= base_url('home/Agenda/show_agenda/') ?>"+id_agenda,
            type: "GET",
            dataType: "JSON",
            success:function(response){
                $("#modal-agenda").modal("show")
                $(".detail-agenda-modal").html(response.agenda_deskripsi)
                $(".agenda-title").html(response.agenda_nama)
            },
            error:function(){
                console.log('Gagal mengambil data')
            }
        })
    });

</script>
<!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?= base_url() ?>theme/template/js/lib/jquery-3.2.1.min.js"></script>
        <script src="<?= base_url() ?>theme/template/js/lib/a-library.js"></script>

            <script type="text/javascript">(function(){window['__CF$cv$params']={r:'6c1f637b39194a02',m:'fS07O9W_NK1.uDQ.ovkBn9VpAiaMGqVD4cyYCsQFCfo-1640239425-0-AdfMdx7TnZUxSqAwr4NaXt8ktZgYapkAI5t4lBYPzsWyZ9xS6Vi4/LtJw9ghf3kTXg/VDqZgzquLz5OKq6EdtspXnpChc9dJBRBKViaR76kBCZxWTDCfbmk0njXhUCNJzuUHJxZYXLm3HtnVUxkqRZM=',s:[0x293c9eafd3,0xd5b655de11],}})();</script> -->

</body>
</html>