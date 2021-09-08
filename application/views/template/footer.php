<footer class="main-footer">
    <strong>Copyright &copy; 2021 Mochamad Yusuf
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url();?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Material Design -->
<script src="<?=base_url();?>assets/js/material.min.js"></script>
<script src="<?=base_url();?>assets/js/ripples.min.js"></script>
<script>
    $.material.init();
</script>
<script src="<?=base_url();?>/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?=base_url();?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Morris.js charts -->
<script src="<?=base_url();?>bower_components/raphael/raphael.min.js"></script>
<!-- <script src="<?=base_url();?>bower_components/morris.js/morris.min.js"></script> -->
<!-- Sparkline -->
<script src="<?=base_url();?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<!--<script src="<?=base_url();?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>-->
<!--<script src="<?=base_url();?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>-->
<!-- jQuery Knob Chart -->
<script src="<?=base_url();?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url();?>bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url();?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?=base_url();?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?=base_url();?>plugins/iCheck/icheck.min.js"></script>
<!-- Slimscroll -->
<script src="<?=base_url();?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url();?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="<?=base_url();?>assets/js/pages/dashboard.js"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>assets/js/demo.js"></script>
<!-- <script src="<?=base_url()?>node_modules/gijgo/js/gijgo.min.js"></script> -->
<script src="<?=base_url()?>node_modules/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
<script src="<?=base_url()?>node_modules/jquery-form-validator/form-validator/jquery.form-validator.min.js"></script>

<!-- DataTables -->
<script src="<?=base_url()?>node_modules/datatables.net/js/jquery.dataTables.js"></script>
<script src="<?=base_url()?>node_modules/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
			format: 'yyyy-mm-dd',
      autoclose: true
    })

    $('#datepickerYear').datepicker({
			format: 'yyyy',
      autoclose: true,
			startView: 2,
    	minViewMode: 2
    })

  });
  $.validate({
    modules : 'html5,file,security,location'
  });

	$(function () {
    $('#DataTable').DataTable({
			responsive: true
		})
  });

	    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
</script>
</body>
</html>
