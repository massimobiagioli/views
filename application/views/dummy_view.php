<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dummy View</title>
    <script src="<?php echo assets_vendor_jquery_url(); ?>"></script>
    <script src="<?php echo assets_vendor_xtagcore_url() ?>"></script>
    <script src="<?php echo assets_js_url(); ?>/dummy-bundle.min.js"></script>
    
    <script>
    $(function() {
       $.ajax({
           url: '<?php echo base_url(); ?>/Dummy/dummy_content'
       }).done(function(data) {
           $('#content').html(data);
       });
    });
    </script>
    
</head>
<body>
    <dummy-component text="asdf"></dummy-component>
    <div id="content"></div>
</body>
</html>