<?= $this->extend('layouts/default') ?>
<!-- set the title of the page -->
<?= $this->section('title') ?>Home<?= $this->endSection() ?>
<!-- set the content of the page -->
<?= $this->section('content') ?>
<div class="container">
		<p>This is the home page.</p>
		<p>Use the links above to navigate to the about page or the contact page.</p>
		<p>Or use the link below to navigate to the about page.</p>
		<a href="<?= base_url('about') ?>">About</a>
</div>
<?= $this->endSection() ?>
