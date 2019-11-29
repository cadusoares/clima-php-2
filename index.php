<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>O Município</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="js/clima.js"></script>

        <!-- Tags Gerais -->

        <meta NAME="DESCRIPTION" CONTENT="Site de informações climáricas de Brusque e Região. Desenvolvido por Cadu"/>
        <meta NAME="ABSTRACT" CONTENT="Tempo e Clima na região"/>
        <meta name="keywords" content="Clima, informações, temperatura, umidade, previsão do tempo,
              temmperatura maxima, temperatura minima, clima para brusque, temperatura para brusque, umidade em brusque, temperatura 
              maxima em brusque, temperatura minima em brusque, carlos, chuva em brusque, carlos em brusque"/>
        <meta NAME="title" CONTENT="O municipio" />
        <meta NAME="identifier-url" content="https://carlos-clima-senai.herokuapp.com" />
        <meta NAME="author" content="carlos eduardo scheren soares" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="carlos_soares@estudante.sc.senai.br"/>
        
        <!-- Tags de Facebook -->
        
        <meta property="og:url" content="https://carlos-clima-senai.herokuapp.com" /> 
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="O municipio" />
        <meta property="og:title" content="O minicipio" />
        <meta property="og:description" content="Site de informações climáricas de Brusque e Região. Desenvolvido por Cadu" />
        <meta property="og:image" content="https://carlos-clima-senai.herokuapp.com/img/icones/01n.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />
        
        <!-- Tags Twitter -->
        
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de informações climáricas de Brusque e Região. Desenvolvido por Cadu" />
        <meta name="twitter:title" content="O municipio" />


    </head>
    <body>

        <div class="row">

            <div class="col-md-12">

                <div class="jumbotron">

                    <h1>Tempo para Brusque-SC |

                        <img id="icone" src="img/icones/02d.png"/>

                        <span id="temperatura"></span></h1>

                    <p>

                        <span id="situacao"></span>

                    </p>


                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="alert alert-warning" role="alert">

                    <h5>Umidade para Brusque-SC | <span id="umidade"></span>

                        <img src="img/icones/umidade.pnh.jpg" width="100"/></h5>

                    <p>

                        <span id=""></span>

                    </p>

                </div>

            </div>


            <div class="col-md-6">

                <div class="alert alert-info" role="alert">  

                    <h5>Pressão do Ar em Brusque-SC | <span id="pressao"></span>

                        <img src="img/icones/pressaoar.jpg" width="160"/></h5>

                    <p>

                        <span id=""></span>

                    </p>     

                </div>

            </div>


            <div class="col-md-6">

                <div class="alert alert-danger" role="alert">

                    <h5>Temperatura Máxima para Brusque-SC | <span id="temperaturaMax"></span> 

                        <img src="img/icones/termomaximo.png" width="50"/></h5>

                    <p>

                        <span id=""></span>

                    </p>

                </div>

            </div>


            <div class="col-md-6">

                <div class="alert alert-secondary" role="alert">

                    <h5>Temperatura Mínima para Brusque-SC | <span id="temperaturaMin"></span>

                        <img src="img/icones/termofrio.png" width="95"/></h5>

                    <p>

                        <span id=""></span>


                    </p>

                </div>

            </div>


            <div class="col-md-12 text-center">

                <div class="alert alert-success" role="alert">

                    <div class="">
                        <h5>Velocidade do Vento em Brusque-SC | <span id="velocidadeAr"></span>

                            <img src="img/icones/vento.png" width="150"/></h5>

                        <p>

                            <span id=""></span> 
                        </p>         

                    </div>

                </div>

            </div>


            <div class="col-md-6">

                <div class="alert alert-success text-center" role="alert">

                    <div class="col-md-7">

                        <h5>Amanhacer do Sol em Brusque-SC | <span id="amanhecer"></span> 

                            <p>

                                <span id=""></span> 

                            </p>
                            <img src="img/icones/sol.png" width="145"/>

                        </h5>

                    </div>

                </div>

            </div>


            <div class="col-md-6">

                <div class="alert alert-success text-center" role="alert">

                    <div class="col-md-7">

                        <h5>Por do Sol em Brusque-SC | <span id="pordosol"></span> 

                            <p>

                                <span id=""></span> 

                            </p>
                            <img src="img/icones/porsol.png" width="175"/>

                        </h5>

                    </div>

                </div>

            </div>



        </div>
    </body>
</html>
