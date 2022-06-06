<?=$this->extend("layouts/default")?>

<?=$this->section("title")?>User<?=$this->endSection()?>

<?=$this->section("content")?>

<h1>User</h1>

<a href="<?=site_url('/tasks')?>">&laquo; back to index</a>

<dl>
    <dt>Name</dt>
    <dd><?=esc($user->name)?></dd>

    <dt>Email</dt>
    <dd><?=esc($user->email)?></dd>

    <dt>Created at</dt>
    <dd><?=$user->created_at?></dd>

    <dt>Administrator</dt>
    <dd><?=$user->is_admin ? 'yes' : 'no'?></dd>

    <dt>Updated at</dt>
    <dd><?=$user->updated_at?></dd>
</dl>

<a href="<?=site_url("/admin/users/edit/" . $user->id)?>">Edit</a>

<?php if($user->id != current_user()->id): ?>
    <a href="<?=site_url("/admin/users/delete/" . $user->id)?>">Delete</a>
<?php endif; ?>

<?=$this->endSection()?>