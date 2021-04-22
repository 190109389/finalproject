@extends('layouts.app')
@section('titleb')Вакансии@endsection
@section('content')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Internships</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');
* {box-sizing: border-box}

body, html {
height: 100%;
font-family: 'Staatliches';
}

.sample-section-wrap {
position: relative;
background-color: white;
}
.sample-section {
position: relative;
max-width: 640px;
margin-left: auto;
margin-right: auto;
padding: 40px;
}

.btns_more {
background: transparent;
border: 1px solid var(--contrast-color);
border-radius: 50px;
padding: 8px 12px;
color: #BF307F;
font-size: 16px;
text-transform: uppercase;
position: relative;
margin-top: 15px;
outline: none;
transform: translateY(50px);
animation: slideUp .8s ease-in-out  forwards 1s;
}



@keyframes slideIn {
0% {
transform: translateX(500px) scale(.2);
}
100% {
transform: translateX(0px) scale(1);
}
}

@keyframes slideUp {
0% {
transform: translateY(300px);
}
100% {
transform: translateY(0px);
}
}

@keyframes expand {
0% {
transform: translateX(1400px);
}
100% {
transform: translateX(0px);
}
}


section#cards {
margin: 0;
padding: 25px 0 75px 0;
min-height: 100vh;
box-sizing: border-box;
}
section#cards .container {
width: 80vw;
margin: 0 auto;
box-sizing: border-box;
}
@media (min-width: 769px) {
section#cards .container {
width: 75vw;
}
}

section#cards .section-title {
margin: 0 0 1rem 0;
padding: 2rem 0 0 0;
}
.card {
display: flex;
background: white;
margin: 1rem 0;
padding: 0;
box-shadow: 0 0 9px gray;
transition: all 0.4s;
}
.card:hover {
box-shadow: 0 0 16px 3px gray;
}
.card .card-image {
flex: 0 0 50%;
background-image: url('https://dannicholson.ca/wp-content/uploads/2016/03/social-media-strategy-e1458924519585.jpg');
background-size: cover;
background-position: center;
}
.card .card-content {
padding: 2rem;
}

.wrapper {
text-align: center;
}

.button {
position: absolute;
top: 470%;
background-color: transparent;
width: 45px;
height: 45px;
border: 1px solid black;
}

