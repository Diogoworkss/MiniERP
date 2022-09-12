



<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>login</title>
</head>

<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Digite os dados de acesso</h2>
                    <p class="w-lg-50"></p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg class="bi bi-person" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form class="text-center" method="post">
                                <div class="mb-3"><input class="form-control" type="email" id="email" name="email" placeholder="Email" /></div>
                                <div class="mb-3"><input class="form-control" type="password" id="senha" name="senha" placeholder="Senha" /></div>
                                <div class="mb-3">
                                     <button  class="btn btn-primary d-block w-100" type="submit">Entrar</button>                                    

                                     <button  class="btn bs-gray-100 d-block w-100" type="submit">Cadastrar</button> 
                                </div>
                                <p class="text-muted">Forgot your password?</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="login.js"></script>

    

</body>


</html>


<?php 

$host = 'localhost';
$user = 'root';
$pwd = 'matrix';
$bd = 'diogo';


$conexao = mysqli_connect($host, $user, $pwd, $bd );

if (isset($_POST['email']) && isset($_POST['senha']))
{
            
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = " select email, senha from usuarios where email = '$email' and senha = '$senha'";
    $res = mysqli_query($conexao, $query); 
    $row = mysqli_fetch_array($res);

    if (($row))
    {
        
        echo '<script> 
            
                window.location.href = "./listagem.php";
                alert("Seja bem vindo!!"); 
                                                                                                           
          </script>';      
    } else {
        echo '
            <script>
                alert("Usuário não cadastrado!!");
            </script>
        ';      

    }
            
    

}

