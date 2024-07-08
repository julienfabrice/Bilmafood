<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="">
        <title> Produits - Liste </title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/images/logo.png"/>

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

        <!-- Range slider -->
        <link rel="stylesheet" href="{{ asset('assets/libs/range-slider/css/ion.rangeSlider.min.css') }}" type="text/css">

        <!-- Main style file -->
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
    </head>

    <body>
        <!-- preloader -->
        <!-- <div class="preloader">
            <img src="assets/logo.svg" alt="logo">
            <div class="preloader-icon"></div>
        </div> -->
        <!-- ./ preloader -->

        <!-- sidebars -->
        @include('partials.sidebars')
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
    <div class="page-title">Products</div>
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
                                    <img src="../assets/images/products/3.jpg" class="rounded" width="60"
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
                    <a href="{{ route('admin.addproduct') }}" class="btn btn-primary btn-icon">
                        <i class="bi bi-plus-circle"></i> Add Product
                    </a>
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
        <div class="row">
            <div class="col-md-12">
                
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex gap-4 align-items-center">
                            <div class="d-none d-md-flex">All Products</div>
                            <div class="d-md-flex gap-4 align-items-center">
                                <form class="mb-3 mb-md-0">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <select class="form-select">
                                                <option>Sort by</option>
                                                <option value="desc">Desc</option>
                                                <option value="asc">Asc</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-select">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown"
                                class="btn btn-primary dropdown-toggle"
                                aria-haspopup="true" aria-expanded="false">Actions</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">


                    <table class="table table-custom table-lg mb-0" id="products">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Prix (XAF)</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr style="overflow-x:scroll">
                                    <td><img src="{{ Storage::url($product->main_image) }}" width="50"></td>
                                    <td>{{ $product->name }}</td>
                                    <!-- <td>{{ $product->description }}</td> -->
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a href="{{ route('admin.editproduct', $product) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('admin.destroyproduct', $product) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                             <!-- </?php
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td><img class='rounded' width='100' src='" . $row["image_url"] . "' alt='Image du produit'></td>";
                                        echo "<td>" . $row["product_id"] . "</td>";
                                        echo "<td>" . $row["product_name"] . "</td>";
                                        echo "<td class='text-end'>" . number_format($row["price"], 2) . "</td>";
                                        echo "<td class='text-end'> Modifier </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>Aucun produit trouvé dans la base de données.</td></tr>";
                                }
                            ?>  -->
                            
                        </tbody>
                    </table>


                </div>
                
            </div>
        </div>
    </div>
    <!-- ./ content -->

    <!-- content-footer -->
    @include('partials.footer')
    <!-- ./ content-footer -->

</div>
<!-- ./ layout-wrapper -->

<!-- JQuery -->
<script src="{{ asset('assets/libs/jquery-3.7.1.min.js') }}"></script>

<!-- Nicescroll -->
<script src="{{ asset('assets/libs/nicescroll.js') }}"></script>

<!-- Range slider -->
<script src="{{ asset('assets/libs/range-slider/js/ion.rangeSlider.min.js') }}"></script>

<!-- Examples -->
<script src="{{ asset('assets/js/examples/products.js') }}"></script>

<!-- Main Javascript file -->
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
