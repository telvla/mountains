@include('header')
<style>
    header {
        margin: 30px 0px 30px 0px;
    }
    
    .top-logo {
        font-size: 32px;
        color: #444;
    }
    
    .top-menu {
        margin: 10px 0px 0px 0px;
    }
    
    .top-menu li {
        float: left;
        display: inline;
        margin: 0px 45px 0px 0px;
    }
    
    .top-menu li a {
        color: #85828a; 
        font-size: 16px;
    }
    
    .top-menu li a:hover {
        color: #444;
    }
    
    header .fa-user-circle {
        font-size: 27px;
        color: #444;
        float: left;
        padding-right: 7px;
        cursor: pointer;
    }
    
    header .user {
        margin: 8px 0px 0px 0px;
        color: #444;
        font-size: 13px;
        cursor: pointer;
    }
    
    .wr-bread-crumbs {
        margin: 20px 0px 0px 4.4%;
    }
    
    .bread-crumbs-link {
        color: #a1a1a1;
    }
    
    .bread-crumbs-link:hover {
        color: #a1a1a1;
        text-decoration: none;
    }
    
    .bread-crumbs-link-active {
        color: #797676;
    }
    
    .bread-crumbs-link-active:hover {
        color: #000;
    }
    
    .bread-crumbs-separator {
        margin: 0px 5px 0px 5px;
    }

    .wr-selection-housing-filtr {
        background: url('https://phonoteka.org/uploads/posts/2021-05/1620637635_4-phonoteka_org-p-fon-gori-cherno-belie-5.jpg') 100% 70% no-repeat;
        background-size: auto;
        background-size: cover;
        height: 200px;        
        margin: 20px 0px 30px 0px;        
        /*background: #000;*/
    }
    
    .space {
        padding: 80px 0px 0px 0px;
    }
    
    .wr-selection-housing-filtr botton {
        background-color: #757575;
        color: #fff;
        padding: 22px 0px 18px 0px;
        font-size: 16px;
        width: 100%;
        display: block;
        text-align: center;
        font-weight: bold;
    }

    .wr-selection-housing-filtr botton:hover {
        background-color: #fff;
        color: #757575;
        cursor: pointer;
    }

    .selection-housing-filtr-line-left {
        border-left: solid 1px #c8c8c8;
        height: 42px;
        position: absolute;
        margin: -1px 0px 0px -25px;
    }
    
    .selection-housing-filtr-line {
        border-left: solid 1px #c8c8c8;
        height: 42px;
        position: absolute;
        margin: 10px 0px 0px 0px;
    }    
    
    .btn-still {
        padding: 22px 0px 18px 0px;        
        text-align: center;
        font-size: 16px;
        display: block;
        color: #6d6d6d;
        background: #fff;
    }
    
    .btn-arrival-date {
        font-size: 16px;
        display: block;
        color: #6d6d6d;
    }
    
    .btn-arrival-date-info {
        font-size: 16px;
        display: block;
        color: #444;
        margin: -4px 0px 0px 0px;
    }
    
    .btn-arrival-date-info .fa-angle-down {
        padding-left: 10px;
        font-size: 20px;        
    }
    
    .wr-background-selection-housing-filtr {
        background: #fff;
        padding: 13px 0px 6px 25px;     
    }    
    
    .pad-0 {
        padding: 0px 0px 0px 0px;
    }    

    .selection-housing {
        
    }
    
    .hotel-rating-count {
        background: #75727a;
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
        border: solid 2px #4f4f4f;
        color: #4f4f4f;
        padding: 11px 25px 8px 25px;
        font-size: 16px;
        margin: 50px 0px 15px 0px;
        text-decoration: none;
    }    
    
    .selection-housing-btn:hover {
        text-decoration: none;
        color: #fff;
        background-color: #4f4f4f;
    }
    
    .item-sel-hous-img {
        width: 100%;
        margin: 0px 0px 15px 0px;
    }
    
    .wr-item-sel-hous {
        margin: 0px 0px 25px 0px;
        color: #444;
    }
    
    .wr-item-sel-hous h2 {
        font-size: 19px;
        font-weight: bold;
        color: #444;
    }
    
    .wr-item-sel-hous .info {
        font-size: 17px;
    }
    
    .wr-item-sel-hous .item-info {
        font-size: 15px;
        line-height: 1.2;
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
        background: #444;
        display: block;
        padding: 0px 9px 0px 0px;
        color: #fff;
        font-weight: bold; 
        font-size: 25px;
        width: 30px;
        height: 30px;
        margin: -15px 0px 0px 28px
    }
   
    .wr-item-big-sel-hous {
        background: url('http://images6.fanpop.com/image/photos/40900000/Colorado-united-states-of-america-40962952-1024-682.jpg') 100% 100% no-repeat;
        background-size: auto;
        background-size: cover;
        height: 500px;
    }

    .wr-item-big-sel-hous .grey {
        background-color: rgba(162, 163, 164, 0.7);
        width: 100%;
        height: 500px;
    }

    .grey .row {
        width: 480px;
        padding: 24% 0px 0px 40px;
        color: #fff;
    }

    .grey h2 {
        font-weight: bold;
        font-size: 25px;
        color: #fff;
    }   

    .wr-select-excursions {
        background: url('https://million-wallpapers.ru/wallpapers/2/9/434034035674145/ch-rno-belyj-fon-s-gorami.jpg') 100% 50% no-repeat;
        background-size: auto;
        background-size: cover;
        height: 300px; 
        margin: 25px 0px 40px 0px;
        text-align: center;
        padding: 200px 0px 0px 0px;
    }
    
    .wr-select-excursions botton {
        background-color: #8e8888;
        border: solid 1px #8e8888;
        color: #fff;
        padding: 11px 25px 10px 25px;
        font-size: 17px;        
    }
    
    .wr-select-excursions botton:hover {
        background-color: #fff;
        color: #8e8888;
        cursor: pointer;
    } 

    .wr-sale-selection-housing {
        background-color: #a49b9a;
        color: #fff;
        padding: 30px 0px 45px 0px;
        margin: 0px 0px 25px 0px;
    }
    
    .wr-sale-selection-housing .title {
        font-size: 45px;
        font-weight: bold;
    }
    
    .wr-sale-selection-housing .name-hotel {
        margin: -20px 0px 0px 0px;
    }
    
    .wr-sale-selection-housing .sale {
        margin: 0px 0px 30px 0px;
        font-size: 20px;
        font-weight: bold;        
        display: block;        
    }
    
    .wr-sale-selection-housing botton {
        background-color: #a49b9a;
        border: solid 2px #fff;
        color: #fff;
        padding: 10px 25px 8px 25px;
        font-size: 16px;
    }
    
    .wr-sale-selection-housing botton:hover {
        color: #a49b9a;
        background-color: #fff;
        cursor: pointer;
    }

    .wr-box-info {
        margin: 40px 0px 45px 0px;
    }

    .wr-box-info h3 {
        font-weight: bold;
        font-size: 26px;
    }    
    
    @media(max-width:480px) {
        .wr-box-info {
            margin: 25px 0px 25px 0px;            
        }
        
        .wr-sale-selection-housing {
            margin: 25px 0px 25px 0px;
        }
    }
