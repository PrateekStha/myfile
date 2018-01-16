

<footer class="main-footer">
  &copy; 2017 <a href="https://www.opalinetech.com/">Stha Pratik Pvt ltd.</a>. All Rights Reserved.
</footer>

<script type="text/javascript">
	jQuery(document).ready(function($){
	
// Removes bottom margin of <p> wrapper that gets inserted around images with caption class
	$('p .image-caption-container').each(function() {
		// Make this code do what you want.
		$(this).parent().css('margin-bottom', '0px');
	});	
	
});

</script>
	 
	  
	<!-- jQuery 3 -->
	<script src="/assets/vendor_components/jquery/dist/jquery.js"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="/assets/vendor_components/jquery-ui/jquery-ui.js"></script>
	
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	
	<!-- popper -->
	<script src="/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	
	<!-- Morris.js charts -->
	<script src="/assets/vendor_components/raphael/raphael.min.js"></script>
	<script src="/assets/vendor_components/morris.js/morris.min.js"></script>
	
	<!-- Sparkline -->
	<script src="/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>
	
	<!-- daterangepicker -->
	<script src="/assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- datepicker -->
	<script src="/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	
	<!-- Bootstrap WYSIHTML5 -->
	<script src="/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
	
	<!-- Slimscroll -->
	<script src="/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- peity -->
	<script src="/assets/vendor_components/jquery.peity/jquery.peity.js"></script>
	
	<!-- Alfa_admin App -->
	<script src="/js/template.js"></script>

	<script language="javascript" type="text/javascript">
	$(function () {
	    $("#file-selector1").change(function () {
	        if (typeof (FileReader) != "undefined") {
	            var dvPreview = $("#dvPreview");
	            dvPreview.html("");
	            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
	            $($(this)[0].files).each(function () {
	                var file = $(this);
	                if (regex.test(file[0].name.toLowerCase())) {
	                    var reader = new FileReader();
	                    reader.onload = function (e) {
	                        var img = $("<img />");
	                        img.attr("style", "height:100px;width: auto;");
	                        img.attr("src", e.target.result);
	                        dvPreview.append(img);
	                    }
	                    reader.readAsDataURL(file[0]);
	                } else {
	                   alert('it is an error');
	                    dvPreview.html("");
	                    return false;
	                }
	            });
	        } else {
	            alert("This browser does not support HTML5 FileReader.");
	        }
	    });
	});
</script>

	<!-- DataTables -->
	<script src="/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
		<!-- This is data table -->
    <script src="/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
     <!-- start - This is for export functionality only -->
    <script src="/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="/assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
	<!-- Alfa_admin for Data Table -->
	<script src="/js/pages/data-table.js"></script>
	
	<!-- Select2 -->
	<script src="/assets/vendor_components/select2/dist/js/select2.full.js"></script>
	
	<!-- InputMask -->
	<script src="/assets/vendor_plugins/input-mask/jquery.inputmask.js"></script>
	<script src="/assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="/assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js"></script>
	
	<!-- date-range-picker -->
	<script src="/assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- bootstrap datepicker -->
	<script src="/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	
	<!-- bootstrap color picker -->
	<script src="/assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	
	<!-- bootstrap time picker -->
	<script src="/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- iCheck 1.0.1 -->
	<script src="/assets/vendor_plugins/iCheck/icheck.min.js"></script>
	
	<!-- Alfa_admin for advanced form element -->
	<script src="/js/pages/advanced-form-element.js"></script>

  	<!-- Alfa_admin for editor -->
	<script src="/js/pages/editor.js"></script>
		<!-- CK Editor -->
    <script src="/assets/vendor_components/ckeditor/ckeditor.js"></script>
	 <!-- Sweet-Alert  -->
   <script src="/assets/vendor_components/sweetalert/sweetalert.min.js"></script>
    <script src="/assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js"></script>
</body>


</html>
