<?= $this->extend('layouts/default') ?>

<!-- set the title of the page -->
<?= $this->section('title') ?>Account<?= $this->endSection() ?>

<!-- set the content of the page -->
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-success">Account</h1>
            <p>Welcome to your account page. Here you can manage your account settings and preferences.</p>
            <!-- Add more content related to account settings as needed -->
            <hr>
            <h2 class="text-success">Logout</h2>
            <p>If you wish to logout, you can click the button below:</p>
            <form action="<?= site_url('logout') ?>" method="post">
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
