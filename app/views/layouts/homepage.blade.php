<!doctype html>
<html>
<head>
	<title>{{$pageTitle}}</title>
	 <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="author" content="Fahd Alkathiri">
    <meta name="description" content="{{$Description}}">
    <meta name="keywords" content="@foreach ($keyWords as $keyWord){{ $keyWord }},@endforeach">

     <!--=====================Style=========================-->
      {{HTML::style('/css/bootstrap.css')}}
      {{HTML::style('/plugins/css/royalslider.css')}}
      {{HTML::style('/css/responsive.css')}}
      {{HTML::style('/css/style.css')}}

    


      <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.0/jquery.mobile.min.css" />
     <!--====================/Style=========================-->

     <!--=====================Script=========================-->
      {{HTML::Script('/js/jquery.js')}}
      <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
      {{HTML::Script('/plugins/js/jquery.easing-1.3.js')}}
      {{HTML::Script('/js/bootstrap.js')}}
      {{HTML::Script('/plugins/js/jquery.royalslider.min.js')}}
      

      {{HTML::Script('/js/custom.js')}}
      {{HTML::Script('/plugins/js/respond.js')}}

     <!--====================/Script=========================-->
</head>
<body>
  <!-- container -->
<div class="container indoContainer">

 <!-- header-->

    <!-- UP NAV  -->
 <div class="row" id="upnav">
 
  <ul class="upNav">
    <li><a href="خريطة-الموقع">خريطة الموقع</a>|</li>
    <li><a href="المركز-الإعلامي">المركز الإعلامي</a></li>
  </ul>
 </div> 
 <!-- /UP NAV  -->


<!-- main Header nav and logo-->
 <div class="row" id="mainHeader">
 <div  class="col-md-9" id="navList">
  <ul id="menu">
    <li><a href="الرئيسية">الرئيسية</a></li>
    <li>
        <a href="حكايتنا">حكايتنا</a>
        <ul>
            <li><a href="مصانع-إندومي">مصانع إندومي</a></li>
            <li><a href="شهادات-الجودة">شهادات الجودة</a></li>
        </ul>
    </li>
    <li><a href="منتجاتنا">منتجاتنا</a></li>
    <li><a href="إسمع-منا">إسمع منا</a>
 <ul>
            <li><a href="مراحل-التصنيع">مراحل التصنيع</a></li>
            <li><a href="حقائق-تهمك">حقائق تهمك</a></li>
            <li><a href="هل-تعمل">هل تعلم</a></li>
            <li><a href="طلب-زيارة-المصنع">طلب زيارة</a></li>
        </ul>
    </li>
    <li><a href="صحتك">صحتك</a>
<ul>
            <li><a href="اسال-طبيب">إسال طبيب</a></li>
            <li><a href="مقالات-التغذية">مقالات التغذية</a></li>
            <li><a href="مؤشر-الصحة">مؤشر الصحة</a></li>
            
        </ul>
    </li>
    <li><a href="الوسائط">الوسائط</a>
<ul>
            <li><a href="معرض-الصور">معرض الصور</a></li>
            <li><a href="معرض-الفيديو">معرض الفيديو</a></li>
            <li><a href="العاب">العاب</a></li>
            <li><a href="تطبيقات">تطبيقات</a></li>
        </ul>
    </li>
    <li><a href="إتصل-بنا">إتصل بنا</a></li>
</ul>
  <!-- SOCIAL BAR -->
 <div class="socialBar">
    <ul class="socialicons">
      <li class="facebook"><a href="#">facebook</a></li>
      <li class="twitter"><a href="#">twitter</a></li>
      <li class="youtube"><a href="#">youtube</a></li>
      <li class="instagram"><a href="#">instagram</a></li>
      <li class="linkedin"><a href="#">linkedin</a></li>
      <li class="google"><a href="#">google +</a></li>
      <li class="blogger"><a href="#">blogger</a></li>
    </ul>
    <ul class="quality-certificate">
      <li class="saso"><a href="#">شهادة الأيزو العالمية لسلامة الغذاء</a></li>
      <li class="sgs"><a href="#">شهادة هيئة المواصفات الصعودية</a></li>
    </ul>
 </div>
<!-- /SOCIAL BAR -->
 </div>
 <a a href="الرئيسية" class="col-md-3 logo"></a>
