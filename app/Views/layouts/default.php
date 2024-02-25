<html lang="en">
<head>
	<title>BCMS - <?= $this->renderSection('title') ?> </title>
	<!-- include the meta tags -->
	<?= $this->include('includes/metas') ?>
	<!-- include the style dependencies -->
	<?= $this->include('includes/style-deps') ?>

	<!-- implement static files css using the link from static folder -->
	<link rel="stylesheet" href="<?= base_url('/css/style.css') ?>">
</head>
<body>
	<?= $this->include('includes/navbar') ?>
	<div class="container p-4">
	<?= $this->renderSection('content') ?>
	</div>
	<?= $this->include('includes/footer') ?>
	<!-- include the script dependencies -->
	<?= $this->include('includes/script-deps') ?>
	<!-- implement static files js using the link from static folder -->
	<script src="<?= base_url('/js/script.js') ?>"></script>
</body>
</html>