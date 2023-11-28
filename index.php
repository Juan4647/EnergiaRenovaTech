<!DOCTYPE html>
<html lang="pt-br">

<head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        /*    */
        * {
            padding: 0px;
            margin: 0px;
            font-family: 'Open Sans', sans-serif;
            scroll-behavior: smooth;
        }

        /* tira o estilo do botão */
        button {
            border: none;
            margin: 0;
            padding: 0;
            width: auto;
            overflow: visible;
            background: transparent;
            color: inherit;
            font: inherit;
            line-height: normal;
            -webkit-font-smoothing: inherit;
            -moz-osx-font-smoothing: inherit;
        }

        .main {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #energia {
            font-size: 40px;
        }


        .sectionInicio {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            width: 100%;

            background: linear-gradient(to bottom, #C2BBFF, #FFFFFF);
        }

        .sectionInicio .menu {
            margin-top: 25px;
        }

        .sectionInicio .menu ul {
            display: flex;
            flex-direction: row;
            list-style: none;
            gap: 30px;
        }

        .sectionInicio .menu ul ul {
            display: none;
            position: absolute;
            /* background-color: black; */
            padding: 10px;
            align-items: center;

        }

        .sectionInicio .menu ul li:hover ul {

            display: flex;
            gap: 10px;
            flex-direction: column;

        }

        .sectionInicio .menu a {
            text-decoration: none;
            color: white;
            text-transform: uppercase;
            font-weight: 500;
            transition: all 0.2s ease-in;

        }

        .sectionInicio .menu a:hover {
            color: rgb(231, 229, 229);
        }

        .sectionInicio .titulos {
            position: relative;
            top: 100px;
            /* margin-top: 100px; */
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .sectionInicio .titulos h1 {
            color: white;
            font-size: 50px;
        }

        .sectionInicio .titulos h3 {
            color: white;
            font-size: 15px;
        }

        .sectionInicio .fundo {
            position: absolute;
            height: 200px;
            width: 100%;
            background-color: #7ED957;
            bottom: 0;
            border-top-left-radius: 20%;
            border-top-right-radius: 20%;
        }

        /* tubina */
        .sectionInicio .turbinas .turbina .baseTurbina {
            background-color: rgb(233, 233, 233);
            height: 150px;
            width: 15px;
            position: absolute;
            bottom: 25px;
        }

        .sectionInicio .turbina {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 350px;
            height: 350px;
            z-index: 1;
        }

        .turbina1 {
            left: 0;
            bottom: 0;
        }

        .turbina2 {
            right: 40px;
            bottom: 130px;
        }

        .sectionInicio .turbinas .turbina img {

            width: 300px;
            height: 300px;
            animation: spin linear 3s infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }

        }

        .sectionModelo {
            height: 100vh;
            display: flex;
            flex-direction: column;

            align-items: center;
            justify-content: center;

        }

        .sectionModelo .estruturaSection {
            display: flex;
            flex-direction: row;
            gap: 80px;
        }

        .sectionModelo .img {
            background-color: #7ED957;
            width: 300px;
            height: 400px;
        }

        .sectionModelo .textos {
            display: flex;
            flex-direction: column;
            gap: 10px;


        }

        .sectionModelo .textos p {
            max-width: 600px;
            line-height: 25px;
        }

        .sectionModelo.Solar .estruturaSection {
            flex-direction: row-reverse;
        }

        .sectionModelo.Sobre {}

        .sectionModelo.Sobre .estruturaSection .textos {
            align-items: center;
            gap: 40px;
        }

        .sectionModelo.Sobre h1 {
            font-size: 25px;
        }

        .sectionModelo.Sobre p {
            text-align: center;
            max-width: 1000px;
            font-size: 17px;
            line-height: 30px;


        }

        .sectionModelo.Sobre button a {
            text-decoration: none;
            color: #fff;
        }

        .sectionModelo.Sobre button {
            background-color: #7ED957;
            height: 40px;
            padding: 0 10px;
            color: white;
            border-radius: 10px;
            text-transform: uppercase;
            font-weight: 600;
            transition: all ease-in 0.3s;
            position: relative;

        }


        .sectionModelo.Sobre button:hover {
            background-color: white;

            border: #7ED957 solid 1px;
        }

        .sectionModelo.Sobre button:hover a {
            color: #7ED957;


        }

        /* footer */
        footer {
            width: 100%;
            height: 50vh;
            background-color: #7ED957;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        footer .fundo {
            width: 1150px;
            margin-top: 40px;
        }

        footer .textos {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        footer p {}

        footer .frase {
            font-weight: 600;
            font-size: 18px;
        }

        footer .endereco {
            text-transform: uppercase;
            font-weight: 500;
        }

        footer .email {
            font-weight: 500;
        }

        footer .redes {
            margin-top: 20px;
            margin-left: -10px;
        }

        footer .redes svg {
            width: 20px;
            height: 20px;
            margin-left: 10px;
        }

        footer .icons p {
            font-weight: 500;
        }

        footer .icons a {
            text-decoration: ;
            color: white;
            font-weight: 700;
        }

        .form {

            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .form form {
            background-color: #7ED957;
            display: flex;
            width: 300px;
            height: 400px;
            flex-direction: column;
            border-radius: 10px;
            color: white;
            font-weight: 600;
        }

        .form form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .form div {
            display: flex;
            justify-content: center;

            flex-direction: column;
        }

        .form label {}

        .form .input {

            padding: 15px 30px;
        }
    </style>
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/Juan4647/EnergiaRenovaTech/main/Frame%201pa.png"
        type="image/x-icon">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>
    <div class="main">

        <section class="sectionInicio">
            <!-- menu -->
            <menu class="menu">
                <nav>
                    <ul>
                        <li><a href="#">inico</a></li>
                        <li><a href="#energia">energias +</a>
                            <ul>
                                <li><a href="#Hidro">Hidro</a></li>
                                <li><a href="#Solar">Solar</a></li>
                                <li><a href="#Eolica">Eólica</a></li>
                            </ul>
                        </li>
                        <li><a href="#">equipe</a></li>
                        <li><a href="#inscrevase">inscreva-se</a></li>
                    </ul>
                </nav>
            </menu>

            <!-- titulos -->
            <div class="titulos">
                <h1>EnergiaRenovaTech</h1>
                <h3>Transformando Desafios em Sustentabilidade</h3>
            </div>

            <!-- turbinas -->
            <div class="turbinas">
                <div class="turbina turbina1">
                    <div class="baseTurbina ">
                    </div>
                    <div>
                        <img src="https://raw.githubusercontent.com/Juan4647/EnergiaRenovaTech/main/Frame%201pa.png"
                            alt="">
                    </div>
                </div>

                <div class="turbina turbina2">
                    <div class="baseTurbina"></div>
                    <img src="https://raw.githubusercontent.com/Juan4647/EnergiaRenovaTech/main/Frame%201pa.png" alt="">
                </div>
            </div>

            <!-- fundo -->
            <div class="fundo"></div>
        </section>
        <section class="sectionModelo Sobre" id="inscrevase">
            <div class="estruturaSection">
                <div class="textos">
                    <h1>EnergiaRenovaTech: Pioneirismo na Sustentabilidade Energética</h1>

                    <p>Em um cenário impulsionado pela necessidade de soluções energéticas sustentáveis, surge a
                        EnergiaRenovaTech. Nossa empresa nasce com a ousada missão de liderar a transição para um futuro
                        mais limpo e ecoeficiente.
                        Guiados por valores fundamentais de integridade, excelência e respeito ao meio ambiente,
                        buscamos constantemente superar as expectativas da indústria e estabelecer novos padrões de
                        inovação.

                        Na essência da EnergiaRenovaTech está a fusão de tecnologia de ponta e a convergência de
                        energias renováveis. Nosso compromisso com a inovação impulsiona soluções integradas de energia
                        hidrelétrica, solar e eólica, garantindo eficiência máxima e um impacto ambiental mínimo.
                        Convidamos todos que compartilham nossa visão e paixão pela sustentabilidade a se unirem a nós
                        nesta jornada. Na EnergiaRenovaTech, acreditamos que, juntos, podemos construir um mundo mais
                        limpo e energizado para as gerações futuras. #EnergiaRenovaTech #SustentabilidadeEnergética
                        #InovaçãoVerde
                    </p>

                    <button> <a href="#form">inscreva-se</a> </button>

                </div>
            </div>
        </section>
        <h1 id="energia">Energias</h1>
        <section class="sectionModelo Hidro" id="Hidro">

            <div class="estruturaSection">
                <div class="img">
                    <img src="https://raw.githubusercontent.com/Juan4647/EnergiaRenovaTech/main/Frame%202q.png" alt="">
                </div>
                <div class="textos">
                    <h4>A Potência das Águas, Uma Aliada para o Amanhã</h4>
                    <h1>Energia Hidrelétrica</h1>
                    <p>A energia hidrelétrica, há muito tempo, tem sido uma protagonista fundamental na matriz
                        energética global, fornecendo uma fonte confiável e sustentável de eletricidade. Nesta
                        exploração aprofundada, mergulharemos nos princípios fundamentais, processos e impactos da
                        energia hidrelétrica, destacando seu papel crucial na produção de energia renovável.
                    </p>
                    <p>

                        A energia hidrelétrica é uma forma de energia renovável que aproveita a energia potencial
                        armazenada nas águas em movimento, como rios ou quedas d'água. O princípio básico envolve a
                        conversão da energia cinética da água em eletricidade. Isso é realizado por meio de instalações
                        conhecidas como usinas hidrelétricas, que exploram o movimento natural da água para girar
                        turbinas conectadas a geradores elétricos.
                    </p>
                </div>
            </div>

        </section>

        <section class="sectionModelo Solar" id="Solar">
            <div class="estruturaSection">
                <div class="img">
                    <img src="https://raw.githubusercontent.com/Juan4647/EnergiaRenovaTech/main/Frame%203solar.png"
                        alt="">
                </div>
                <div class="textos">
                    <h4>Iluminando o Futuro</h4>
                    <h1>A Revolução Sustentável da Energia Solar</h1>

                    <p>No cenário global de busca por fontes de energia mais limpas e sustentáveis, a energia solar
                        surge como uma protagonista incontestável. Nesta exploração aprofundada, vamos desvendar os
                        princípios fundamentais, as tecnologias revolucionárias, as vantagens radiantes e os desafios
                        que permeiam a esfera da energia solar.


                    </p>
                    <p> No cenário global de busca por fontes de energia mais limpas e sustentáveis, a energia solar
                        surge como uma protagonista incontestável. Nesta exploração aprofundada, vamos desvendar os
                        princípios fundamentais, as tecnologias revolucionárias, as vantagens radiantes e os desafios
                        que permeiam a esfera da energia solar.</p>
                </div>
            </div>

        </section>

        <section class="sectionModelo Eolica" id="Eolica">
            <div class="estruturaSection">
                <div class="img">
                    <img src="https://raw.githubusercontent.com/Juan4647/EnergiaRenovaTech/main/Frame%204turbinas.png"
                        alt="">
                </div>
                <div class="textos">
                    <h4>Soprando Novos Ventos</h4>
                    <h1>A Transformação Sustentável da Energia Eólica</h1>
                    <p>A energia eólica, impulsionada pelos ventos vigorosos que esculpem nosso planeta, tem emergido
                        como uma fonte vital na busca por soluções energéticas sustentáveis. Nesta exploração
                        aprofundada, mergulharemos nos princípios fundamentais, tecnologias inovadoras, benefícios e
                        desafios que caracterizam a energia eólica, delineando seu papel crucial na transição para uma
                        matriz energética mais limpa.



                    </p>
                    <p> As turbinas eólicas vêm em diversas formas e tamanhos, cada uma adaptada a condições
                        específicas. Turbinas de eixo horizontal, as mais comuns, possuem lâminas que giram em torno de
                        um eixo horizontal, enquanto turbinas de eixo vertical têm lâminas que se movem em torno de um
                        eixo vertical. Turbinas de grande escala são frequentemente usadas em parques eólicos, enquanto
                        turbinas menores podem ser utilizadas para aplicações descentralizadas, como em fazendas ou
                        propriedades residenciais.</p>
                </div>
            </div>

        </section>

        <section class="form" id="form">



            <form action="cad.php" method="post ">
                <input type="hidden" name="acao" value="cadastrar">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="idNome">



                <label for="email">Email</label>
                <input type="email" name="email" id="idEmail">



                <input type="submit" value="Enviar" id="sub">
            </form>
        </section>



        <footer>
            <div class="fundo">
                <div class="textos">
                    <p class="frase">Na EnergiaRenovaTech, estamos moldando o futuro,<br> transformando desafios em
                        sustentabilidade. <br> Junte-se a nós na jornada para um amanhã mais verde e energizado.
                        <br>#EnergiaSustentável
                        #InovaçãoEnergética
                    </p>

                    <p class="endereco">EnergiaRenovaTech <br>
                        123 Rua da Inovação <br>
                        Bairro Sustentável <br>
                        Cidade Verde, CV 12345-678 <br>
                        Brasil</p>

                    <p class="email">energiarenovatech@tech.com</p>
                </div>


                <div class="redes">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                        viewBox="0,0,256,256" style="fill:#FFFFFF;">
                        <g transform="translate(-30.72,-30.72) scale(1.24,1.24)">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8.53333,8.53333)">
                                    <path
                                        d="M9.99805,3c-3.859,0 -6.99805,3.14195 -6.99805,7.00195v10c0,3.859 3.14195,6.99805 7.00195,6.99805h10c3.859,0 6.99805,-3.14195 6.99805,-7.00195v-10c0,-3.859 -3.14195,-6.99805 -7.00195,-6.99805zM22,7c0.552,0 1,0.448 1,1c0,0.552 -0.448,1 -1,1c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1zM15,9c3.309,0 6,2.691 6,6c0,3.309 -2.691,6 -6,6c-3.309,0 -6,-2.691 -6,-6c0,-3.309 2.691,-6 6,-6zM15,11c-2.20914,0 -4,1.79086 -4,4c0,2.20914 1.79086,4 4,4c2.20914,0 4,-1.79086 4,-4c0,-2.20914 -1.79086,-4 -4,-4z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                        viewBox="0,0,256,256" style="fill:#FFFFFF;">
                        <g transform="translate(-32,-32) scale(1.25,1.25)">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8.53333,8.53333)">
                                    <path
                                        d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.016 4.432,10.984 10.206,11.852v-8.672h-2.969v-3.154h2.969v-2.099c0,-3.475 1.693,-5 4.581,-5c1.383,0 2.115,0.103 2.461,0.149v2.753h-1.97c-1.226,0 -1.654,1.163 -1.654,2.473v1.724h3.593l-0.487,3.154h-3.106v8.697c5.857,-0.794 10.376,-5.802 10.376,-11.877c0,-6.627 -5.373,-12 -12,-12z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                        viewBox="0,0,256,256" style="fill:#FFFFFF;">
                        <g transform="translate(-44.8,-44.8) scale(1.35,1.35)">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8.53333,8.53333)">
                                    <path
                                        d="M24,4h-18c-1.105,0 -2,0.895 -2,2v18c0,1.105 0.895,2 2,2h18c1.105,0 2,-0.895 2,-2v-18c0,-1.105 -0.895,-2 -2,-2zM10.954,22h-2.95v-9.492h2.95zM9.449,11.151c-0.951,0 -1.72,-0.771 -1.72,-1.72c0,-0.949 0.77,-1.719 1.72,-1.719c0.948,0 1.719,0.771 1.719,1.719c0,0.949 -0.771,1.72 -1.719,1.72zM22.004,22h-2.948v-4.616c0,-1.101 -0.02,-2.517 -1.533,-2.517c-1.535,0 -1.771,1.199 -1.771,2.437v4.696h-2.948v-9.492h2.83v1.297h0.04c0.394,-0.746 1.356,-1.533 2.791,-1.533c2.987,0 3.539,1.966 3.539,4.522z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>

                </div>
                <div class="icons">
                    <p>Icons by <a target="_blank" href="https://icons8.com/">Icons8</a> </p>
                </div>
            </div>

        </footer>

    </div>
</body>

</html>