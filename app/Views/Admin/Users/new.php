<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>New user<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>New user</h1>

<?php if(session()->has('errors')) : ?>
    <ul>
        <?php foreach(session('errors') as $error) :?>
                <li><?= $error ?></li>
        <?php endforeach;?>
    </ul>
<?php endif; ?>

<?= form_open("/admin/users/create") ?>
        
    <?= $this->include('Admin/Users/form') ?>

    <button>Save</button>
    <a href="<?= site_url('/tasks') ?>">Cancel</a>
    
<?= form_close()?>


<?= $this->endSection(); ?>
