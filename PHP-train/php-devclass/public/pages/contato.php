<h2>contato.php</h2>

<?=get('message')?>

<form action="pages/forms/contato.php" method="POST">
    <legend>Contato</legend>

<div class="form-group">
    <label for="">Nome</label>
    <input type="text" class="form-control" name="name" id="" placeholder="Digite o seu nome">
</div>

<div class="form-group">
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" id="" placeholder="Digite o seu email">
</div>

<div class="form-group">
    <label for="">Assunto</label>
    <input type="text" name="subject" class="form-control" id="" placeholder="Digite o assunto">
</div>

<div class="form-group">
    <label for="">Mensagem</label>
    <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>