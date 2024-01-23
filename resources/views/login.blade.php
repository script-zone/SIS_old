<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 09:35:21 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: MedSIS - Login</title>
    <link rel="icon" href="{{asset('Style/favicon.ico')}}" type="image/x-icon"> <!-- Favicon-->
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

    <!-- main body area -->
    <div class="main p-2 py-3 p-xl-5 ">
        
        <!-- Body: Body -->
        <div class="body d-flex p-0 p-xl-5">
            <div class="container-xxl">

                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                        <div style="max-width: 25rem;">
                            <div class="text-center mb-5">
                                <i class="icofont-heart-beat secondary-color" style="font-size: 90px;"></i>
                            </div>
                            <div class="mb-5">
                                <h2 class="color-900 text-center">MEDSIS, a melhor solução de cuidados de saúde!</h2>
                            </div>
                            <!-- Image block -->
                            <div class="">
                                <img src="{{asset('Style/images/login-img.svg')}}" alt="login-img">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                        <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
                            <!-- Form -->
                            <form class="row g-1 p-3 p-md-4">
                                <div class="col-12 text-center mb-2">
                                    <h1>Login</h1>
                                    <span>Seja Bem-Vindo de volta.</span>
                                </div>
                                <div class="text-center mb-4">
                                    
                                    <span class="dividers mt-4">---------</span>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">E-mail</label>
                                        <input type="email" class="form-control form-control-lg" placeholder="name@example.com">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <div class="form-label">
                                            <span class="d-flex justify-content-between align-items-center">
                                                Senha
                                                <a  href="#">Esqueceu a senha?</a>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg" placeholder="***************">
                                    </div>
                                </div>
                               
                                <div class="col-12 text-center mt-4">
                                    <a href="#" class="btn btn-lg btn-block btn-light lift text-uppercase" atl="entrar">ENTRAR</a>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <span>Ainda não tem uma conta? <a href="{{route('paciente.createAcount')}}" >Crie uma aqui!</a></span>
                                </div>
                            </form>
                            <!-- End Form -->
                            
                        </div>
                    </div>
                </div> <!-- End Row -->
                
            </div>
        </div>

    </div>

</div>

<!-- Jquery Core Js -->
<script src="{{asset('Style/bundles/libscripts.bundle.js')}}"></script>

</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 09:35:23 GMT -->
</html>