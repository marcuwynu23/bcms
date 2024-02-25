<?= $this->extend('layouts/default') ?>

<!-- set the title of the page -->
<?= $this->section('title') ?>Home<?= $this->endSection() ?>

<!-- set the content of the page -->
<?= $this->section('content') ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card border-0">
                <h1 class="display-1 fw-bold text-success">Welcome to Book Collections</h1>
                <div class="container fs-3">
								<p>This is a website where you can explore various collections of books.
									You can browse through different genres, authors, and more.</p>
                <p>Start exploring our collections now!</p>
								</div>
                <div class="container">
								<a href="<?= site_url('book') ?>" class="btn btn-success">Explore Books</a>
								</div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="https://images.vexels.com/media/users/3/157518/isolated/preview/c54323942a5b08df8411e33e25680ab3-pile-of-books-vector-by-vexels.png" class="img-fluid" alt="Image">
        </div>
    </div>
</div>

<?= $this->endSection() ?>
