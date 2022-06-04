<?=$this->extend('layouts/default')?>

<?=$this->section('title')?> Login<?=$this->endSection()?>

<?=$this->section('content')?>

<h1>Login</h1>

<?=form_open("/login/create")?>

    <div>
        <label for="email">email</label>
        <input type="email" name="email" id="email" value="<?=old('email')?>"/>
    </div>
    <div>
        <label for="password">password</label>
        <input type="password" name="password" id="password" "/>
    </div>
    <button>Login</button>

<?=form_close()?>

<a href="<?=site_url('/')?>">Home</a>
<?=$this->endSection()?>