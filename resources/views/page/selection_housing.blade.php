@include('header')
<style>
    header {
        margin: 30px 0px 30px 0px;
    }
    
    .top-logo {
        font-size: 24px;
        color: #000;
    }
    
    .top-menu {
        margin: 7px 0px 0px 0px;
    }
    
    .top-menu li {
        float: left;
        display: inline;
        margin: 0px 30px 0px 0px;
    }
    
    .top-menu li a {
        color: #000; 
        font-size: 16px;
    }
</style>

<header>
    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 text-center">
            <a href="" class="top-logo">
                <i class="fa fa-home" aria-hidden="true"></i>
            </a>    
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <ul class="top-menu">
                <li>
                    <a href="">О курорте</a>
                </li>
                <li>
                    <a href="">Как добраться</a>
                </li>
                <li>
                    <a href="">Поиск жилья</a>
                </li>
                <li>
                    <a href="">Активный отдых</a>
                </li>
                <li>
                    <a href="">Пассивный отыдх</a>
                </li>            
                <li>
                    <a href="">Где поесть</a>
                </li>
                <li>
                    <a href="">Подьемники</a>
                </li>  
            </ul>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <a>
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                Екатерина Иванова
            </a>    
        </div>    
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            Главная / Подбор жилья
        </div>    
    </div>        
</header>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 selection-housing-filtr">
        фильтр
    </div>    
</div>        














<style>
    .selection-housing-filtr {
        margin: 50px 0px 50px 0px;
        background-color: #ccc;
    }
    
    .selection-housing {
        
    }
    
    .hotel-rating-count {
        background: #717070;
        display: inline;
        padding: 8px;
        color: #fff;
        font-weight: bold;    
        float: left;
    }
    .hotel-rating-info {
        margin: 0px 0px 0px 47px;
    }
    
    .hotel-rating-info .title {
        font-weight: bold;
    }
    .hotel-rating-info .reviews {
       margin: -10px 0px 0px 0px;
    }
    
    .type-housing {
        padding: 0px 0px 0px 10px;
    }
    
    .selection-housing-btn {
        display: inline;
        background-color: #fff;
        border: solid 2px #ccc;
        color: #ccc;
        padding: 9px 25px 9px 25px;
        font-size: 16px;
        margin: 50px 0px 15px 0px;        
    }    
    
    .item-sel-hous-img {
        width: 100%;
        margin: 0px 0px 15px 0px;
    }
    
    .wr-item-sel-hous {
        margin: 0px 0px 25px 0px;
    }
    
    .wr-item-sel-hous h2 {
        font-size: 19px;
    }
    
    .wr-item-sel-hous .info {
        font-size: 14px;
    }
    
    .item-sel-hous-bot {
        margin: 15px 0px 0px 0px
    }
    
    .old-price {
        font-size: 18px;
        margin: 2px 10px 0px 0px;
        display: block;
        float: left;
    }
    
    .current-price {
        font-size: 24px;
        margin: -8px 0px 0px 0px;
        display: block;
    }
    
    .item-btn-more {
        background: #717070;
        display: block;
        padding: 0px 9px 0px 0px;
        color: #fff;
        font-weight: bold; 
        font-size: 25px;
        width: 30px;
        height: 30px;
        margin: -15px 0px 0px 35px
    }
</style>

<div class="row wr-item-sel-hous">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div>
            <img class="item-sel-hous-img" src="https://www.usualhouse.com/wp-content/uploads/2020/01/interesting-snowy-house.jpg" />
        </div>
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="hotel-rating-count">
                    9.7
                </div>
                <div class="hotel-rating-info">
                    <p class="title">Идеально</p>
                    <p class="reviews">84 отзыва</p>
                </div>    
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                <span>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>                    
                </span>
                <span class="type-housing">
                    Гостиница
                </span>
            </div>             
        </div> 
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>Ламинарно-потоковые шкафы</h2>    
                <p class="info">Ламинарно-потоковые шкафы II класса защиты обеспечивают надежную защиту оператора, рабочей зоны и окружающей среды при работе</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 item-sel-hous-bot">
                <p>сутки от</p>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 item-sel-hous-bot text-left">
                <p>
                    <s><span class="old-price">4 700 <i class="fa fa-rub" aria-hidden="true"></span></i></s>
                    <span class="current-price">3 750 <i class="fa fa-rub" aria-hidden="true"></span></i>
                </p>
            </div>            
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 item-sel-hous-bot text-right">
                <div class="item-btn-more">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>    
            </div>
        </div>            
    </div>
    <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
        1
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-10 col-xs-12">
            <h3>Ламинарно-потоковые</h3>
            <p>
                Ламинарно-потоковые шкафы II класса защиты работают по принципу рециркуляции: воздух поступает в рабочую зону через приоткрытое защитное стекло и засасывается под столешницу, создавая надежную воздушную завесу и обеспечивая защиту оператора от инфекционных материалов. После очистки НЕPA фильтрами воздух равномерным вертикальным потоком опускается внутри рабочей зоны, создавая стерильные условия, и удаляется в воздуховод через отверстия в поверхности столешницы.
            </p>
            <p>    
                Большая часть воздуха (70%) проходит через основной фильтр и поступает обратно в рабочую зону, осуществляя рециркуляцию. 30% воздуха проходит через выходной НЕPA фильтр и выбрасывается в помещение. Эффективность фильтрации составляет 99,9995% для частиц размером 0,3 мкм (класс чистоты ISO 5).
            </p>
            <center>
                <botton class="selection-housing-btn">Узнать больше</botton>
            </center>    
        </div>
    </div>
</div>
@include('footer')