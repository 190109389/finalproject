@extends('layouts.app')
@section('titleb'){{ __("Главная") }}@endsection

@section('content')
<link href="img/favicon.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
<style>
    #intro {
  width: 100%;
  position: relative;
  background: url("../img/intro-bg.png") center bottom no-repeat;
  background-size: cover;
  padding: 200px 0 120px 0;
}

#intro .intro-img {
  width: 50%;
  float: right;
}

#intro .intro-info {
  width: 50%;
  float: left;
}

#intro .intro-info h2 {
  color: #007bff;
  margin-bottom: 40px;
  font-size: 48px;
  font-weight: 700;
}

#intro .intro-info h2 span {
  color: #74b5fc;
  text-decoration: underline;
}

#intro .intro-info .btn-get-started,
#intro .intro-info .btn-services {
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 32px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 0 20px 20px 0;
  color: #fff;
}

#intro .intro-info .btn-get-started {
  background: #007bff;
  border: 2px solid #007bff;
  color: #fff;
}

#intro .intro-info .btn-get-started:hover {
  background: none;
  border-color: #fff;
  color: #fff;
}

#intro .intro-info .btn-services {
  background: #007bff;
  border: 2px solid #007bff;
  color: #fff;
}

#intro .intro-info .btn-services:hover {
  background: none;
  border-color: #fff;
  color: #fff;
}

.section-header h3 {
  font-size: 36px;
  color: #283d50;
  text-align: center;
  font-weight: 500;
  position: relative;
}

.section-header p {
  text-align: center;
  margin: auto;
  font-size: 15px;
  padding-bottom: 60px;
  color: #556877;
  width: 50%;
}

/* Section with background
--------------------------------*/

.section-bg {
  background: #ecf5ff;
}

/* About Us Section
--------------------------------*/

#about {
  background: #fff;
  padding: 60px 0;
}

#about .about-container .background {
  margin: 20px 0;
}

#about .about-container .content {
  background: #fff;
}

#about .about-container .title {
  color: #333;
  font-weight: 700;
  font-size: 32px;
}

#about .about-container p {
  line-height: 26px;
}

#about .about-container p:last-child {
  margin-bottom: 0;
}

#about .about-container .icon-box {
  background: #fff;
  background-size: cover;
  padding: 0 0 30px 0;
}

#about .about-container .icon-box .icon {
  float: left;
  background: #fff;
  width: 64px;
  height: 64px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  text-align: center;
  border-radius: 50%;
  border: 2px solid #007bff;
  transition: all 0.3s ease-in-out;
}

#about .about-container .icon-box .icon i {
  color: #007bff;
  font-size: 24px;
}

#about .about-container .icon-box:hover .icon {
  background: #007bff;
}

#about .about-container .icon-box:hover .icon i {
  color: #fff;
}

#about .about-container .icon-box .title {
  margin-left: 80px;
  font-weight: 600;
  margin-bottom: 5px;
  font-size: 18px;
}

#about .about-container .icon-box .title a {
  color: #283d50;
}

#about .about-container .icon-box .description {
  margin-left: 80px;
  line-height: 24px;
  font-size: 14px;
}

/* Services Section
--------------------------------*/

#services {
  padding: 60px 0 40px 0;
  box-shadow: inset 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
}

#services .box {
  padding: 30px;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  margin: 0 10px 40px 10px;
  background: #fff;
  box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
  transition: all 0.3s ease-in-out;
}

#services .box:hover {
  -webkit-transform: translateY(-5px);
  transform: translateY(-5px);
}

#services .icon {
  position: absolute;
  left: -10px;
  top: calc(50% - 32px);
}

#services .icon i {
  font-size: 64px;
  line-height: 1;
  transition: 0.5s;
}

#services .title {
  margin-left: 40px;
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

#services .title a {
  color: #111;
}

#services .box:hover .title a {
  color: #007bff;
}

#services .description {
  font-size: 14px;
  margin-left: 40px;
  line-height: 24px;
  margin-bottom: 0;
}


#why-us {
  padding: 60px 0;
  background: #004a99;
}

#why-us .section-header h3,
#why-us .section-header p {
  color: #fff;
}

