</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Calculadora 4 operações com css responsivo bootstrap" />
        <meta name="author" content="Edney Rossi" />
        <title>Calculadora muito loka</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                      
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Bem vindo a calculadora 4 operações</h1>
                <p class="lead">Este aplicativo WEB foi construido utilizando HTML5, JavaScript e o Framework Bootstrap</p>
               
            </div>
        </header>
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Calculadora muito loka</h2>
                        <p class="lead">Entre com dois valores e clique no botão correspondente para calcular:</p>
                        <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Primeiro valor</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="n1">
                              <br>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Segundo valor</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="n2">
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Resultado</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="somado">
                                <br>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="calcSum()"> + Somar</button>&nbsp;&nbsp;
                            <button type="button" class="btn btn-primary" onclick="calcSub()"> - Subtrair</button>&nbsp;&nbsp;
                            <button type="button" class="btn btn-primary" onclick="calcMul()"> * Multiplicar</button>&nbsp;&nbsp;
                            <button type="button" class="btn btn-primary" onclick="calcDiv()"> / Dividir</button>&nbsp;&nbsp;

                          </form>
                          
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                       
                    <h2 class="mb-4">Dá uma sugada no meu repositório</h2>
                        <p><a class="btn btn-primary" href="https://github.com/maninhomarcos?tab=repositories">link dos meus repositorio</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Quem Sou?</h2>
                        <p class="lead">aluno gostoso Marcos André, aluno feio Eduardo broxa</p>
                        <div >
                           
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            
            <div class="container px-4"><p class="m-0 text-center text-white">Copyleft &copy; A cópia e reprodução desse APP WEB é incentivada livremente</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>