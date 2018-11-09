<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="./">CodePro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <!--            <li class="nav-item">-->
                <!--              <a class="nav-link disabled" href="./perguntas/">Perguntas</a>-->
                <!--            </li>-->
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <div class="btn-group dropleft">
                    <button type="button" class="btn btn-secondary">
                        <?php echo $_SESSION['usuario_xp']." - ".$_SESSION['usuario_nome']; ?>
                    </button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuReference">
                        <a class="dropdown-item " href="./perfil/">Ver Perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="sair.html">Sair</a>
                    </div>
                </div>
            </form>
        </div>
    </nav>
</header>
