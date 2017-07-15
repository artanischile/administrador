<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <?php $this->load->view('frontend/layout/meta',  FALSE); ?>
	
</head>
<body>
<?php $this->load->view('frontend/layout/header',  FALSE); ?>
<?php if (isset($content)){$this->load->view($content) ; }else{echo "<h1>No existe Contenido</h1>";} ?>
<?php //$this->load->view('frontend/layout/brands',  FALSE); ?>
<!-- Footer Area-->
<?php $this->load->view('frontend/layout/footer',  FALSE); ?>
<!--End Footer Area-->
<!--Script Area-->	
<?php $this->load->view('frontend/layout/scripts',  FALSE); ?>



</body>

</html>