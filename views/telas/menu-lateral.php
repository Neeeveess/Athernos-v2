<sidebar id="menu-lateral" class="menu-lateral">
    <div class="conteudo-esquerdo">
        <div class="principal">
            <a class="logo" href=""><img src="" alt="">logo</a>
            <section class="usuario">
                <h2 class="title">
                    Bem Vindo - Admin
                    <!-- <?php echo "Bem vindo " . "<span>" . $_SESSION['nome'] . "</span>"; ?> -->
                </h2>
            </section>
            <nav class="nav-bar">
                <div class="box-nav-bar">
                    <span class="nav-bar__title">Produtos</span>
                    <div class="nav-bar__itens hidden">
                            <a class="nav-bar__item" href="#">Listar Produtos</a></li>
                        <!-- <?php if($_SESSION['nivel'] >= 1){ ?> -->
                            <a class="nav-bar__item" href="#">Importar Planilha</a>
                            <a class="nav-bar__item" href="#">Cadastrar Produtos</a>
                            <a class="nav-bar__item" href="#">Entrada de Produtos</a>
                            <a class="nav-bar__item" href="#">Saída de Produtos</a>
                        
                        <!-- <?php } if($_SESSION['nivel'] >= 2){?> -->
                            <a class="nav-bar__item" href="#">Relatório de Entrada/Saída</a>
                        <!-- <?php } ?> -->
                    </div>
                </div>
                <div class="box-nav-bar">
                    <!-- <?php if($_SESSION['nivel'] > 1){ ?> -->
                        <span class="nav-bar__title">Usuarios</span>
                        <div class="nav-bar__itens hidden">
                            <a class="nav-bar__item" href='#'>Listar Usuários</a>
                            <a class="nav-bar__item" href='#'>Cadastrar Usuario</a>
                        </div>
                    <!-- <?php } ?> -->
                </div>
            </nav>
        </div>
        <footer class="footer">
            <img src="" alt="" />ICONE CONTA
            <div class="box-conta">
                <a href="">Minha Conta</a>
                <a href="">Configurações</a>
            </div>
    
            <a href=""><img src="" alt="">SAIR</a>
        </footer>
    </div>
    <div class="icon-menu">
        <button id="menu-hamburguer">Icone</button>
    </div>
</sidebar>