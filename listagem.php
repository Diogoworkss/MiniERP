<?php 


    $host = 'localhost';
    $user = 'root';
    $pwd = 'matrix';
    $bd = 'diogo';

    $conexao = mysqli_connect($host, $user, $pwd, $bd);
    $query = "select * from produtos where nome is not null";

    $res = mysqli_query($conexao, $query);
    $row[] = '';

    

    while ($rows[] = mysqli_fetch_array($res)){   

        if( isset($rows['codigo']) && isset($rows['nome']) && isset($rows['marca']) && isset($rows['estoque']) && isset($rows['preco']) && isset($rows['marca']))  { 

        $codigo = $rows['codigo'];
        $nome = $rows['nome'];
        $marca = $rows['marca'];
        $estoque = $rows['estoque'];
        $preco = $rows['preco'];
        $referencia = $rows['referencia'];

        }

    }





?>




<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="listagem.css">

    <title>Page1</title>
</head>

<body>
    <section class="mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header py-2">
                            <p style="font-size:medium" id="title" class=""> LISTAGEM DE PRODUTOS </p>
                            <a id="incluir" class="nav-link" href="form.php">Incluir Produto</a>
                            
                        </div>
                        <div class="card-body">                                                
                            <div class="table-responsive table mb-0 pt-3 pe-2">
                                <table class="table table-striped table-sm my-0 mydatatable">
                                
                                    <thead>
                                        <tr>
                                            <th>CÓDIGO</th>
                                            <th>NOME</th>
                                            <th>MARCA</th>
                                            <th>ESTOQUE</th>
                                            <th>PREÇO</th>
                                            <th>REFERENCIA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    

                                        <?php 
                                        
                                        foreach ($rows as $row)
                                        {
                                            if (!empty($row['codigo']))
                                            {
                                            
                                             echo 
                                             '<tr>
                                             <td>'.$row['codigo'].'</td>
                                             <td>'.$row['nome'].'</td>
                                             <td>'.$row['marca'].'</td>
                                             <td>'.$row['estoque'].'</td>
                                             <td>'.$row['preco'].'</td>
                                             <td>'.$row['referencia'].'</td>                                                

                                             </tr>';

                                            }
                                        
                                        }

                                        ?>
                                        
                                   


                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>


