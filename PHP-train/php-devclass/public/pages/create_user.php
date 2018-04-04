<?= get('message') ?>

<form action="pages/forms/create_user.php" method="post" role="form">
    <legend>Cadastro</legend>

<div class="form-group">
    <label for="">Nome</label>
    <input type="text" class="form-control" name="name" id="" placeholder="Digite o seu nome">
</div>


<div class="form-group">
    <label for="">Sobrenome</label>
    <input type="text" name="surname" class="form-control" id="" placeholder="Digite o assunto">
</div>

<div class="form-group">
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" id="" placeholder="Digite o seu email">
</div>

<div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" name="password" id=""></input>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

<a class="btn btn-success"href="/studies/PHP-train/php-devclass/public/">Voltar</a>

</form>