<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 09:33:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: MedSIS - Dashboard </title>
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"> <!-- Favicon-->
    <!-- plugin css file  -->
    <link rel="stylesheet" href="{{asset('Style/plugin/datatables/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('Style/plugin/datatables/dataTables.bootstrap5.min.css')}}">
    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('Style/css/ihealth.style.min.css')}}">
    
    <!-- Google Code  -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-264428387-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-264428387-1');
    </script>
</head>
<body>

<div id="ihealth-layout" class="theme-tradewind">
    
    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="{{route('dashboard')}}" class="mb-0 brand-icon">
                <span class="logo-icon">
                    <i class="icofont-heart-beat fs-2"></i>
                </span>
                <span class="logo-text">MEDSIS</span>
            </a>
            <!-- Menu: main ul -->

            <ul class="menu-list flex-grow-1 mt-3">
                <li class="collapsed">
                    <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#dashboard" href="#">
                    <i class="icofont-ui-home fs-5"></i> <span>Menu Principal</span> <span class="ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->

                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Doctor" href="#">
                        <i class="icofont-doctor-alt fs-5"></i>  <span>Doctor</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Doctor">
                            <li><a class="ms-link" href="{{route('admin.doctor.agendarProcedimento')}}">Agendar Procedimento</a></li>
                            <li><a class="ms-link" href="{{route('admin.doctor.listarProcedimento')}}">Procedimentos Agendados</a></li>
                            <li><a class="ms-link" href="{{route('admin.doctor.agendaMedica')}}">Agenda Médica</a></li>
                            <li><a class="ms-link" href="{{route('admin.listarPaciente')}}">Meus Pacientes</a></li>
                            <li><a class="ms-link" href="{{route('admin.doctor.pefil')}}">Meu Perfil</a></li>
                        </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Patient" href="#">
                    <i class="icofont-blind fs-5"></i> <span>Paciente</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Patient">
                        <li><a class="ms-link" href="{{route('admin.paciente.meusExames')}}">Meus Exames</a></li>
                        <li><a class="ms-link" href="{{route('admin.paciente.minhasConsultas')}}">Minhas Consultas</a></li>
                        <li><a class="ms-link" href="#">Minhas Facturas</a></li>
                        <li><a class="ms-link" href="#">Mensagens</a></li>
                        <li><a class="ms-link" href="{{route('admin.paciente.perfil')}}">Meu Perfil</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-lab" href="#">
                    <i class="icofont-blood-test  fs-5"></i> <span>Laboratório</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-lab">
                        <li><a class="ms-link" href="{{route('admin.lab.listaDeExameEmEspera')}}">Exames Agendados</a></li>
                        <li><a class="ms-link" href="{{route('admin.lab.resultadoExame')}}">Lançar Resultados</a></li>
                    </ul>
                </li>
                
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-cadastro" href="#">
                    <i class="icofont-contact-add fs-5"></i> <span>Cadastro</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-cadastro">
                        <li><a class="ms-link" href="{{route('admin.cadastro.cadastroDoctor')}}">Pessoal Clinico</a></li>
                        <li><a class="ms-link" href="{{route('admin.cadastro.cadastroPaciente')}}">Paciente</a></li>
                        <li><a class="ms-link" href="{{route('admin.cadastro.cadastroEspecialidade')}}">Especialidades</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-list" href="#">
                    <i class="icofont-list fs-5"></i> <span>Listagem</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-list">
                        <li><a class="ms-link" href="{{route('admin.doctor.todosDoctores')}}">Pessoal Clinico</a></li>
                        <li><a class="ms-link" href="#">Paciente</a></li>
                        <li><a class="ms-link" href="#">Especialidades</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-marcacao" href="#">
                    <i class="icofont-calendar fs-5"></i> <span>Marcação</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-marcacao">
                        <li><a class="ms-link" href="{{route('admin.marcacao.exame')}}">Exames</a></li>
                        <li><a class="ms-link" href="{{route('admin.marcacao.consulta')}}">Consulta</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-feadback" href="#">
                        <i class="icofont-ui-contact-list fs-5"></i>  <span>Portal Feadback</span></a>
                        <!-- Menu: Sub menu ul -->
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-role" href="#">
                        <i class="icofont-gear-alt fs-5"></i>
                        <span>Configurações</span>
                        <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span>
                    </a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-role">
                        <li>
                            <a class="ms-link" href="{{route('admin.config.papeis')}}">Papéis e Permissões</a>
                        </li>
                        <li>
                            <a class="ms-link" href="{{route('admin.config.user')}}">Utilizador</a>
                        </li>
                    </ul>
                </li>
                
                
            </ul>
            
            <!-- Menu: menu collepce btn -->
            <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                <span class="ms-2"><i class="icofont-bubble-right"></i></span>
            </button>
        </div>
    </div>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">
    
                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                        <div class="d-flex">
                        </div>
                        <div class="dropdown notifications zindex-popover">
                            <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="icofont-alarm fs-5"></i>
                                <span class="pulse-ring"></span>
                            </a>
                            <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-sm-end p-0 m-0">
                                <div class="card border-0 w380">
                                    <div class="card-header border-0 p-3">
                                        <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                            <span>Notificações</span>
                                            <span class="badge text-white">02</span>
                                        </h5>
                                    </div>
                                    <div class="tab-content card-body">
                                        <div class="tab-pane fade show active">
                                            <ul class="list-unstyled list mb-0">
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="{{asset('Style/images/xs/avatar1.jpg')}}" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Fridson Firmino</span> <small>2MIN</small></p>
                                                            <span class="">Agendou uma consulta 2021-06-19 <span class="badge bg-success">Book</span></span>
                                                        </div>
                                                    </a>
                                                </li>
                                                
                                                <li class="py-2">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="{{asset('Style/images/xs/avatar7.jpg')}}" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Benvindo Alves</span> <small class="">1DAY</small></p>
                                                            <span class="">Agendou um Exame</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="card-footer text-center border-top-0" href="#"> Ver todas as Notificações</a>
                                </div>
                            </div>
                        </div>


                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                            @if(session()->has('sucesso'))
                                <span>{{ session()->get('sucesso') }}</span>
                            @endif
                               <!-- <span> Está Logado . . .</span> -->
                            
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">{{ auth()->user()->nomeCompleto }}</span></p>
                                <small class="text-uppercase">{{ auth()->user()->tipo }}</small>
                            </div>
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail" src="{{asset('Style/images/profile_av.png')}}" alt="perfil">
                            </a>
                            <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="{{asset('Style/images/profile_av.png')}}" alt="perfil">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold">{{ auth()->user()->nomeCompleto }}</span></p>
                                                <small class="">{{ auth()->user()->email }}</small>
                                            </div>
                                        </div>
                                        
                                        <div><hr class="dropdown-divider border-dark"></div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <a href="#" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-video-chat fs-5 me-3"></i>Agenda Médica</a>
                                        <a href="#" class="list-group-item list-group-item-action border-0 "><i class="icofont-dollar fs-5 me-3"></i>Perfil</a>
                                        <a href="{{route('logout')}}" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Terminar Secção</a>
                                        <div><hr class="dropdown-divider border-dark"></div>
                                        <a href="{{route('paciente.createAcount')}}" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Criar uma conta pessoal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="setting ms-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#Settingmodal"><i class="icofont-gear-alt fs-5"></i></a>
                        </div>
                    </div>
    
                    <!-- menu toggler -->
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                        <span class="icofont-list fs-5"></span>
                    </button>
    
                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        
                    </div>
    
                </div>
            </nav>
        </div>  

        <!-- Body: Body -->
             @yield('conteudo')
      
        <!-- Modal Custom Settings-->
        
    </div>
  
</div>

<!-- Jquery Core Js -->
<script src="{{asset('Style/bundles/libscripts.bundle.js')}}"></script>

<!-- Plugin Js -->
<script src="{{asset('Style/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('Style/plugin/jqueryuicalandar/jquery-ui.min.js')}}"></script>
<script src="{{asset('Style/plugin/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('Style/bundles/dataTables.bundle.js')}}"></script>      

<!-- Jquery Page Js -->
<script src="{{asset('Style/js/template.js')}}"></script>
<script src="{{asset('Style/js/page/index.js')}}"></script>


<!-- Jquery Page Js -->
<script src="{{asset('Style/js/template.js')}}"></script>



 <script>
      $('#myDataTable')
      .addClass( 'nowrap' )
      .dataTable( {
          responsive: true,
          columnDefs: [
              { targets: [-1, -3], className: 'dt-body-right' }
          ]
      });

      $(document).ready(function() {
        $('#myProjectTable')
        .addClass( 'nowrap' )
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
    });
 </script>
</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 09:34:07 GMT -->
</html> 