#why-us .counters {
  padding-top: 40px;
}

#why-us .counters span {
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  font-size: 48px;
  display: block;
  color: #fff;
}

#why-us .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  color: #cce5ff;
}


</style>    
<section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>{{ __("Мы поможем вам найти первую работу мечты в начале своей карьеры!") }}</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">{{ __("Далее") }}</a>
          <a href="#services" class="btn-services scrollto">{{ __("Наши услуги") }}</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">   
      <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">
  
          <header class="section-header">
            <h3>{{ __("О нас") }}</h3>
            <p>{{ __("Телеграм-канал для начинающих специалистов") }}</p>
          </header>
  
          <div class="row about-container">
  
            <div class="col-lg-6 content order-lg-1 order-2">
              <p>
                {{ __("Актуальные вакансии для начинающих специалистов (0-3 года опыта) в Казахстане и за рубежом каждый день. Стажировки, фултайм, парттайм, удаленка и волонтерства.") }}
              </p>
  
              <div class="icon-box wow fadeInUp">
                <div class="icon"><i class="fa fa-newspaper-o"></i></div>
                <h4 class="title"><a href="">{{ __("Еженедельные дайджесты") }}</a></h4>
                <p class="description">{{ __("Вакансии для студентов и молодых специалистов в агентствах ООН по всему миру") }}</p>
              </div>
  
              <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                <div class="icon"><i class="fa fa-globe"></i></div>
                <h4 class="title"><a href="">Young Career:Abroad</a></h4>
                <p class="description">{{ __("Разбор плюсов, минусов и способов трудоустройства за рубежом в рубрике Young Career:Abroad") }}</p>
              </div>
  
              <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                <div class="icon"><i class="fa fa-briefcase"></i></div>
                <h4 class="title"><a href="/sub">{{ __("Подписка") }}</a></h4>
                <p class="description">{{ __("Помощь в написании резюме, получение ежедневных актуальных вакансии и стажировок со всего мира") }}</p>
              </div>
  
            </div>  
            <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                <img src="img/about-img.svg" class="img-fluid" alt="">
              </div>
            </div>
            
          </div>
  
      </section><!-- #about --> 

      <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
        <div class="container">
  
          <header class="section-header">
            <h3>{{ __("Наши услуги") }}</h3>
          </header>
  
          <div class="row">
  
            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon"><i class="ion-ios-call-outline" style="color: #ff689b;"></i></div>
                <h4 class="title"><a href="">{{ __("Консультация") }}</a></h4>
                <p class="description">{{ __("Профессиональное консультирование  по всем вопросам трудоустройства") }}</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon"><i class="ion-ios-search-outline" style="color: #e9bf06;"></i></div>
                <h4 class="title"><a href="">{{ __("Подборка программ") }}</a></h4>
                <p class="description">{{ __("Ежедневная подборка вакансии, стажировок и волонтерских впрограмм") }}</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon"><i class="ion-ios-search-outline" style="color: #3fcdc7;"></i></div>
                <h4 class="title"><a href="">{{ __("Резюме") }}</a></h4>
                <p class="description">{{ __("Помощь в написании продающегося резюме, которое обеспечит вам работу") }}</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon"><i class="ion-ios-globe-outline" style="color:#41cf2e;"></i></div>
                <h4 class="title"><a href="">{{ __("Поиск программ") }}</a></h4>
                <p class="description">{{ __("Поиск программ для прохождения стажировки и волонтерства, а также вакансии") }}</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #services -->

      <!--==========================
      Statistics Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
        <div class="container">
          <header class="section-header">
            <h3>{{ __("Статистика канала") }}</h3>
            <p>{{ __("Для тех, кто хочет сотрудничать с нами ниже приведена статистика нашего канала") }}</p>
          </header>
  
          <div class="row counters">
  
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">3036</span>
              <p>{{ __("подписчиков") }}</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">~3.7k</span>
              <p>{{ __("дневной охват") }}</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">~3</span>
              <p>{{ __("постов / день") }}</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">1.29</span>
              <p>{{ __("индекс цитирования") }}</p>
            </div>
    
          </div>
  
        </div>
      </section>

      
  </main> 

@endsection