<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <style>
        <?php include "css/bulma.min.css"?>
        <?php include "css/login.css"?>
    </style>
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <div class="box">
                        <form action="/register/save" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input type="hidden" value="<?= $model->idusuario ?>" name="idusuario" id="idusuario" />
                                    <input name="usuario" id="usuario" name="text" value="<?= $model->usuario ?>" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" id="senha" class="input is-large" value="<?= $model->senha ?>" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha2" id="senha2" class="input is-large" value="<?= $model->senha2 ?>" type="password" placeholder="Confirme sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>