</style>
<header>
    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 text-right">
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
                <div class="user">Екатерина Иванова</div>
            </a>    
        </div>    
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="wr-bread-crumbs">
                <a class="bread-crumbs-link-active" href="">Главная</a> 
                <span class="bread-crumbs-separator">/</span>
                <a class="bread-crumbs-link">Подбор жилья</a>
            </div>    
        </div>    
    </div>        
</header>
<div class="wr-selection-housing-filtr">
    <div class="row space">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>    
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 wr-background-selection-housing-filtr">
            <a class="btn-arrival-date">Дата заезда</a>
            <p class="btn-arrival-date-info"><span>17 декабря 2022</span> <i class="fa fa-angle-down" aria-hidden="true"></i></p>
        </div>    
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 wr-background-selection-housing-filtr">
            <div class="selection-housing-filtr-line-left"></div>
            <a class="btn-arrival-date">Дата выезда</a>
            <p class="btn-arrival-date-info"><span>27 декабря 2022</span> <i class="fa fa-angle-down" aria-hidden="true"></i></p>            
        </div>    
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 wr-background-selection-housing-filtr">
            <div class="selection-housing-filtr-line-left"></div>
            <a class="btn-arrival-date">Гости</a>
            <p class="btn-arrival-date-info"><span>2 взрослых</span> <i class="fa fa-angle-down" aria-hidden="true"></i> <span>без детей</span></p>            
        </div>    
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 pad-0">
            <div class="selection-housing-filtr-line"></div>
            <a class="btn-still">Еще фильтры</a>
        </div>    
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 pad-0">
            <botton>Подобрать жильё</botton>
        </div>    
        
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>    
    </div>        
