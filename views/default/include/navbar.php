<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="?page=home">
            Sinth-vinil
        </a>

        <!-- Barra de pesquisa (Mobile) -->
        <form class="d-flex d-lg-none mx-auto w-50">
            <input
                class="form-control form-control-sm"
                type="search"
                placeholder="Pesquisar..."
            >
        </form>

        <!-- Botão hamburguer -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarPrincipal">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Conteúdo recolhível -->
        <div class="collapse navbar-collapse" id="navbarPrincipal">

            <!-- Menu -->
            <ul class="navbar-nav mx-auto text-center">

                <li class="nav-item">
                    <a class="nav-link" href="?page=catalogo">
                        Catálogo
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?page=sobre">
                        Sobre
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?page=contato">
                        Contato
                    </a>
                </li>

            </ul>

            <!-- Barra de pesquisa (Desktop) -->
            <form class="d-none d-lg-flex ms-lg-3">

                <input
                    class="form-control me-2"
                    type="search"
                    placeholder="Pesquisar...">

                <button class="btn btn-outline-light">
                    Buscar
                </button>

            </form>
            <a href="login.php" class="nav-icon text-white ms-3">
                <i class="bi bi-person-circle"></i>
            </a>

        </div>

    </div>

</nav>