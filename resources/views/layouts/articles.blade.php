@extends('layouts.app')
@section('titleb'){{ __("Статьи") }}@endsection

@section('content')
<br>
<br><br><br><br><br><br>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');
* {box-sizing: border-box}

body, html {
  height: 100%;
  font-family: 'Staatliches';
}
.card-deck{
    height: 200px;
    width: 1200px;

    position: absolute;
    top: 30%;
    left: 20%;
    margin-top: -100px;
    margin-left: -200px;
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

.row {
   display: inline-block;
   flex-wrap: wrap;
   text-align: center;
   transform: translateY(300px);
  animation: slideUp .8s ease-in-out forwards .8s;

}
@keyframes slideUp {
  0% {
    transform: translateY(300px);
  }
  100% {
    transform: translateY(0px);
  }
}

.row > div[class*='col-'] {
  display: inline-block;
  color: black;
}

.col-sm-3 {
  margin-bottom: 20px;
}
</style>

<div class="card-deck">
    <div class="row">
     <div class="col-sm-3">
<div class="card" style="width: 16rem;">
<img src="https://www.remax.eu/uploads/agent-1/Denmark%20(Optimized).jpg" style="width:100%">
<div class="card-block">
    <h4 class="card-title">{{ __("YC Abroad: Дания") }}</h4>
  <p class="card-text">{{ __("Мировой кризис в прошлом десятилетии практически обошел данную страну стороной.")}}
    <br></p>
   <a href="https://telegra.ph/Daniya-10-23" class="btn btn-info">{{ __("Далее") }}
   <br></a>
   <br>
   <br>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 16rem;">
<img src="https://lp-cms-production.imgix.net/2019-06/09a64fea2933f6da77ab07d671d1f678-south-korea.jpg?auto=compress&fit=crop&fm=auto&sharp=10&vib=20&w=1200" style="width:100%">
<div class="card-block">
    <h4 class="card-title">{{ __("YC Abroad: Южная Корея") }}</h4>
  <p class="card-text">{{ __("Одним из весомых преимуществ работы в этой стране являются низкие ставки налогообложения.") }}</p>
   <a href="https://telegra.ph/YUzhnaya-Koreya-11-11" class="btn btn-info">{{ __("Далее") }}
   <br></a><br><br>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 16rem;">
<img src="https://assets3.thrillist.com/v1/image/2777566/1000x666.6666666666666/flatten;crop;jpeg_quality=70" style="width:100%">
<div class="card-block">
    <h4 class="card-title">{{ __("YC Abroad: Канада") }}</h4>
  <p class="card-text">{{ __("Работа в Канаде дает право получить вид на жительство или право на постоянное место жительства.") }} 
  <br></p>
   <a href="https://telegra.ph/Kanada-11-18" class="btn btn-info">{{ __("Далее") }}
   <br></a>
   <br><br>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 16rem;">
<img src="https://i0.wp.com/movingtips.wpengine.com/wp-content/uploads/2020/03/move-to-australia.jpg?fit=1024%2C684&ssl=1" style="width:100%">
<div class="card-block">
    <h4 class="card-title">{{ __("YC Abroad: Австралия") }}</h4>
  <p class="card-text">{{ __("Австралия – страна возможностей, которая открыта для мигрантов.") }}</p>
 <a href="https://telegra.ph/Avstraliya-11-25-2" class="btn btn-info">{{ __("Далее") }}
  <br></a><br><br>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 16rem;">
<img src="https://dy7oszgl9a56g.cloudfront.net/wp-content/uploads/2020/01/20095625/blog_header_job_interview.jpg" style="width:100%">
<div class="card-block">
    <h4 class="card-title">How to:...?</h4>
  <p class="card-text">{{ __("Подготовка к интервью") }}
      <br>{{ __("Часть 1.") }}
      <br></p>
 <a href="https://telegra.ph/How-to-11-28" class="btn btn-info">{{ __("Далее") }}
  <br></a>
  <br><br>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 16rem;">
 <img src="https://dy7oszgl9a56g.cloudfront.net/wp-content/uploads/2020/01/20095625/blog_header_job_interview.jpg" style="width:100%">
<div class="card-block">
    <h4 class="card-title">How to:...?</h4>
  <p class="card-text">{{ __("Подготовка к интервью") }}
      <br>{{ __("Часть 2.") }}
      <br>
  </p>
 <a href="https://telegra.ph/How-topart2-11-28" class="btn btn-info">{{ __("Далее") }}
  <br></a>
  <br><br>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 16rem;">
 <img src="https://dy7oszgl9a56g.cloudfront.net/wp-content/uploads/2020/01/20095625/blog_header_job_interview.jpg" style="width:100%">
<div class="card-block">
    <h4 class="card-title">How to:...?</h4>
  <p class="card-text">{{ __("Подготовка к интервью") }}
      <br>{{ __("Часть 3.") }}
      <br></p>
 <a href="https://telegra.ph/How-topart3-11-28" class="btn btn-info">{{ __("Далее") }}</a><br><br>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 16rem;">
<img src="https://dy7oszgl9a56g.cloudfront.net/wp-content/uploads/2020/01/20095625/blog_header_job_interview.jpg" style="width:100%">
<div class="card-block">
    <h4 class="card-title">How to:...?</h4>
  <p class="card-text">{{ __("Подготовка к интервью") }}
      <br>{{ __("Часть 4.") }}
      <br></p>
 <a href="https://telegra.ph/How-topart-4-11-28" class="btn btn-info">{{ __("Далее") }}</a><br><br>
</div>
</div>
</div>
</div>
</div>
<script>
    var button = document.getElementsByClassName('toggle-btn');
  var nav = document.getElementsByTagName('nav');
  
  var show = function (elem) {
    elem.style.display = 'block';
  };
  var hide = function (elem) {
    elem.style.display = 'none';
  };
  var toggle = function (elem) {
  
    if (window.getComputedStyle(elem).display === 'block') {
      hide(elem);
      return;
    }
  
    show(elem);
    
  };
  
  for(var i = 0; i < button.length; i++) {
    (function(index) {
      button[index].addEventListener('click', function() {
      
      for (var i = 0; i < nav.length; i++) {
        toggle(nav[i]);
      } 
       
       })
    })(i);
  }
  </script>
  
@endsection