<?= $this->extend('layouts/default') ?>

<!-- set the title of the page -->
<?= $this->section('title') ?>Book List<?= $this->endSection() ?>

<!-- set the content of the page -->
<?= $this->section('content') ?>
<div class="container mt-2 p-4">
		<h1 class="fs-2 fw-bold text-success">Book Lists</h1>
		<p class="text-muted">Explore various collections of books.</p>
        <div class="row">
        <div class="col-md-12">
            <div class=" mb-3">
                <a href="<?= site_url('book/create') ?>" class="btn btn-success fw-bold">Add Book to Collection</a>
            </div>
        </div>
    </div>
        <form action="<?= site_url('book/search') ?>" method="POST" class="mb-3 bt-">
        <div class="input-group">
            <input type="text" name="query" class="form-control" placeholder="Search for books...">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </form>
    <div class="row overflow-auto" style="max-height: 800px;">
        <?php foreach ($books as $book) : ?>
            <div class="col-md-3 mb-5">
                <div class="card border-0 shadow-sm bg-light">
                    <img src="<?= $book['image'] ?>" class="card-img-top" alt="<?= $book['title'] ?>" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title"><?= $book['title'] ?></h5>
                        <p class="card-text">Author: <?= $book['author'] ?></p>
                        <p class="card-text">Short Description: <?= $book['description'] ?></p>
                        <div class="btn-group p-2">
                        <a href="<?= site_url('book/' . $book['id'] . '/show' ) ?>" class="btn btn-success fw-bold">View Details</a>
                        <a href="<?= site_url('book/' . $book['id'] . '/edit') ?>" class="btn btn-warning fw-bold text-white">Update Book</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
<?= $this->endSection() ?>
