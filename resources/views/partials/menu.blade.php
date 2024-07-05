<div class="menu">
        <div class="menu-header">
            <a href="./dashboard.html" class="menu-header-logo">
                <img src="assets/images/logo.png" alt="logo">
                <span>Ecom</span>
            </a>
            <a href="#" class="btn btn-sm menu-close-btn">
                <i class="bi bi-x"></i>
            </a>
        </div>
        <div class="menu-body">
            
            <ul>
                <li class="menu-divider">Dashboard</li>
                <li>
                    <a  href="./dashboard.php">
                        <span class="nav-link-icon">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li>
                    <a href="">
                        <span class="nav-link-icon">
                            <i class="bi bi-truck"></i>
                        </span>
                        <span>Produits</span>
                    </a>
                    <ul>
                        <li>
                            <a  href="{{ route('admin.product') }}">Tous les produits</a>
                        </li>
                        <li>
                            <a  href="{{ route('admin.addproduct') }}">Nouveau produit</a>
                        </li>
                        
                    </ul>
                </li>
                
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-wallet2"></i>
                        </span>
                        <span>Categorie</span>
                    </a>
                    <ul>
                        <li>
                            <a  href="{{ route('admin.category') }}">Toutes les Categories</a>
                        </li>
                        <li>
                            <a  href="#">Nouvelles Categories</a>
                        </li>
                        
                    </ul>
                </li>
                
                <li class="menu-divider">Pages</li>

                
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <span>Fournisseurs</span>
                    </a>
                    <ul>
                        <li>
                            <a  href="./fournisseur-list.php">Tous les fournisseurs </a>
                        </li>
                        <li>
                            <a  href="./fournisseur-add.php">Nouveau fournisseur</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-divider">Other</li>
                
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                        <span class="nav-link-icon">
                            <i class="bi bi-file-earmark-medical"></i>
                        </span>
                        <span>Déconnexion</span>
                    </a>

                </li>
            </ul>
        </div>
    </div>