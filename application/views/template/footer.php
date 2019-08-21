

</div> <!-- container -->

</div> <!-- content -->

<footer class="footer text-right">
2019 © EDC
</footer>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->



<!-- jQuery  -->

<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>

<!-- plugin js -->
<script src="<?php echo base_url(); ?>assets//plugins/moment/moment.js"></script>
<script src="<?php echo base_url(); ?>assets//plugins/bootstrap-timepicker/bootstrap-timepicker.js"></script>
<script src="<?php echo base_url(); ?>assets//plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets//plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets//plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets//plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script src="<?php echo base_url(); ?>assets/pages/jquery.form-pickers.init.js"></script>

<!-- Parsley js -->
<script type="text/javascript" src="<?php echo base_url(); ?>plugins/parsleyjs/parsley.min.js"></script>

<!-- App js -->
<script src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

<script type="text/javascript">
$(document).ready(function() {
$('form').parsley();
});


window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 1000);

</script>

</body>
</html>