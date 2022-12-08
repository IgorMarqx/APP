<div class="all">
    <div class="fundo">
        <img src="../img/img-formulario.png" alt="">
    </div>
    <div class="header">
        <header class="container">
            <div class="logo">
                <h1>Registro</h1>
            </div>

            <form action="cadastrobd.php" method="POST">
                <div class="inputs">
                    <div class="inputUser">
                        <i class="fa-solid fa-envelope" id="user"></i>
                        <input name="email" id="email" type="email" placeholder="Informe seu e-mail" required autofocus>
                    </div>

                    <div class="inputUser">
                        <i class="fa-solid fa-lock" id="user"></i>
                        <input name="senha" id="senha" type="password" placeholder="Informe sua senha" required>
                    </div>

                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button onclick="verificarLogin()" class="btn btn-primary" >Registrar</button>
                    </div>

                    <div class="button">
                        <span>Já possui cadastro?</span><a id="cadastrar" href="../index.php">Voltar ao login</a>
                    </div>
                </div>
            </form>
        </header>
    </div>
</div>