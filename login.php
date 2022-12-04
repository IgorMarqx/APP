<div class="all">
        <div class="fundo">
            <img src="./img/img-formulario.png" alt="">
        </div>
        <div class="header">
            <header class="container">
                <div class="logo">
                    <i class="fa-brands fa-sketch"></i>
                </div>

                <form action="" method="POST">
                    <div class="inputs">
                        <div class="inputUser">
                            <i class="fa-solid fa-user" id="user"></i>
                            <input name="usuario" id="email" type="text" placeholder="Informe seu usuário" required autofocus>
                        </div>

                        <div class="inputUser">
                            <i class="fa-solid fa-lock" id="user"></i>
                            <input name="senha" id="senha" type="password" placeholder="Informe sua senha" required>
                        </div>

                        <div class="d-grid gap-2 col-12 mx-auto">
                            <button onclick="verificarLogin()" class="btn" id="btnCustom">Entrar</button>
                        </div>

                        <div class="button">
                            <span>Não possui cadastro?</span><a id="cadastrar" href="./loginSystem/cadastro.php">Cadastre-se!</a>
                        </div>
                    </div>
                </form>
            </header>
        </div>
    </div>