    <div id="base-url" style="display:none;" url="<?php echo base_url(); ?>"></div>
    <div id="loading">
        <img id="loading-image" src="<?php echo base_url();?>assets/backend/img/loading.gif" alt="Loading..." />
    </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/backend/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/backend/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/backend/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/backend/dist/js/custom.js"></script>

    <!-- tinymce editor -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/backend/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: ".add-editor",
            skin : 'lightgray',
            plugins: "table,anchor,code,hr,preview"

         });
    </script>

</body>

</html>
