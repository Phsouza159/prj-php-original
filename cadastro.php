<?php
function cadastro($pag_cadastro)
{
  echo "
    <form name 'form1' action='operacoes.php?acao=novo&pag_cadastro=".$pag_cadastro."' method='post'>
      <table style='width:100%;height:125px;'>
          <tr>
            <th>
              NOME:
            </th>
            <th valign='center'>
            </br>  <input class='form-control' type='text' id='nome' name='nome' value='' placeholder='Ex: João' /></br>
            </th>
          </tr>
          <tr>
            <th>
              CPF:
            </th>
            <th>
              </br><input class='form-control' type='text' id='cpf' name='cpf' value='' placeholder='Ex: 111.222.333-44'/></br>
            </th>
          </tr>
          <tr>
            <th>
              DATA DE NASCIMENTO:
            </th>
            <th>
              </br><input class='form-control' type='date' id='data' name='data_nascimento' value='' placeholder='Ex: 2018-05-28'/></br>
            </th>
          </tr>
          <tr>
            <tr>
              <th colspan='2'>
                <center>
                  </br><button type='submit' class=' btn-default'>Gravar</button></br>
                </center>
              </th>
            </tr>
          </tr>
      </table>
    </form>
  ";
}
 ?>