</style>
<br>
<br>
<br>
<br>
<br>
<section id="cards">
    <div class="container">
      <div class="card">
        <div class="card-image"><img src="https://media-exp1.licdn.com/dms/image/C4D0BAQG4_p0dx7fxQA/company-logo_200_200/0/1567983555979?e=2159024400&v=beta&t=mkwSGSIJwXSmbLkAL13jmoh9FRvOEtZ221E-ofL1P4I" width="50px", height="50px" ></div>
        <div class="card-content">
          <h3 class="card-title">{{ __("Ассистент аудитора, Moore Stephens Kazakhstan ") }}</h3>
              <h4> {{ __("Локация: Нур-Султан, Казахстан") }}</h4>
          <p class="card-body">{{ __("Ищут кандидата с высшим профессиональным (финансово-экономическим) образованием, опытом работы в сфере аудита/бухгалтерского учёта/финансовой, знанием бухгалтерского учёта и готовностью к командировкам. Нужно выполнять аудиторские процедуры в соответствии с заданием руководителя проекта, выезжать в командировки, подготовлять рабочие файлы и обсуждать работу с аудиторской командой.") }}</p>
            <a href="https://hh.kz/vacancy/43900189">{{ __("Ссылка") }}</a>
        </div>
      </div>
  
      <div class="card">
        <div class="card-image"><img src="https://lh3.googleusercontent.com/proxy/bBdkO72zCk0I1ty7NxNp-cG94E0Ke1lqweC9c-C1oUidNmoM3k1exE09-X_seTYLAG-z-Zr1vmcliF6GkFkuRlXUPw_Okf1Rq66taFUXp3mk3oRGB4fAEmxyD6lAkPY59bM" width="50px", height="50px" ></div>
        <div class="card-content">
          <h3 class="card-title">{{ __("Личный помощник Вице-президента по юридическим вопросам, Air Astana") }} </h3>
              <h4>{{ __("Локация: Алматы, Казахстан") }}</h4>
          <p class="card-body">{{ __("Ищут кандидата с высшим юридическим образованием,знанием казахского, русского, английского языков на продвинутом уровне, организации делопроизводство и систематизации и хранения служебной документации, а также владением деловой письменной и устной речью. Нужно будет организовывать и вести документооборот в департаменте, рассылать необходимые материалы руководителю или конкретным исполнителям, согласно принятому регламенту, вести запись встреч и переговоров, составлять письма, запросы, другие документы, готовить ответы на письма по поручению, консолидировать всю необходимую информацию для бюджета департамента и осуществлять устные и письменные переводы по поручению непосредственного руководителя.") }}</p>
          <a href="https://hh.kz/vacancy/43612565">{{ __("Ссылка") }}</a>
        </div>
      </div>
  
      <div class="card">
        <div class="card-image"><img src="https://yt3.ggpht.com/ytc/AAUvwnjv5sm1tHxDmlGzhcsSixpBwmZ6GqFpYMwkIyRJYQ=s900-c-k-c0x00ffffff-no-rj" width="50px", height="50px" ></div>
        <div class="card-content">
          <h3 class="card-title">{{ __("Бизнес-аналитик, KAZ Minerals") }} </h3>
              <h4>{{ __("Локация: Алматы, Казахстан") }}</h4>
          <p class="card-body">{{ __("KAZ Minerals в поиске кандидатов на позицию бизнес-аналитика. Требуются высшее образование в области автоматизации / информационных технологий / автоматизированных систем управления технологическим процессом (АСУ ТП) / физмат / информационно-коммуникационных технологий, опыт работы не менее 2х лет. Необходимы знания в области автоматизации технологических процессов и контрольно-измерительных приборов и автоматики (КИПиА), знание технологических процессов горнодобывающей и перерабатывающей отраслей, навыки разработки необходимой технической документации, навыки работы с оборудованием и программным обеспечением ведущих производителей АСУ ТП и КИПиА (ABB, Siemens, SE).  В обязанности входит выполнение работ по внедрению и развитию систем АСУТП, сопровождение и экспертная поддержка система автоматизации, подготовка необходимых данных (обследование объектов) и составление технических заданий (формализация требований бизнес-заказчиков) на проектирование АСУТП и ее отдельных этапов, и подсистем, участие в разработке технических и рабочих решений.") }}</p>
          <a href="https://www.linkedin.com/jobs/view/2492126321/?alternateChannel=search&refId=Ua8qSD3alrOPMQEtuqqYYw%3D%3D&trackingId=vIySbpp%2FhjPx8dByWL7NXw%3D%3D">{{ __("Ссылка") }}</a>
        </div>
      </div>
  
      <div class="card">
        <div class="card-image"><img src="http://afk.kz/WhatsApp%20Image%202018-05-11%20at%2021.12.45.jpeg" width="50px", height="50px" ></div>
        <div class="card-content">
          <h3 class="card-title">{{ __("Plsql-разработчик, Home Credit Bank Kazakhstan") }} </h3>
              <h4>{{ __("Локация: Алматы, Казахстан") }}</h4>
          <p class="card-body">{{ __("Home Credit Банк ищут Plsql разработчика. Требуются навыки работы с SQL и Oracle PL / SQL, PHP, SpringBoot. Нужно будет заниматься разработкой новой и модификацией существующей функциональности ИС Банка с использованием языка PL / SQL, разрабатывать архитектуры рассмотрения и интеграции и бизнес приложений.") }}</p>
          <a href="https://www.linkedin.com/jobs/view/2466688001/?alternateChannel=search&refId=Ua8qSD3alrOPMQEtuqqYYw%3D%3D&trackingId=rQ4t2dfWrvUyyZDgrN%2FwFQ%3D%3D">{{ __("Ссылка") }}</a>
        </div>
      </div>
  
      <div class="card">
        <div class="card-image"><img src="https://webmate.kz/sites/default/files/inline-images/16864640_1856324974623554_2454102989946031873_n.png" width="50px", height="50px" ></div>
        <div class="card-content">
          <h3 class="card-title">{{ __("Middle PPC специалист, Международное агентство интернет-маркетинга") }} </h3>
              <h4>{{ __("Локация: Алматы, Казахстан (в период карантина возможна удаленная работа)") }}</h4>
          <p class="card-body">{{ __("Компания предоставляет услуги поискового продвижения сайтов, контекстной рекламы и другие виды эффективной интернет рекламы; лидер по SEO и контекстной рекламе в Казахстане, Украине и Болгарии. Ищут кандидата с опытом работы более 2 лет в сфере контекстной рекламы и продвинутым уровнем пользования Google Analytics, GTM. Нужно будет заниматься составлением рекламных объявлений, мониторингом ставок, ведением статистики и анализом эффективности рекламных кампаний. Узнать больше и откликнуться на вакансию можно, написав в тг @networkhr или по телефону +77717532807, а так же почте: ba@recrutoman.kz") }}</p>
        </div>
      </div>
  
      <div class="card">
        <div class="card-image"><img src="https://cnv00.soundstream.media/image/aHR0cDovL3N0YXRpYy5zb3VuZHN0cmVhbS5tZWRpYS91cGxvYWRzL3RtcC8yMDIwLTAzLTI3LzVlN2UwYWIwOWY0MTEuanBn?w=1300&h=1300&ext=jpeg" width="50px", height="50px" ></div>
        <div class="card-content">
          <h3 class="card-title">{{ __("Редактор дневников трат, Тинькофф Журнал ") }} </h3>
            <h4>{{ __("Локация: удаленно") }}</h4>
          <p class="card-body">{{ __("Дневники — это постоянная рубрика Тинькофф-журнала, в которой люди описывают неделю своей жизни: на что тратят деньги, как ведут бюджет и как вообще живут. Статьи выходят по будням пять раз в неделю. Вышло уже больше 200 дневников, все выпуски можно посмотреть в отдельной подборке. Ищут кандидата, который любит редактировать тексты и готов к рутинной работе и большим объемам; опыт работы литературным редактором приветствуется. Нужно будет заниматься редактурой текстов, отправленных читателями; задавать выбранному герою вопросы, которые помогут раскрыть его и подробнее узнать о жизни, бюджете и тратах.") }}</p>
          <a href="https://uptu.work/job/tinkoff-zhurnal-rossija-5-redaktor-dnevnikov-trat/">{{ __("Ссылка") }}</a>
        </div>
      </div>

      <div class="card">
        <div class="card-image"><img src="https://c0.klipartz.com/pngpicture/543/934/gratis-png-logotipo-de-la-aplicacion-de-google-google-logo-g-suite-google-thumbnail.png" width="50px", height="50px" ></div>
        <div class="card-content">
          <h3 class="card-title">Legal Trainee, Google </h3>
             <h4>{{ __("Локация: Москва, РФ") }}</h4>
          <p class="card-body">{{ __("Ищут студентов бакалавриата в области права и с опытом юридического анализа и исследований. Опыт работы в юридической фирме или в медиа / технологической компании будет плюсом. Нужно будет проводить юридические исследования по различным правовым темам, отвечать на юридические запросы и помогать команде юристов в подготовке и управлении судебными исками.") }}</p>
          <a href="https://careers.google.com/jobs/results/114423753619710662-legal-trainee-russian-english-fixed-term-contract/">{{ __("Ссылка") }}</a>
        </div>
      </div>

      <div class="card">
        <div class="card-image"><img src="https://media-exp1.licdn.com/dms/image/C560BAQF5TpphM3nprQ/company-logo_200_200/0?e=2159024400&v=beta&t=w3EDhOSk_QGi3I16201e0oiyR-LPhb9-LXRumN5WwkM" width="50px", height="50px" ></div>
        <div class="card-content">
          <h3 class="card-title">Contracts Specialist, Covance </h3>
              <h4>{{ __("Локация: несколько локаций по миру") }}</h4>
          <p class="card-body">{{ __("Ищут человека с дипломом бакалавриата желательно в юридической сфере, с опытом ведения переговоров и с отличным английским. Нужно будет выполняет функции администрирования контрактов, отвечать за соблюдение стандартных операционных процедур и за своевременное обновление ведомственной системы отслеживания контрактов.") }}</p>
          <a href="https://careers.covance.com/global/en/job/COVAGLOBAL62952EXTERNAL/Contracts-Specialist?utm_source=linkedin&utm_campaign=na&utm_medium=job&iis=Jobboard&iisn=LinkedIn">{{ __("Ссылка") }}</a>
        </div>
      </div>

      <div class="card">
        <div class="card-image"><img src="https://pbs.twimg.com/profile_images/980656222251765761/i8XBgneL.jpg" width="50px", height="50px" ></div>
        <div class="card-content">
          <h3 class="card-title">Quality Assurance Engineer, Sberbank</h3>
              <h4>{{ __("Локация: Алматы, Казахстан") }}</h4>
          <p class="card-body">{{ __("Ищут кандидата с уверенным пониманием циклов разработки ПО и роли QA в нем, с опытом функционального тестирования приложении, с опытом работ с тест-менеджмент системами и внедрения QA метрик. Нужно будет создавать тестовые документации, проводить тест производительности и работать над автоматизацией и разработкой тестирования с помощью Selenium, Selenide, Jenkins и тд.") }}</p>
          <a href="https://www.linkedin.com/jobs/view/897178150?showGuestApplyModal=true">{{ __("Ссылка") }}</a>
        </div>
      </div>
      
    </div>
  </section>
@endsection