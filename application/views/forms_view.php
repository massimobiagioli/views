<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Forms</title>
</head>
<body>
    <div>
        <form method="post" action="<?php echo base_url(); ?>/Forms/handle_data_head">
            <div>
                <span>Chiave: </span>
                <input name="txtChiave" type="text"/>
            </div>
            <div>
                <button type="submit">Conferma</button>
            </div>            
        </form>
    </div>
    <div>
        <form method="post" action="<?php echo base_url(); ?>/Forms/handle_data">
            <div>
                <span>Nome: </span>
                <input name="txtNome" type="text"/>
            </div>
            <div>
                <span>Cognome: </span>
                <input name="txtCognome" type="text"/>
            </div>
            <div>
                <button type="submit">Invia</button>
            </div>
        </form>
    </div>
</body>
</html>