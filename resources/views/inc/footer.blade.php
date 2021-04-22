<style>
    .footer{
  padding:50px 0;
  background-color:#fff;
  color:#4b4c4d;
  margin-top: 50px;
}

.footer h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer ul a:hover {
  opacity:1;
}

.footer .item.social {
  text-align:right;
}

@media (max-width:767px) {
  .footer .item {
    text-align:center;
    padding-bottom:20px;
  }
}

@media (max-width: 768px) {
  .footer .item.social {
    text-align:center;
  }
}

.footer .item.social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin-left:10px;
  margin-top:22px;
  color:inherit;
  opacity:0.75;
}

.footer .item.social > a:hover {
  opacity:0.9;
}

@media (max-width:991px) {
  .footer .item.social > a {
    margin-top:40px;
  }
}

@media (max-width:767px) {
  .footer .item.social > a {
    margin-top:10px;
  }
}

.footer .copyright {
  margin-top:14px;
  margin-bottom:0;
  font-size:13px;
  opacity:0.6;
}
</style>

<div class="footer">
<footer>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4 col-md-3 item">
                <h3>{{ __("О нас") }}</h3>
                <ul>
                    <li><a href="#">{{ __("Кто мы?") }}</a></li>
                    <li><a href="#">{{ __("Команда") }}</a></li>
                    <li><a href="#">{{ __("Для СМИ") }}</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-3 item">
                <h3>{{ __("Подборки") }}</h3>
                <ul>
                    <li><a href="#">{{ __("Статьи") }}</a></li>
                    <li><a href="#">{{ __("Вакансии") }}</a></li>
                    <li><a href="#">{{ __("Стажировки") }}</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-3 item">
              <h3>{{ __("Прочее") }}</h3>
              <ul>
                  <li><a href="/resume-upload">{{ __("Резюме") }}</a></li>
                  <li><a href="#">{{ __("Консультация") }}</a></li>
                  <li><a href="/contact">{{ __("Контакты") }}</a></li>
              </ul>
          </div>
            <div class="col-lg-3 item social">
                <a href="https://t.me/youngcareer" class="fa fa-telegram"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
             
                <p class="copyright">Copyright: YoungCareer<br>
                  <a href="mailto:youngcareerkz@gmail.com">youngcareerkz@gmail.com</a></p>
            </div>
        </div>
    </div>
</footer>
</div>