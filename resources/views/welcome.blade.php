<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <base href="">

        <link rel="stylesheet" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.css" />
    </head>
    <body>

    <style>
        .header-left {
            /*border: solid #000 1px;*/
            width: 7%;
            float: left;
            padding-top: 25px;
        }

        .header-right {
            width: 92%;
            /*border: solid #0a678b 1px;*/
            float: left;
            padding-top: 25px;
        }

        .display-block {
            display: block;
        }

        .left-icon {
            position: absolute;
        }

        .line-1, .line-2, .line-3, .line-4 {
            height: 1px;
            margin: 0 auto;
            margin-top: 10px;
            background-color: #cacaca;
        }

        .line-1 {
            width: 30%;
        }

        .line-2 {
            width: 40%;
            background-color: #878787;
        }

        .line-3 {
            width: 25%;
        }

        .line-4 {
            width: 30%;
        }

        .head-menu {
            display: inline-block;
        }

        .head-menu li {
            float: left;
            padding-left: 10px;
            padding-right: 10px;
            margin-left: 20px;
            list-style: none;
        }

        .head-menu li a {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .first-screen-title {
            font-size: 50px;
            color: #a8a8a8;
            margin-top: 20%;
            margin-left: 20%;
        }

        .float-right {
            float: right;
        }

        .first-screen-select {
            float: left;
            width: 240px;
            text-align: left;
            padding-left: 40px;
        }
        
        .first-screen-select .top {
            font-size: 21px;
        }
        
        .first-screen-select .bottom {
            margin-top: -10px;
        }

        footer {
            padding-top: 50px;
            padding-bottom: 40px;
            background-color: #4f4f4f;
            color: #fff;
        }
        
        
        footer .title {
            font-weight: bold;
            font-size: 17px;
        }

        footer ul {
            margin-left: -40px;
            list-style: none;
        }
        
        footer .mar-top-title {
            margin-top: 50px;
        }
        
        .first-screen {
            background: url(gory-sneg-oblaka-cherno-belaya.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
        .wr-first-screen-select {
            background: #fff;
            right: -16px;
            position: absolute;
            padding-top: 15px;
            padding-bottom: 10px;
        }
    </style>

    <div class="first-screen">
        <div class="header-left text-center">
            <a>
                <i class="fa fa-university" aria-hidden="true"></i>
            </a>
            <div class="header-scroll-line">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
            </div>
            <div>
                <a class="left-icon left-icon-1 display-block">
                    <i class="fa fa-university" aria-hidden="true"></i>
                </a>
                <a class="left-icon left-icon-2 display-block">
                    <i class="fa fa-university" aria-hidden="true"></i>
                </a>
                <a class="left-icon left-icon-3 display-block">
                    <i class="fa fa-university" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="header-right">
            <div class="row">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 text-right">
                    <ul class="head-menu">
                        <li>
                            <a>
                                TestTest
                            </a>
                        </li>
                        <li>
                            <a>
                                TestTest
                            </a>
                        </li>
                        <li>
                            <a>
                                TestTest
                            </a>
                        </li>
                        <li>
                            <a>
                                TestTest
                            </a>
                        </li>
                        <li>
                            <a>
                                TestTest
                            </a>
                        </li>
                        <li>
                            <a>
                                TestTest
                            </a>
                        </li>
                        <li>
                            <a>
                                TestTest
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center">
                    <i class="fa fa-university" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="first-screen-title">
                        КАРАЧАЕВО
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                    <div class="wr-first-screen-select float-right">
                        <div class="first-screen-select">
                            <p class="top">Дата заезда</p>
                            <p class="bottom">
                                17 декабря
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </p>
                        </div>
                        <div class="first-screen-select">
                            <p class="top">Дата выезда</p>
                            <p class="bottom">
                                28 декабря
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </p>
                        </div>
                        <div class="first-screen-select">
                            <p class="top">Гостей</p>
                            <p class="bottom">
                                2 взрослых
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </p>
                        </div>
                        <div class="first-screen-select">
                            <p class="top" style="margin-top: 10px;">Подобрать жилье</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .wr-seasons {
            padding-top: 150px;
            padding-bottom: 150px;              
        }
        
        .wr-seasons p {
            font-size: 95px;  
        }
        
        .wr-seasons ul {
            font-size: 18px;
            list-style: none;
            margin-left: -40px;
        }
        
        .wr-seasons-right {
            margin-left: 6%;
        }
    </style>    
    
    <div class="container wr-seasons">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <ul>
                    <li href="" alt="">Трекинг</li>
                    <li href="" alt="">Альпинизм</li>
                    <li href="" alt="">Учебно-тренировочный сбор</li>
                    <li href="" alt="">Конные прогулки</li>
                    <li href="" alt="">Трейларининнг</li>
                    <li href="" alt="">Экскурсии</li>
                    <li href="" alt="">Рафтинг</li>
                    <li href="" alt="">Джипинг</li>
                    <li href="" alt="">Кемпинг</li>
                    <li href="" alt="">Рыбалка</li>
                </ul>
                <p>ЛЕТО</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>ЗИМА</p>
                <ul class="wr-seasons-right">
                    <li href="" alt="">Горные лыжи и сноуборд</li>
                    <li href="" alt="">Учебный / детский склон</li>
                    <li href="" alt="">Катание на тьюбинге</li>
                    <li href="" alt="">Полет на параплане</li>
                    <li href="" alt="">Ски - пасс</li>
                    <li href="" alt="">Трассы</li>
                    <li href="" alt="">График работы подьемника</li>
                </ul>
            </div>
        </div>
    </div>

    <style>
        .wr-routes {
            padding-top: 150px;
            padding-bottom: 150px;              
        }
        
        .wr-routes .title {
            font-size: 47px;            
        }

        .wr-routes .info {
            font-size: 16px;            
        }

        .wr-routes botton {
            border: solid 3px #000;
            background: #000;
            color: #fff;
            padding-left: 25px;
            padding-right: 25px;
            font-size: 17px;
            padding-top: 15px;
            padding-bottom: 15px;
            margin-top: 34px;             
        }        
        
        .wr-routes ul {
            margin-top: 40px;
            margin-left: -40px;
        }
        
        .wr-routes li {
            float: left;
            display: inline;
            padding-left: 10px;
            padding-right: 10px;
        }        
    </style>    
    
    <div class="container wr-routes">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
            </div>            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p class="title">Маршруты</p>
                <p class="info">Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
                <br ><br >
                <botton>Выбор маршрута</botton>         
                <ul>
                    <li href="" alt=""><i class="fa fa-square" aria-hidden="true"></i> Пеший</li>
                    <li href="" alt=""><i class="fa fa-square" aria-hidden="true"></i> Конный</li>
                    <li href="" alt=""><i class="fa fa-square" aria-hidden="true"></i> Джиппинг</li>
                </ul>                
            </div>
        </div>
    </div>     
    
    <style>
        .wr-trails {
            padding-top: 150px;
            padding-bottom: 150px;            
        }
        
        .wr-trails .title {
            font-size: 47px;
        }

        .wr-trails .info {
            font-size: 16px;
        }

        .wr-trails botton {
            border: solid 3px #000;
            background: #000;
            color: #fff;
            padding-left: 25px;
            padding-right: 25px;
            font-size: 17px;
            padding-top: 15px;
            padding-bottom: 15px;
            margin-top: 34px;              
        }        
    </style>
    
    <div class="container wr-trails">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p class="title">Трассы</p>
                <p class="info">Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
                <br ><br >
                <botton>Посмотреть трассы</botton>         
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
            </div>
        </div>
    </div>    

    <style>
        .wr-tracking {
            padding-top: 150px;
            padding-bottom: 150px;            
        }
        
        .wr-tracking .wr-meaning-info .meaning {
            font-size: 54px;
        }

        .wr-tracking .wr-meaning-info .info {
            margin-top: -25px;
        }        
        
        .wr-meaning-info {
            margin-top: 20px;
        }
        
        .wr-tracking .title {
            font-size: 47px;
        }
        
        .wr-tracking .info {
            font-size: 16px;
        }
        
        .wr-tracking botton {
            border: solid 3px #000;
            background: #000;
            color: #fff;
            padding-left: 25px;
            padding-right: 25px;
            font-size: 17px;
            padding-top: 15px;
            padding-bottom: 15px;
            margin-top: 34px;              
        }
    </style>    
    
    <div class="container wr-tracking">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="wr-meaning-info">
                    <p class="meaning">122 606</p>
                    <p class="info">Га - площадь заповедника</p>
                </div>
                <div class="wr-meaning-info">
                    <p class="meaning">122 606</p>
                    <p class="info">Га - площадь заповедника</p>
                </div>
                <div class="wr-meaning-info">
                    <p class="meaning">122 606</p>
                    <p class="info">Га - площадь заповедника</p>
                </div>                
                <div class="wr-meaning-info">
                    <p class="meaning">122 606</p>
                    <p class="info">Га - площадь заповедника</p>
                </div>                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p class="title">Трекинг</p>
                <p class="info">Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
                <br ><br >
                <botton>Сходить в поход</botton>
            </div>
        </div>
    </div>

    <style>
        .wr-mountaineering {
            padding-top: 150px;
            padding-bottom: 150px;              
        }
        
        .wr-mountaineering .title {
            font-size: 47px;
        }
        
        .wr-mountaineering .info {
            font-size: 16px;
        }  
        
       .wr-mountaineering botton {
            border: solid 3px #000;
            background: #000;
            color: #fff;
            padding-left: 25px;
            padding-right: 25px;
            font-size: 17px;
            padding-top: 15px;
            padding-bottom: 15px;
            margin-top: 34px;  
        }
    </style>
    
    <div class="container wr-mountaineering">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p class="title">Альпинизм</p>
                <p class="info">Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
                <br ><br >
                <botton>Посмотреть маршрут</botton>         
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
            </div>
        </div>
    </div>
    
    <style>
        .wr-teberdinsky-nature-reserve {
            padding-top: 150px;
            padding-bottom: 150px;            
        }
        
        .wr-teberdinsky-nature-reserve .wr-meaning-info .meaning {
            font-size: 54px;
        }

        .wr-teberdinsky-nature-reserve .wr-meaning-info .info {
            margin-top: -25px;
        }        
        
        .wr-meaning-info {
            margin-top: 20px;
        }
        
        .wr-teberdinsky-nature-reserve .title {
            font-size: 47px;
        }
        
        .wr-teberdinsky-nature-reserve .info {
            font-size: 16px;
        }
        
        .wr-teberdinsky-nature-reserve botton {
            border: solid 3px #000;
            background: #000;
            color: #fff;
            padding-left: 25px;
            padding-right: 25px;
            font-size: 17px;
            padding-top: 15px;
            padding-bottom: 15px;
            margin-top: 34px;              
        }
    </style>    
    
    <div class="container wr-teberdinsky-nature-reserve">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="wr-meaning-info">
                    <p class="meaning">122 606</p>
                    <p class="info">Га - площадь заповедника</p>
                </div>
                <div class="wr-meaning-info">
                    <p class="meaning">122 606</p>
                    <p class="info">Га - площадь заповедника</p>
                </div>
                <div class="wr-meaning-info">
                    <p class="meaning">122 606</p>
                    <p class="info">Га - площадь заповедника</p>
                </div>                
                <div class="wr-meaning-info">
                    <p class="meaning">122 606</p>
                    <p class="info">Га - площадь заповедника</p>
                </div>                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p class="title">Тебердинский заповедник</p>
                <p class="info">Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
                <br ><br >
                <botton>Посетить заповедние</botton>
            </div>
        </div>
    </div>
    
    <style>
        .wr-safety-mountains {
            padding-top: 150px;
            padding-bottom: 150px;
        }

        .wr-safety-mountains .info {
            font-size: 16px;
        }
        
        .wr-safety-mountains .title {
            font-size: 47px;
        }
        
        .wr-safety-mountains botton {
            border: solid 3px #000;
            padding-left: 25px;
            padding-right: 25px;
            font-size: 17px;
            padding-top: 15px;
            padding-bottom: 15px;
            margin-top: 34px;            
        }
    </style>
    
    <div class="container wr-safety-mountains">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="title">Безопасность в горах</p>
                <p class="info">Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации направлений прогрессивного развития.</p>
                <p class="info">Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов).</p>
                <br /><br />
                <botton>Посетить заповедние</botton>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <p class="title">Основное</p>
                    <ul>
                        <li href="" alt="">
                            Ски-пассы
                        </li>
                        <li href="" alt="">
                            Карта куротат
                        </li>
                        <li href="" alt="">
                            Веб-камеры
                        </li>
                        <li href="" alt="">
                            Новости
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <p class="title">Основное</p>
                    <ul>
                        <li href="" alt="">
                            Ски-пассы
                        </li>
                        <li href="" alt="">
                            Карта куротат
                        </li>
                        <li href="" alt="">
                            Веб-камеры
                        </li>
                        <li href="" alt="">
                            Новости
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <p class="title">Основное</p>
                    <ul>
                        <li href="" alt="">
                            Ски-пассы
                        </li>
                        <li href="" alt="">
                            Карта куротат
                        </li>
                        <li href="" alt="">
                            Веб-камеры
                        </li>
                        <li href="" alt="">
                            Новости
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <p class="title">Основное</p>
                    <ul>
                        <li href="" alt="">
                            Ски-пассы
                        </li>
                        <li href="" alt="">
                            Карта куротат
                        </li>
                        <li href="" alt="">
                            Веб-камеры
                        </li>
                        <li href="" alt="">
                            Новости
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="row mar-top-title">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <p class="title">Основное</p>
                    <ul>
                        <li href="" alt="">
                            Ски-пассы
                        </li>
                        <li href="" alt="">
                            Карта куротат
                        </li>
                        <li href="" alt="">
                            Веб-камеры
                        </li>
                        <li href="" alt="">
                            Новости
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <p class="title">Основное</p>
                    <ul>
                        <li href="" alt="">
                            Ски-пассы
                        </li>
                        <li href="" alt="">
                            Карта куротат
                        </li>
                        <li href="" alt="">
                            Веб-камеры
                        </li>
                        <li href="" alt="">
                            Новости
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <p><b>+7 800 521-52-52</b></p>
                    <p>Номер спасательных служб</p>
                    <p><b>+7 800 521-52-52</b></p>
                    <p>Номер скорой медицинской помощи</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <p>По вопросам рекламы, предложений и претензий</p>
                    <p><i class="fa fa-envelope-open-o" aria-hidden="true"></i> domain-life.ru</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> +7 888 123-23-23</p>
                </div>
            </div>
           
        </div>
    </footer>
    
    <style>
        @media(max-width:480px) {
            .wr-seasons p {
                font-size: 70px;
            }
            
            .wr-routes .title {
                font-size: 28px;
            }            
            
            .wr-trails .title {
                font-size: 28px;
            }            
            
            .wr-tracking .title {
                font-size: 28px;
            }
            
            .wr-mountaineering .title {
                font-size: 28px;
            }
            
            .wr-teberdinsky-nature-reserve .title {
                font-size: 28px;
            }
            
            .wr-safety-mountains .title {
                font-size: 28px;
            }
        }
    </style>        
        
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
