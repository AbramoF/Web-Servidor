<?php
if (!(session_status() === PHP_SESSION_ACTIVE))
    session_start();
if (empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
    header('Location: /Login');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/cadastro.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<?php
require('nav.view.php');
?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['tituloPopMD'])) {
?>
    <script>
        swal({
            title: "<?= $_SESSION['tituloPopMD'] ?>",
            text: "<?= $_SESSION['textPopMD'] ?>",
            icon: "<?= $_SESSION['iconMD'] ?>",
        })
    </script>
<?php
    unset($_SESSION['tituloPopMD']);
    unset($_SESSION['textPopMD']);
    unset($_SESSION['iconMD']);
}
?>
<?php
if (isset($_SESSION['excluirUser']) && $_SESSION['excluirUser'] == true) {
?>
    <script>
        swal({
                title: "Tem certeza?",
                text: "Todas suas senhas serão perdidas!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: "POST",
                        url: "/excluirMinhaConta"
                    }).done((response)=>{
                        window.location.replace('/Login');
                    });
                }
            });
    </script>
<?php
}
unset($_SESSION['excluirUser']);

?>

<body>
    <div class="fundo">
        <div class="container cad-container2">
            <div class="d-flex justify-content-center">
                <div class="col-md-6 cad-form-2" style="border-radius: 20px;">
                    <div class="row">
                        <div class="col">
                            <h3>Editar meus dados</h3>
                        </div>
                        <div class="col">
                            <form action="/confirmarExcluir" method="POST" style="margin-bottom: 15px">
                                <input type="hidden" name="excluir" value="excluir">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" style="margin-right: 20px"></i>Excluir conta TotalPass</button>
                            </form>
                        </div>
                    </div>
                    <form action="/salvarMeusDados" method="POST">
                        <div class="form-group">
                            <p class="erro"><?= $erros['erroNome'] ?></p>
                            <input type="text" class="form-control" placeholder="Nome *" value="<?= $nome ?>" name="inputNome" />
                        </div>
                        <div class="form-group">
                            <p class="erro"><?= $erros['erroSobrenome'] ?></p>
                            <input type="text" class="form-control" placeholder="Sobrenome *" value="<?= $sobrenome ?>" name="inputSobrenome" />
                        </div>
                        <div class="form-group">
                            <p class="erro"><?= $erros['erroEmail'] ?></p>
                            <input type="email" class="form-control" placeholder="Email *" value="<?= $email ?>" name="inputEmail" />
                        </div>
                        <div class="form-group">
                            <p class="erro"><?= $erros['erroSenha'] ?></p>
                            <input type="password" class="form-control" placeholder="Senha *" value="<?= $senha ?>" name="inputSenha" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Salvar" name="" />
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>



</html>