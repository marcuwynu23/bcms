<?= $this->extend('layouts/default') ?>

<!-- set the title of the page -->
<?= $this->section('title') ?>Show Book<?= $this->endSection() ?>

<!-- set the content of the page -->
<?= $this->section('content') ?>
<div class="container mt-2 p-4">
    <h1 class="fs-2 fw-bold text-success">Book Details</h1>
    <div class="card border-0 shadow-sm bg-light mb-3">
        <div class="container d-flex justify-content-center align-items-center">
				<img src="<?= $book['image'] ?>" class="card-img-top w-50 h-50" alt="<?= $book['title'] ?>" loading="lazy">
				</div>
        <div class="card-body">
            <h5 class="card-title"><?= $book['title'] ?></h5>
            <p class="card-text">Author: <?= $book['author'] ?></p>
            <p class="card-text">Description: <?= $book['description'] ?></p>
        </div>
    </div>
    <a href="<?= site_url('book/update/' . $book['id']) ?>" class="btn btn-primary">Edit</a>
    <a href="<?= site_url('book/delete/' . $book['id']) ?>" class="btn btn-danger">Delete</a>
</div>
<?= $this->endSection() ?>
