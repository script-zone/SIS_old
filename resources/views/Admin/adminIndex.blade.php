<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('adminStyle/img/favicon.ico')}}">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('adminStyle/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('adminStyle/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('adminStyle/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('adminStyle/css/select2.min.css')}}">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="{{asset('adminStyle/img/logo.png')}}" width="35" height="35" alt=""> <span>MEDSIS</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notificações</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="{{asset('adminStyle/img/user.jpg')}}" class="img-fluid">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Fridson Firmino</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">ViVer Todas Notificações</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="{{asset('adminStyle/img/user.jpg')}}" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>Dr. Firmino</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{asset('adminStyle/pages/profile.html')}}">Meu Perfil</a>
						<a class="dropdown-item" href="{{asset('adminStyle/pages/edit-profile.html')}}">Editar Perfil</a>
						<a class="dropdown-item" href="{{asset('adminStyle/pages/settings.html')}}">Definições</a>
						<a class="dropdown-item" href="{{asset('adminStyle/pages/login.html')}}">Terminar Secção</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="{{asset('adminStyle/pages/profile.html')}}">Meu Perfil</a>
						      <a class="dropdown-item" href="{{asset('adminStyle/pages/edit-profile.html')}}">Editar Perfil</a>
						      <a class="dropdown-item" href="{{asset('adminStyle/pages/settings.html')}}">Definições</a>
						      <a class="dropdown-item" href="{{asset('adminStyle/pages/login.html')}}">Terminar Secção</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">MENU GERAL</li>
                        <li class="active">
                            <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                          <a href="#"><i class="fa fa-user"></i> <span> Doctores </span> <span class="menu-arrow"></span></a>
                          <ul style="display: none;">
                            <li><a href="#">Marcação de Procedimento</a></li>
                            <li><a href="{{route('admin.agendaDoctor')}}">Minha Agenda Médica</a></li>
                            <li><a href="#">Meus Pacientes</a></li>
                            <li><a href="{{route('admin.perfilDoctor')}}">Meu Perfil</a></li>
                          </ul>
                          <li class="submenu">
                          <a href="#"><i class="fa fa-user"></i> <span> Paciente </span> <span class="menu-arrow"></span></a>
                          <ul style="display: none;">
                            <li><a href="#">Marcação de Procedimento</a></li>
                            <li><a href="#">Minha Agenda Médica</a></li>
                            <li><a href="#">Meus Pacientes</a></li>
                            <li><a href="#">Meu Perfil</a></li>
                          </ul>
                        </li>
                        <li class="submenu">
                          <a href="#"><i class="fa fa-calendar"></i> <span> Marcação </span> <span class="menu-arrow"></span></a>
                          <ul style="display: none;">
                            <li><a href="{{route('admin.marcarExame')}}">Exame</a></li>
                            <li><a href="{{route('admin.marcarConsulta')}}">Consulta</a></li>
                            <li><a href="{{route('admin.marcarProcedimento')}}">Procedimento</a></li>
                          </ul>
                        </li>
                        <li class="submenu">
                          <a href="#"><i class="fa fa-user"></i> <span> Cadastros </span> <span class="menu-arrow"></span></a>
                          <ul style="display: none;">
                            <li><a href="{{route('admin.addDoctor')}}">Doctores</a></li>
                            <li><a href="{{route('admin.addPaciente')}}">Paciêntes</a></li>
                            <li><a href="{{route('admin.addEspecialidade')}}">Especialidades</a></li>
                          </ul>
                        </li>
                        <li class="submenu">
                          <a href="#"><i class="fa fa-user"></i> <span> Listagem </span> <span class="menu-arrow"></span></a>
                          <ul style="display: none;">
                            <li><a href="{{route('admin.listagemDoctores')}}">Listar Doctores</a></li>
                            <li><a href="{{route('admin.listagemPaciente')}}">Listar Pacientes</a></li>
                            <li><a href="{{route('admin.listagemEspecialidade')}}">Listar Especialidades</a></li>
                            <li><a href="#">Listar Exames</a></li>
                            <li><a href="#">Listar Consultas</a></li>
                            <li><a href="#">Listar Procedimentos</a></li>
                          </ul>
                        </li>
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Funcionarios </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="employees.html">Employees List</a></li>
								<li><a href="leaves.html">Leaves</a></li>
								<li><a href="holidays.html">Holidays</a></li>
								<li><a href="attendance.html">Attendance</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="invoices.html">Invoices</a></li>
								<li><a href="payments.html">Payments</a></li>
								<li><a href="expenses.html">Expenses</a></li>
								<li><a href="taxes.html">Taxes</a></li>
								<li><a href="provident-fund.html">Provident Fund</a></li>
							</ul>
						</li>
						
                        <li>
                            <a href="settings.html"><i class="fa fa-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">UI Elements</li>
                        
                        <li>
                            <a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <script>

        </script>
            @yield('conteudo')
        
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{asset('adminStyle/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('adminStyle/js/popper.min.js')}}"></script>
    <script src="{{asset('adminStyle/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminStyle/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('adminStyle/js/Chart.bundle.js')}}"></script>
    <script src="{{asset('adminStyle/js/chart.js')}}"></script>
    <script src="{{asset('adminStyle/js/app.js')}}"></script>
    <script src="{{asset('adminStyle/js/select2.min.js')}}"></script>
    <script src="{{asset('adminStyle/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminStyle/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('adminStyle/js/moment.min.js')}}"></script>
    <script src="{{asset('adminStyle/js/bootstrap-datetimepicker.min.js')}}"></script>
	<script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'

                });
            });
     </script>


</body>



</html>