<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/reset.css">
    <link href=https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Css/style.css"> 
    <!-- <link rel="stylesheet" href="/Curso HTML e CSS/style_home.css">   -->
    <link rel="stylesheet" href="/contato.css">
    <title>MeaMe | Com você!</title>
</head>
<body>
    
    <header>
        <div class="caixa">
            <h1 ><img id="imagem_logo" src="./img/logo2.png" alt="Logo da Loja"></h1>
            
            
            <!-- <nav>
                <ul>
                    <li><a href="/Curso HTML e CSS/index.html">Home</a></li>
                    <li><a href="/Barbearia Cancian/produtos.html">Produtos</a></li>
                    <li><a href="/formulario/contato.html">Contatos</a></li>
                </ul>
            </nav> -->
        </div>
    </header>
    <main>
        <form action="log.php" name="formulario" method="get">
            <label for="nomesobrenome">Nome e Sobrenome</label>
            <input type="text" name="nomesobrenome" class="input_padrao"required>

            <label for="email">E-mail</label>
            <input type="email" name="email" class="input_padrao"required placeholder="seuemail@dominio.com">

            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" class="input_padrao"required placeholder="(xx)xxxxx-xxxx" >

            <label for="mensagem">Mensagem</label>
            <textarea cols="30" rows="10" name="mensagem" class="input_padrao"required></textarea>
            
            <fieldset>
                <legend>Como você prefere nosso contato?</legend>
                <label for="radio_email"><input type="radio" name="contato" value="email" id="radio_email">E-mail</label>
                

                <label for="radio_telefone"><input type="radio" name="contato" value="telefone" id="radio_telefone">Telefone</label>
                

                <label for="radio_whatsapp" ><input type="radio" name="contato" value="Whatsapp" id="radio_whatsapp" checked>Whatsapp</label>

            </fieldset>
            
            <fieldset>
                <Legend>Qual horário você prefere ser atendido?</Legend>
                <select>
                    <option>Manhã</option>
                    <option>Tarde</option>
                    <option>Noite</option>
                </select>
            </fieldset>
            <Label class="checkbox"><input type="checkbox" checked> Quer receber nossas novidades por E-mail? </Label>

            <input type="submit" value="Enviar formulário" class="enviar">
        </form>
        <table>
            <thead>
                <tr>
                    <th>Dia</th>
                    <th>horário</th>                
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Segunda</td>
                    <td>8h ~ 20h</td>                
                </tr>
                <tr>
                    <td>Quarta</td>
                    <td>8h ~ 20h</td>                
                </tr>
                <tr>
                    <td>Sexta</td>
                    <td>8h ~ 20h</td>                
                </tr>
            </tbody>    
        </table>
    </main>
    <footer>
        <img src="./img/logo-footer.png" alt="Logo da loja">
        <p class="copyright">&copy;Copyright MeaMe-2020. Todos os direitos reservados</p>
    </footer>
    
</body>
</html>