<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">ShopOnline</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Категорії
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                @foreach($categories as $category)
                                    <li><a class="dropdown-item " href="{{route('showCategory', $category)}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="text-end">
            <a class="link-secondary me-2 cart-qty" href="{{route('showCart')}}" aria-label="Корзина">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="mx-3 bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                </svg><span class="cart-count">{{$cartCount}}</span></a>
            <button type="button" class="btn btn-outline-primary me-2"><span
                    style="vertical-align: inherit;">Увійти</span>
            </button>
            <button type="button" class="btn btn-primary"><span style="vertical-align: inherit;">Реєстрація</span>
            </button>
        </div>
    </div>
</header>