</div>        
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
                <p class="item-info">
                    Ламинарно-потоковые шкафы II класса защиты
                    обеспечивают надежную защиту оператора
                </p>
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
        <div class="wr-item-big-sel-hous">
            <div class="grey">
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2>Ламинарно-потоковые шкафы</h2>    
                        <p class="info">Ламинарно-потоковые шкафы II класса защиты обеспечивают надежную защиту оператора, рабочей зоны и окружающей среды при работе</p>                        
                        <br />
                        <p>
                            <span class="current-price">3 750 <i class="fa fa-rub" aria-hidden="true"></span></i>
                        </p>
                    </div>    
                </div>  
            </div>    
        </div>    
    </div>
</div>
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
</div>
<div class="wr-select-excursions">
    <botton>Выбрать экскурсию</botton>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="wr-sale-selection-housing text-center">
            <p class="title">Акция</p>
            <p class="name-hotel">Отель "Вершина"</p>
            <p class="sale">-20% на любой номер</p>
            <botton>Выбрать номер</botton>
        </div>
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
        <div class="wr-sale-selection-housing text-center">
            <p class="title">Акция</p>
            <p class="name-hotel">Отель "Вершина"</p>
            <p class="sale">-20% на любой номер</p>
            <botton>Выбрать номер</botton>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-10 col-xs-12 wr-box-info">
        <h3>Ламинарно-потоковые</h3>
        <p>
            Ламинарно-потоковые шкафы II класса защиты работают по принципу рециркуляции: воздух поступает в рабочую зону через приоткрытое защитное стекло и засасывается под столешницу, создавая надежную воздушную завесу и обеспечивая защиту оператора от инфекционных материалов. После очистки НЕPA фильтрами воздух равномерным вертикальным потоком опускается внутри рабочей зоны, создавая стерильные условия, и удаляется в воздуховод через отверстия в поверхности столешницы.
        </p>
        <p>    
            Большая часть воздуха (70%) проходит через основной фильтр и поступает обратно в рабочую зону, осуществляя рециркуляцию. 30% воздуха проходит через выходной НЕPA фильтр и выбрасывается в помещение. Эффективность фильтрации составляет 99,9995% для частиц размером 0,3 мкм (класс чистоты ISO 5).
        </p>
        <br />
        <center>
            <a href="" class="selection-housing-btn">Узнать больше</a>
        </center>
        <br />
    </div>
    <div class="col-lg-4 col-md-4 col-sm-10 col-xs-12 wr-box-info">
        <h3>Ламинарно-потоковые</h3>
        <p>
            Ламинарно-потоковые шкафы II класса защиты работают по принципу рециркуляции: воздух поступает в рабочую зону через приоткрытое защитное стекло и засасывается под столешницу, создавая надежную воздушную завесу и обеспечивая защиту оператора от инфекционных материалов. После очистки НЕPA фильтрами воздух равномерным вертикальным потоком опускается внутри рабочей зоны, создавая стерильные условия, и удаляется в воздуховод через отверстия в поверхности столешницы.
        </p>
        <p>    
            Большая часть воздуха (70%) проходит через основной фильтр и поступает обратно в рабочую зону, осуществляя рециркуляцию. 30% воздуха проходит через выходной НЕPA фильтр и выбрасывается в помещение. Эффективность фильтрации составляет 99,9995% для частиц размером 0,3 мкм (класс чистоты ISO 5).
        </p>
        <br />
        <center>
            <a href="" class="selection-housing-btn">Узнать больше</a>
        </center>
        <br />
    </div>
    <div class="col-lg-4 col-md-4 col-sm-10 col-xs-12 wr-box-info">
        <h3>Ламинарно-потоковые</h3>
        <p>
            Ламинарно-потоковые шкафы II класса защиты работают по принципу рециркуляции: воздух поступает в рабочую зону через приоткрытое защитное стекло и засасывается под столешницу, создавая надежную воздушную завесу и обеспечивая защиту оператора от инфекционных материалов. После очистки НЕPA фильтрами воздух равномерным вертикальным потоком опускается внутри рабочей зоны, создавая стерильные условия, и удаляется в воздуховод через отверстия в поверхности столешницы.
        </p>
        <p>    
            Большая часть воздуха (70%) проходит через основной фильтр и поступает обратно в рабочую зону, осуществляя рециркуляцию. 30% воздуха проходит через выходной НЕPA фильтр и выбрасывается в помещение. Эффективность фильтрации составляет 99,9995% для частиц размером 0,3 мкм (класс чистоты ISO 5).
        </p>
        <br />
        <center>
            <a href="" class="selection-housing-btn">Узнать больше</a>
        </center>
        <br />
    </div>    
</div>
@include('footer')