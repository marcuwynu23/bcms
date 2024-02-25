<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
		<a class="navbar-brand d-flex align-items-center" href="<?= site_url('/') ?>">
    <!-- logo -->
    <img src="https://images.vexels.com/media/users/3/157272/isolated/preview/e6d8b2a22f0f860af01343af96e94a8a-books-stacked-vector-by-vexels.png" alt="logo" class="d-inline-block me-2" style="width: 40px; height: 40px;">
    <span id="title" class="align-middle fs-3">Book Collection</span>
</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
						<li class="nav-item">
                    <a class="nav-link text-success fs-5" href="/home">
                     	Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success fs-5" href="<?= site_url('book') ?>">
                      Books
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success fs-5" href="<?= site_url('account') ?>">
                      Account
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success fs-5" href="<?= site_url('about') ?>">
                      About
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
