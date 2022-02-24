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
                <a class="bread-crumbs-link-active">Подбор жилья</a>
                <span class="bread-crumbs-separator">/</span>
                <a class="bread-crumbs-link-active">Квартиры и апартаменты</a>                
                <span class="bread-crumbs-separator">/</span>
                <a class="bread-crumbs-link">Отель Домбай</a>                                
            </div>    
        </div>    
    </div>        
</header>

<style>
    .left-slide {}
    
    .left-slide img {
        margin: 0px 0px 20px 0px;
    }
</style>
    
    
<div class="row space">
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 left-slide">
        <img src="https://tvoidvor.com/wp-content/uploads/image24-min-30.jpg" width="100%" />
        <img src="https://tvoidvor.com/wp-content/uploads/image24-min-30.jpg" width="100%" />
        <div class="text-center">
            <p>+ 14</p>
            <p>фотографий</p>
        </div>
    </div>    
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <img src="https://tvoidvor.com/wp-content/uploads/image24-min-30.jpg" width="100%" />
    </div>    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h1>Отель Домбай</h1>
        <p>Аппартаменты <span>Сезонное предложение</span></p>
        
        <p>Итого за 11 ночей</p>
        <botton>Забронировать</botton><botton>1</botton>
    </div>    
</div>

<div class="row space">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h2>Общая информация</h2>
    </div>    
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

    </div>        
</div>






















@include('footer')