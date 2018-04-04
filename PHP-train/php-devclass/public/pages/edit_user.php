<?= get('message') ?>

<?php

$user = find('users', 'id', $_GET['id']);
// dd($user);

?>

<form action="pages/forms/update_user.php" method="post" role="form">
    <legend>Cadastro</legend>

<div class="form-group">
    <label for="">Nome</label>
    <input type="text" class="form-control" name="name" id="" value="<?=$user->name?>" placeholder="Digite o seu nome">
</div>

<input type="hidden" name="id" value="<?=$user->id?>">


<div class="form-group">
    <label for="">Sobrenome</label>
    <input type="text" name="surname" class="form-control" id="" value="<?=$user->surname?>" placeholder="Digite o sobrenome">
</div>

<div class="form-group">
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" id="" value="<?=$user->email?>" placeholder="Digite o seu email">
</div>

<div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" name="password" value="<?=$user->password?>" id=""></input>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<a class="btn btn-success"href="/studies/PHP-train/php-devclass/public/">Voltar</a>


</form>