<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>

<!DOCTYPE html>
<html lang="en">
<?php echo @$head; ?>

<body id="page-top">

	<!--page wrapper-->
	<div id="wrapper">
		<!--content wrapper-->
		<div id="content-wrapper" class="d-flex flex-column">

		<!--main content-->
		<div id="content">

		<!--topbar-->
		<?php echo @$topbar; ?>
		<!--end topbar-->
		
		<?php echo @$content;?>
		<!--/.container-fluid-->
</div>
<!--footer-->
	<?php echo @$footer;?>
	<!--end of footer-->
	</div>
</div>
</body>
</html>