<html lang="en">
<head>
	<title>Web App - <?= $this->renderSection('title') ?> </title>
	<!-- include the meta tags -->
	<?= $this->include('includes/metas') ?>
	<!-- include the style dependencies -->
	<?= $this->include('includes/style-deps') ?>
</head>
<body>
	<?= $this->include('includes/sidebar') ?>
	<?= $this->renderSection('content') ?>
	<!-- include the script dependencies -->
	<?= $this->include('includes/script-deps') ?>
</body>
</html>