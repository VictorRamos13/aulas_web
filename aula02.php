<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 02</title>
        
    </head>
    <body>

    <!--
        &letraCÓDIGO;
        tilde ~
        cedil - cedilha
        circ ^
        acute ´
    -->
        <form name="frmCadastro"
            action="processa.php"
            method="get"
            enctype="multipart/form-data">
            <table border="1px">
                <tr>
                    <td>
                        Nome: 
                    </td>
                    <td> <!-- types: date, number, text, password, button -->
                        <input 
                            type="text"
                            name="txtNome"
                            value="oi">
                    </td>
                </tr>
                <tr>
                    <td align="right" colspan="2">
                        <input type="reset" name="btnLimpar" value="Limpar" />
                        <input type="submit" name="btnSalvar" value="Salvar" />

                    </td>
                </tr>
            </table>
        </form>
        
    </body>
</html>