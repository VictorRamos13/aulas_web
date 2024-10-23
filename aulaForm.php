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
            <!-- FORMULARIO DE CLIENTE -->
        <form name="frmCadastro" action="processa.php" method="get" enctype="multipart/form-data">
            <!-- types do inpute: hidden, text, password, date, number, button -->
            <input type="hidden" name="hddCodigo" value="Vitu Ordoni Ramu" />
            <table border="1px" width="300px" cellspacing="4px" cellpadding="5px">
                <tr>
                    <td colspan="2">Cadastro de Cliente</td>
                </tr>

                    <!-- componente text code -->
                <tr>
                    <td>C&oacute;digo:</td>
                    <td width="15%">
                        <!-- readonly = somente leitura, nao da para alterar o que tem dentro -->
                        <input type="text" name="txtCodigo" value="12346" readonly="true" />
                    </td>
                </tr>
                
                    <!-- component text name -->
                <tr>
                    <td width="15%">Nome:</td>
                    <td>
                        <input type="text" name="txtNome" value="" placeholder="Insira o nome aqui" 
                               size="100" maxlength="80" />
                        <!-- size = tamanho de caracteres que defino / maxlength = maximo de caracteres definido -->
                    </td>
                </tr>

                <tr>
                    <td width="15%">Senha:</td>
                    <td>
                        <input type="password" name="txtSenha" value="123456"  />
                        <!-- disabled = deixa o campo desabilitado, ate na varredura das variaveis -->
                    </td>
                </tr>

                    <!-- component email -->
                <tr>
                    <td width="15%">Email:</td>
                    <td>
                        <input type="text" name="txtEmail" placeholder="Insira aqui o email" 
                        size="100" maxlength="100" />
                    </td>
                </tr>


                <tr>
                    <td align="center" colspan="2">
                        <input type="reset" name="btnLimpar" value="Limpar" />
                        <input type="submit" name="btnSalvar" value="Salvar" />

                    </td>
                </tr>
            </table>
        </form>
        
    </body>
</html>