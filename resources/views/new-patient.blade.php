<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Nova Consulta &mdash; Atestar</title>

  <link href="css/style.css" rel="stylesheet">
  <link href="css/demo.css" rel="stylesheet">

  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">

</head> 
<body>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Nova Consulta</div>
          </h1>

          <div class="section-body">
            <h2 class="section-title">Dados do Paciente</h2>
            <div class="row">
              <div class="col-24 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Paciente</h4>
                  </div>
                  <div class="card-body">

                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>Nome completo</th>
                          <th>Idade</th>
                          <th>Altura</th>
                          <th>Peso</th>
                        </tr>
                        <tr>
                          <td><input type="text" name="patientName" class="form-control input-lg"></td>
                          <td><input type="text" name="patientAge" class="form-control input-lg"></td>
                          <td><input type="text" name="patientHeight" class="form-control input-lg"></td>
                          <td><input type="text" name="patientWeight" class="form-control input-lg"></td>
                        </tr>
                       
                      </table>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <h2 class="section-title">Dados do Atestado</h2>
            <div class="row mt-4">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Atestado</h4>
                  </div>
                  <div class="card-body">
                   Aqui adicionaremos o PDF sendo preenchido em Real-Time.
                  </div>
                </div>
              </div>
            </div>
             <a href="#" class="btn btn-primary">Assinar</a>
             <a href="#" class="btn btn-secondary">Gerar Atestado</a>
          </div>
        </section>
      </div>
</body>
</html>