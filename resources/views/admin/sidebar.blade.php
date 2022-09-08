        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{url ('/redirects')}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class='fas fa-seedling'></i>Ecomarc</h3> 
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('assets/img/user (1).png')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">admin</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{url ('/redirects')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{url ('/admin/category')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Catégories</a>
                    <a href="{{url ('/admin/produits')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Produits</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Achats</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->