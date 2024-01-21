<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

        <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />


    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('account/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('account/vendor/jquery-ui/jquery-ui.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('account/css/style.css')}}">
</head>
<body>

    <div class="main">

        <section class="signup">
                <a href="#" class="navbar-brand">
                    <h1 class="display-1 m-0 text-uppercase text-primary">
                        <i class="fa fa-clinic-medical me-2"></i>MEDSIS</h1>
                </a>
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">Nome</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" placeholder="Digite o seu nome"/>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Sobrenome</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" placeholder="Digite o seu sobrenome"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group form-icon">
                                <label for="birth_date">Data Nascimento</label>
                                <input type="text" class="form-input" name="birth_date" id="birth_date" placeholder="DD-MM-YYYY" />
                            </div>
                            <div class="form-radio">
                                <label for="gender">Gênero</label>
                                <div class="form-flex">
                                    <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                    <label for="male">Masculino</label>
    
                                    <input type="radio" name="gender" value="female" id="female" />
                                    <label for="female">Feminino</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-input" name="email" id="email" require/>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-input" name="password" id="password" placeholder="Digite a password"/>
                            </div>
                            <div class="form-group">
                                <label for="re_password">Repete a Password</label>
                                <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Digite a password"/>
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Criar Conta"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('account/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('account/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('account/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('account/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{asset('account/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>