<?= $this->extend('layouts/default') ?>

<!-- set the title of the page -->
<?= $this->section('title') ?>About<?= $this->endSection() ?>

<!-- set the content of the page -->
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-success">About</h1>
            <p>Welcome to the About page of Book Collection.</p>
            <p>Book Collection is an application designed to help users explore various collections of books. It allows users to browse through different genres, authors, and more.</p>
            <p>Book Collection is developed by Mark Wayne Menorca.</p>
            <p>&copy; 2024 Book Collection. All rights reserved.</p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
