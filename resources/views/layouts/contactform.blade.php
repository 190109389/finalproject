@extends('layouts.app')
@section('titleb'){{ __("Контакты")}}@endsection
@section('content')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<link href="img/favicon.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

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
    /* Contact Section
--------------------------------*/

#contact {
  box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
  padding: 60px 0;
  overflow: hidden;
}

#contact .section-header {
  padding-bottom: 30px;
}

#contact .contact-about h3 {
  font-size: 36px;
  margin: 0 0 10px 0;
  padding: 0;
  line-height: 1;
  font-family: "Montserrat", sans-serif;
  font-weight: 300;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: #007bff;
}

#contact .contact-about p {
  font-size: 14px;
  line-height: 24px;
  font-family: "Montserrat", sans-serif;
  color: #888;
}

#contact .social-links {
  padding-bottom: 20px;
}

#contact .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #fff;
  color: #007bff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  border: 1px solid #007bff;
}

#contact .social-links a:hover {
  background: #007bff;
  color: #fff;
}

#contact .info {
  color: #283d50;
}

#contact .info i {
  font-size: 32px;
  color: #007bff;
  float: left;
  line-height: 1;
}

#contact .info p {
  padding: 0 0 10px 36px;
  line-height: 28px;
  font-size: 14px;
}

#contact .form #sendmessage {
  color: #007bff;
  border: 1px solid #007bff;
  display: none;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin-bottom: 15px;
}

#contact .form #errormessage {
  color: red;
  display: none;
  border: 1px solid red;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin-bottom: 15px;
}

#contact .form #sendmessage.show,
#contact .form #errormessage.show,
#contact .form .show {
  display: block;
}

#contact .form .validation {
  color: red;
  display: none;
  margin: 0 0 20px;
  font-weight: 400;
  font-size: 13px;
}

#contact .form input,
#contact .form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

#contact .form button[type="submit"] {
  background: #007bff;
  border: 0;
  border-radius: 20px;
  padding: 8px 30px;
  color: #fff;
  transition: 0.3s;
}

#contact .form button[type="submit"]:hover {
  background: #0067d5;
  cursor: pointer;
}
</style>
<!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container-fluid">
  
          <div class="section-header">
            <h3>{{ __("Связаться с нами") }}</h3>
          </div>
  
          <div class="row wow fadeInUp">
  
            <div class="col-lg-6">
              <div class="map mb-4 mb-lg-0">
                    <img src="https://image.freepik.com/free-vector/hotline-operator-advises-client_7737-1766.jpg" alt="">
              </div>
            </div>
  
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-3 info">
                  <i class="ion-ios-location-outline"></i>
                  <p>Онлайн</p>
                </div>
                <div class="col-md-4 info">
                  <i class="ion-ios-email-outline"></i>
                  <p>youngcareerkz@gmail.com</p>
                </div>
                <div class="col-md-4 info">
                  <i class="ion-ios-telephone-outline"></i>
                  <p>+7 707 123 45 67</p>
                </div>
              </div>
             
         
        
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
                @endif
                <form  method="POST" action="{{ route('contact-form.store') }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                   <div class="form-group col-lg-6">
                      <input type="text" name="name" class="form-control" id="name" placeholder={{ __("ФИО") }} data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                        
                    </div>
                
                   <div class="form-group col-lg-6">
                      <input type="email" class="form-control" name="email" id="email" placeholder={{ __("Почта") }} data-rule="email" data-msg="Please enter a valid email" />
                      @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        
                    </div>
                  </div>
               
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder={{ __("Тема") }} data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    @if ($errors->has('subject'))
                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                @endif
               
                  </div>
                
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5"  data-rule="required" placeholder={{ __("Сообщение") }} data-msg="Please write something for us" ></textarea>
                    @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                        
                  </div> 
                  <div class="text-center"><button type="submit" title="Send Message" class="btn btn-dark btn-block">{{ __("Отправить") }}</button></div>
                </form>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #contact -->
      @endsection
