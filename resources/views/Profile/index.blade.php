<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body style="background-color:#eee;">

    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>MEDSIS</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </div>
<section style="background-color:#eee; width: 100%; heigth: 100% ">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Fridson Firmino</h5>
            <p class="text-muted mb-1">Paciente</p>
            <p class="text-muted mb-4">Angola, Luanda</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-danger">Eliminar
              </button>
              <button type="button" class="btn btn-outline-primary ms-1">Editar</button>
            </div>
          </div>
        </div>
        

        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="btn list-group-item d-flex align-items-center p-3">
                <i class="" style="color: #3b5998;"></i>
                <p class="mb-0">MENU</p>
              </li>
              <li class="btn list-group-item d-flex  align-items-center gap-3 ps-5">
                <i class="fa fa-solid- fa-calendar-plus" style="color: #3b5998;"></i>
                <p class="mb-0">PENDÊNCIAS</p>
              </li>
              <li class="btn list-group-item d-flex  align-items-center gap-3 ps-5">
                <i class="fa fa-solid- fa-calendar-plus" style="color: #3b5998;"></i>
                <p class="mb-0">AGENDAR PROCEDIMENTO</p>
              </li>
              <li class="btn list-group-item d-flex  align-items-center gap-3 ps-5">
                <i class="fa fa-solid- fa-calendar-plus" style="color: #3b5998;"></i>
                <p class="mb-0">SOLICITAR INTERNAMENTO</p>
              </li>
              <li class="btn list-group-item d-flex  align-items-center gap-3 ps-5">
                <i class="fa fa-solid- fa-calendar-plus" style="color: #3b5998;"></i>
                <p class="mb-0">VER PACIENTES</p>
              </li>
              <li class="btn list-group-item d-flex  align-items-center gap-3 ps-5">
                <i class="fa fa-solid- fa-calendar-plus" style="color: #3b5998;"></i>
                <p class="mb-0">ENVIAR MENSAGEM</p>
              </li>
              <li class="btn list-group-item d-flex  align-items-center gap-3 ps-5">
                <i class="fa fa-solid- fa-calendar-plus" style="color: #3b5998;"></i>
                <p class="mb-0">DEFINIR HORÁRIOS</p>
              </li>
              <li class="btn list-group-item d-flex  align-items-center gap-3 ps-5">
                <i class="fa fa-solid- fa-calendar-plus" style="color: #3b5998;"></i>
                <p class="mb-0">LOGOUT</p>
              </li>
            </ul>
          </div>
        </div>

      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nome Completo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Fridson Firmino</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">fridsoncmf@gmail.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telefone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(244) 943603570 </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Localização</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Angola, Luanda</p>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nome Completo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Fridson Firmino</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">fridsoncmf@gmail.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telefone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(244) 943603570 </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Localização</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Angola, Luanda</p>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nome Completo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Fridson Firmino</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">fridsoncmf@gmail.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telefone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(244) 943603570 </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Localização</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Angola, Luanda</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          
          
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>