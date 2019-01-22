<h2>Alteraçãos do Cadastro de usuário</h2>

<?=get('message')?>

<?php
    $user = find('users', 'id', $_GET['id']);

?>

<form action="/pages/forms/update_user.php" method="POST" role="form">

    <input type="hidden" name="id" value="<?=$user->id?>">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu Nome" value="<?=$user->name?>">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="lastname" placeholder="Digite seu sobrenome" value="<?=$user->lastname?>">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu email" value="<?=$user->email?>">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" name="password" placeholder="Digite seu password" value="<?=$user->password?>">
    </div>

    <button type="text" class="btn btn-primary">Atualizar</button>

</form>