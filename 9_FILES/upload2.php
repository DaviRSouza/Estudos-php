<?php 
//var_dump($_SERVER);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['entrar']))
{
    /*echo "<pre>";
        var_dump($_FILES);
    echo "</pre>";*/

    //nome original do arquivo na maquina do cliente
    echo $_FILES ['arq']['name'];
    echo '<br>';

    //nome do arquivo no diretorio tmp no servidor
    echo $_FILES ['arq']['tmp_name'];
    echo '<br>';

    //tamanho do arquivo
    echo $_FILES ['arq']['size'];
    echo '<br>';

    //tipo do arquivo
    echo $_FILES ['arq']['type'];
    echo '<br>';

    //se teve erro ou não - e se teve, qual foi
    echo $_FILES ['arq']['error'];
    echo '<br>';

    ##################################################################################################################################################
    $temp = $_FILES['arq']['tmp_name'];
    $nome = $_FILES['arq']['name'];
    if(!empty($temp) && $_FILES ['arq']['error'] === 0)
    {
        if(!is_dir('imagens'))
        {   //criar diretorio
            mkdir('imagens',0777);
        }
        if(!file_exists('imagens/'. $_POST['tipo']))
        {   //criar diretorio
            mkdir('imagens/'. $_POST['tipo'],0777);
        }
        //mover o arquivo no servidor onde ele ficara salvo

        $destino = 'imagens/'.$_POST['tipo'] .'/'.$nome;

        move_uploaded_file($temp,$destino);
    }

}