</div>
<!-- /main Header nav and logo-->






<!-- / HEADER -->

<!--  slider -->
 <div class="row">
 <div  class="col-md-12">
<div class="bannerHome">
  <div class="royalSlider rsDefault">
    <!-- image + animated block with text -->
    <div class="rsContent">
        <img class="rsImg" src="img/sliders/1.jpg" data-rsTmb="img/sliders/1.jpg" alt="image description" />
    </div>

     <div class="rsContent">
        <img class="rsImg" src="img/sliders/1.jpg" data-rsTmb="img/sliders/1.jpg" alt="image description" />
    </div>
  
</div>

</div>
</div>
</div>
<!-- / slider -->

<!-- CONTENT PAGE -->

 <div class="row whitepage positioning">
   <div  class="col-md-6 homehover">
    <img src="img/recipes/1.jpg" alt="وصفات اندومس">
    <p class="caption">
      وصفة إندومي مع البهارات الحارةوصفة إندومي مع البهارات الحارة وصف 
       إندومي مع البهارات الحارة .... <a href="#">المزيد</a>
    </p>
   </div>

   <div  class="col-md-6">
    <ul class="homeboxes">
      <li class="ask-doc"><a href=""></a></li>
      <li class="production-process"><a href=""></a></li>
      <li class="facts"><a href=""></a></li>
      <li class="indomie-quality-certificates"><a href=""></a></li>
    </ul>
   </div>
</div>

<!-- / CONTENT PAGE -->


   <div class="row whitepage positioning homehover">

    <!-- Related -->
    <div  class="col-md-4 related">
      <a href="#">{{ HTML::image("img/indomie-dash.png", "كنوز اندومي") }}</a>
      <h2>ألعاب</h2>
      <p>
       نشأت شركة باينهل العربية للأغذية المحدودة, المقدم الحصري لـ “اندومي” في المملكة العربية السعودية, مصنعها بالمملكة.
     </p>
    </div>

    <div  class="col-md-4 related">
      <a href="#">{{ HTML::image("img/faq.png", "أسئلة") }}</a>
      <h2>هل تعلم</h2>
      <p>
       نشأت شركة باينهل العربية للأغذية المحدودة, المقدم الحصري لـ “اندومي” في المملكة العربية السعودية, مصنعها بالمملكة.
     </p>
    </div>

    <div  class="col-md-4 related">
      <a href="#">{{ HTML::image("img/health-pra.png", "مؤشر الصحة") }}</a>
      <h2>مؤشر الصحة</h2>
      <p>
       نشأت شركة باينهل العربية للأغذية المحدودة, المقدم الحصري لـ “اندومي” في المملكة العربية السعودية, مصنعها بالمملكة.
     </p>
    </div><!-- / Related -->


<!-- Instagram -->
<div class="row whitepage">
    <div  class="col-md-12">
      <div class="instagram-sticky">{{ HTML::image("img/instagram.png", "instagram-sticky") }}</div>
<iframe src="http://www.intagme.com/in/?u=aW5kb21pZWtzYXxpbnwxMzN8OHwxfGZmZmZmZnx5ZXN8NXx1bmRlZmluZWQ=" class="ifinstagram"></iframe>   
</div>
</div><!-- /Instagram -->
</div>


<!-- FOOTER -->

<!--  Green Line -->
<div class="row footer-line positioning"><div  class="col-md-12"></div></div>     
<!--/ Green Line -->

<footer  class="row footer positioning">
     <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn newletter" type="button">إشترك</button>
      </span>
      <input type="text" class="form-control ">
    </div><!-- /input-group -->
      <div class="cert">{{ HTML::image("img/quality-certificate/footersaso.png", "instagram-sticky") }} </div>   
      <div class="cert">{{ HTML::image("img/quality-certificate/footersgs.png", "instagram-sticky") }} </div>

     <p class="copyright">جميع الحقوق محفوظة ٢٠١٤ إندومي السعودية</p>
  </div><!-- /.col-lg-6 -->

    <div  class="col-md-6">
      
      </div>
    </footer ><!-- / FOOTER -->
</div>  <!-- / container -->

<div class="container-fluid">
  <div  class="row">
     <div class="col-lg-12">
<div class="footerbg"></div>

</div>
</div>
</div>
</body>
</html>