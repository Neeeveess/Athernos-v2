<sidebar id="menu-lateral" class="menu-lateral">
    <div class="conteudo-esquerdo">
        <div class="principal">
            <a class="principal__logo" href=""><img src="<?php $_SERVER['DOCUMENT_ROOT']?>/Athernos-v2/src/assets/imgs/logo-teste.png" alt=""></a>
            <section class="usuario">
                <h2 class="principal__title">
                Bem Vindo <br><span class='principal__title--destack'> Admin</span>
                    
                    <!-- <?php echo "Bem vindo " . "<br><span class='principal__title--destack'>" . $_SESSION['nome'] . "</span>"; ?> -->
                </h2>
            </section>
            <nav class="nav-bar">
                <div class="box-nav-bar">
                    <span class="nav-bar__title">Produtos</span>
                    <div class="nav-bar__itens hidden">
                            <a class="nav-bar__item" href="#">Listar Produtos</a></li>
                        <?php //if($_SESSION['nivel'] >= 1){ ?> 
                            <a class="nav-bar__item" href="#">Importar Planilha</a>
                            <a class="nav-bar__item" href="#">Cadastrar Produtos</a>
                            <a class="nav-bar__item" href="#">Entrada de Produtos</a>
                            <a class="nav-bar__item" href="#">Saída de Produtos</a>
                        
                        <!-- <?php //} if($_SESSION['nivel'] >= 2){?> -->
                            <a class="nav-bar__item" href="#">Relatório de Entrada/Saída</a>
                        <!-- <?php //} ?> -->
                    </div>
                </div>
                <div class="box-nav-bar">
                    <!-- <?php //if($_SESSION['nivel'] > 1){ ?> -->
                        <span class="nav-bar__title">Usuarios</span>
                        <div class="nav-bar__itens hidden">
                            <a class="nav-bar__item" href='#'>Listar Usuários</a>
                            <a class="nav-bar__item" href='#'>Cadastrar Usuario</a>
                        </div>
                    <!-- <?php //} ?> -->
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
        <button id="menu-hamburguer">
            <svg class="svg-esquerda" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M11.189,6.707,9.775,5.293,4.482,10.586a2,2,0,0,0,0,2.828l5.293,5.293,1.414-1.414L5.9,12Z"/><path d="M18.189,6.707,16.775,5.293l-6,6a1,1,0,0,0,0,1.414l6,6,1.414-1.414L12.9,12Z"/></svg>
            <svg class="svg-direita" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M19.1,10.586,13.811,5.293,12.4,6.707,17.689,12,12.4,17.293l1.415,1.414L19.1,13.414A2,2,0,0,0,19.1,10.586Z"/><path d="M12.811,11.293l-6-6L5.4,6.707,10.689,12,5.4,17.293l1.415,1.414,6-6A1,1,0,0,0,12.811,11.293Z"/></svg>
        </button>
    </div>
</sidebar>