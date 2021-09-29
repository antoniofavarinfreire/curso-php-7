<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>1. Basico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentarios PHP</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>2. Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                    </ul>
                    <ul> 
                        <li><a href="exercicio.php?dir=tipos&file=aritimedicas">Operações Aritimedicas</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedencia</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>3. Variavies</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Basico</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis Variáveis</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor Vs Referencia</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>4.Controle</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">If Else</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">OP</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></li>
                    </ul>
                    
                </div>
            </nav>
        </div>
        
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>