<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/products">Kitty Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ (request()->is('')) ? 'active' : '' }}">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item {{ (request()->is('products')) ? 'active' : '' }}">
                        <a class="nav-link" href="/products">Котики</a>
                    </li>
                </ul>

                <ul class="my-2 my-lg-0">
                    <a class="btn btn-outline-warning my-2 my-sm-0" href="/cart">Корзина</a>
                </ul>
            </div>
        </div>
    </nav>
</header>
