<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>App Mail Send</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"> -->
  <link rel="stylesheet" href="/semantic/semantic.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  <?php
    #require('connect.php');
    require('connect.php');
  ?>

</head>

<body>

  <div class="container">

    <div class="py-3 text-center">
      <img class="d-block mx-auto mb-2" src="logo.png" alt="avião de papel" width="72" height="72">
      <h2>Send Mail</h2>
      <p class="lead">Seu app de envio de e-mails particular!!!</p>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="ui top attached tabular menu">
          <a class="item" data-tab="form">form</a>
          <a class="item" data-tab="table">table</a>
        </div>
        <div class="ui botton attached tab segment" data-tab="form">
          <form class="ui form segment" >
            <!--<div class="three fields">-->
              <div class="field">
                <label for="para" class="mb-3 ml-5 mr-5 bg-warning">Para fulano 3:</label>
                <input type="text" name="para"class="form-control mt-0" id="para" placeholder="joao@dominio.com.br">
                <p id="p1"></p>
              </div>

              <div class="field">
                <label for="assunto">Assunto</label>
                <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Assunto do e-mail">
                <p id="p2"></p>
              </div>

              <div class="field">
                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" class="form-control" id="mensagem"></textarea>
                <p id="p3"></p>
              </div>
              <!--</div>-->
              <div class="ui primary submit button">Enviar</div>
              <div class="ui error message"></div>
            </form>
          </div>
          <div class="ui bottom attached tab segment active" data-tab="table">
            <table class="ui single line table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Registration Date</th>
                  <th>E-mail address</th>
                  <th>Premium Plan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>John Lilki</td>
                  <td>September 14, 2013</td>
                  <td>jhlilk22@yahoo.com</td>
                  <td>No</td>
                </tr>
                <tr>
                  <td>Jamie Harington</td>
                  <td>January 11, 2014</td>
                  <td>jamieharingonton@yahoo.com</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>Jill Lewis</td>
                  <td>May 11, 2014</td>
                  <td>jilsewris22@yahoo.com</td>
                  <td>Yes</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="bibliotecas/scripts/script.js"></script>
</body>
</html>