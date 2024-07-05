<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="">
        <title> Produits - Nouveau </title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/images/logo.png"/>

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

        
        <!-- Main style file -->
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
    </head>
<body>
    <!-- preloader -->
    <div class="preloader">
        <img src="../assets/logo.svg" alt="logo">
        <div class="preloader-icon"></div>
    </div>
    <!-- ./ preloader -->

    <!-- sidebars -->
    @include('partials.sidebars')
    <!-- </?php include('sidebars.php') ?> -->
    <!-- ./ sidebars -->

    <!-- menu -->
    @include('partials.menu')
    <!-- ./  menu -->

    <!-- layout-wrapper -->
    <div class="layout-wrapper">

        <!-- header -->
        <div class="header">
            <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
                <a href="#">
                    <i class="bi bi-list"></i>
                </a>
            </div>
            <!-- Logo -->
            <a href="./dashboard.html" class="logo">
                <img width="100" src="../assets/logo.png" alt="logo">
            </a>
            <!-- ./ Logo -->
            <div class="page-title">Produits</div>
            
            <form class="search-form">
                <div class="input-group">
                    <button class="btn btn-outline-light" type="button" id="button-addon1">
                        <i class="bi bi-search"></i>
                    </button>
                    <input type="text" class="form-control" placeholder="Search..."
                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <a href="#" class="btn btn-outline-light close-header-search-bar">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
            </form>

            
            
            <form method="post" enctype="multipart/form-data">

            <div class="header-bar ms-auto">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
                            <i class="bi bi-bell icon-lg"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link nav-link-notify" data-count="3" data-bs-toggle="dropdown">
                            <i class="bi bi-cart2 icon-lg"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                            <h6 class="m-0 px-4 py-3 border-bottom">Shopping Cart</h6>
                            <div class="dropdown-menu-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <a href="#" class="text-danger me-3" title="Remove">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <a href="#" class="me-3 flex-shrink-0 ">
                                            <img src="assets/images/products/3.jpg" class="rounded" width="60"
                                                alt="...">
                                        </a>
                                        <div>
                                            <h6>Digital clock</h6>
                                            <div>1 x $1.190,90</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <a href="#" class="text-danger me-3" title="Remove">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <a href="#" class="me-3 flex-shrink-0 ">
                                            <img src="../assets/images/products/4.jpg" class="rounded" width="60"
                                                alt="...">
                                        </a>
                                        <div>
                                            <h6>Toy Car</h6>
                                            <div>1 x $139.58</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <a href="#" class="text-danger me-3" title="Remove">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <a href="#" class="me-3 flex-shrink-0 ">
                                            <img src="../assets/images/products/5.jpg" class="rounded" width="60"
                                                alt="...">
                                        </a>
                                        <div>
                                            <h6>Sunglasses</h6>
                                            <div>2 x $50,90</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <a href="#" class="text-danger me-3" title="Remove">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <a href="#" class="me-3 flex-shrink-0 ">
                                            <img src="../assets/images/products/6.jpg" class="rounded" width="60"
                                                alt="...">
                                        </a>
                                        <div>
                                            <h6>Cake</h6>
                                            <div>1 x $10,50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="m-0 px-4 py-3 border-top small">Sub Total : <strong
                                    class="text-primary">$1.442,78</strong></h6>
                        </div>
                    </li>
                    <li class="nav-item ms-3">
                        <button type="submit" class="btn btn-success btn-icon" name="save">
                            <i class="bi bi-check-circle"></i> Save
                        </button>
                    </li>
                </ul>
            </div>
            <!-- Header mobile buttons -->
            <div class="header-mobile-buttons">
                <a href="#" class="search-bar-btn">
                    <i class="bi bi-search"></i>
                </a>
                <a href="#" class="actions-btn">
                    <i class="bi bi-three-dots"></i>
                </a>
            </div>
            <!-- ./ Header mobile buttons -->
        </div>
        <!-- ./ header -->

        <!-- content -->
        <div class="content ">

            <!-- </?php if(isset($success)): ?>
                <div class="alert alert-success" role="alert">
                    </?php echo $success; ?>
                </div>
            </?php elseif(isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    </?php echo $error; ?>
                </div>
            </?php endif; ?> -->

            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-8">
                    <div class="tab-content" id="myTabContent">
                        
                        <!-- Catégorie produit -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="card-title mb-4">Catégorie produit</h6>
                                    <div class="collapse show mt-4" id="categoriesCollapseExample">
                                        <div class="d-flex flex-column gap-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="category_id" value="' . $categorie['category_id'] . '">' . utf8_encode($categorie['category_name']) . '<br>';
                                                    
                                                <!-- </?php
                                                    // Connexion à la base de données et récupération des catégories
                                                    $bdd = new PDO('mysql:host=localhost;dbname=ecom_togettech', 'root', 'root');
                                                    $resultat = $bdd->query('SELECT * FROM categories');

                                                    // Affichage des catégories sous forme de cases à cocher
                                                    while ($categorie = $resultat->fetch()) {
                                                        echo '<input type="radio" class="form-check-input" name="category_id" value="' . $categorie['category_id'] . '">' . utf8_encode($categorie['category_name']) . '<br>';
                                                    }
                                                    // Fermeture de la connexion à la base de données
                                                    $bdd = null;
                                                ?> -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Details du produit -->
                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="card-title mb-4">Details du produit</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Désignation</label>
                                                <input name="product_name" type="text" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea name="description" type="text" class="form-control" required> </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Prix</label>
                                                <input name="price" type="number" class="form-control" required>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Images du produit -->
                        <div class="tab-pane fade" id="notification-settings" role="tabpanel"
                            aria-labelledby="notification-settings-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title mb-4">Images du produit</h6>
                                    <div class="mb-3">
                                        <label for="main_image" class="form-label">Image principale</label>
                                        <input class="form-control" type="file" id="main_image" name="main_image" accept="image/*" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="other_images" class="form-label">Autres images :</label>
                                        <input class="form-control" type="file" id="other_images" name="other_images[]" accept="image/*" multiple required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Info vendeur -->
                        <div class="tab-pane fade" id="integrations" role="tabpanel" aria-labelledby="integrations-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title mb-4">Fournisseur du produit</h6>
                                    <div class="mb-5">
                                        <select name="fournisseur_id" id="fournisseur" class="form-select">
                                            
                                                <option value='" . $row["id"] . "'></option>
                                                
                                                <option value=''>Aucun fournisseur trouvé</option>
                                            
                                            <!-- </?php
                                            // Afficher les options du select avec les fournisseurs
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    echo "<option value='" . $row["id"] . "'>" . $row["nom"] . "</option>";
                                                }
                                            } else {
                                                echo "<option value=''>Aucun fournisseur trouvé</option>";
                                            }
                                            ?> -->
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card sticky-top mb-4 mb-md-0">
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column gap-2" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="true">
                                        <i class="bi bi-person me-2"></i> Catégorie produit
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="password-tab" data-bs-toggle="tab" href="#password" role="tab"
                                    aria-controls="password" aria-selected="false">
                                        <i class="bi bi-lock me-2"></i> Détails du produit
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="notification-settings-tab" data-bs-toggle="tab" href="#notification-settings"
                                    role="tab"
                                    aria-controls="notification-settings" aria-selected="false">
                                        <i class="bi bi-bell me-2"></i> Images du produit
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="integrations-tab" data-bs-toggle="tab" href="#integrations" role="tab"
                                    aria-controls="integrations" aria-selected="false">
                                        <i class="bi bi-arrow-down-up me-2"></i> Fournisseur du produit
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
        <!-- ./ content -->

        </form>

        <div>
            <!-- </?php echo isset($message); ?> -->
        </div>


        <!-- content-footer -->
        @include('partials.footer')
        <!-- <//?php include('footer.php') ?> -->
        <!-- ./ content-footer -->

    </div>
    <!-- ./ layout-wrapper -->

<!-- JQuery -->
<script src="{{ asset('assets/libs/jquery-3.7.1.min.js') }}"></script>

<!-- Nicescroll -->
<script src="{{ asset('assets/libs/nicescroll.js') }}"></script>


<!-- Main Javascript file -->
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
