<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Connexion Bilmafood</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/images/logo.png"/>

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

        <!-- Main style file -->
        <link rel="stylesheet" href="{{ asset('app.css') }}" type="text/css"/>
    </head>

    <body class="auth">

        <!-- begin::preloader-->
        <!-- <div class="preloader">
            <div class="preloader-icon"></div>
        </div> -->
        <!-- end::preloader -->
        

        <div class="form-wrapper">
            <div class="container">
                <div class="card">
                    <div class="row g-0">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="d-block d-lg-none text-center text-lg-start">
                                        <img width="60" src="../assets/images/logo.png" alt="logo">
                                        
                                    </div>
                                    <div class="my-5 text-center text-lg-start">
                                        <h1 class="display-8">Se connecter</h1>
                        
                                    </div>

                                    <form class="mb-5" method="POST" action="{{ route('admin.login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="email" name="email" class="form-control" placeholder="Entrez l'e-mail" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" name="password" class="form-control" placeholder="Entrer le mot de passe" required>
                                        </div>
                                        <div class="text-center text-lg-start">
                                            <p class="small">Vous ne parvenez pas à accéder à votre compte ? <a href="#">Réinitialisez votre mot de passe maintenant</a>.</p>
                                            <button class="btn btn-primary" type="submit">Se connecter</button>
                                        </div>

                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col d-none d-lg-flex border-start align-items-center justify-content-between flex-column text-center">
                            <div class="logo">
                                <img width="60" src="{{ asset('image/catalog/logo.png') }}" alt="footer-logo">
                            </div>
                            <div>
                                <h3 class="fw-bold">Welcome to Bilmafood Admin Dashboard !</h3>
                                <!-- <p class="lead my-5">Si vous n'avez pas de compte, souhaitez-vous vous inscrire dès maintenant ?</p> -->
                                <!-- <a href="#" class="btn btn-primary">S'inscrire</a> -->
                            </div>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <!-- <a href="#">Politique de confidentialité</a> -->
                                </li>
                                <li class="list-inline-item">
                                    <!-- <a href="#">Termes et conditions</a> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- JQuery -->
        <script src="../assets/libs/jquery-3.7.1.min.js"></script>

        <!-- Main Javascript file -->
        <script src="{{ asset('app.js') }}"></script>
    </body>

</html>