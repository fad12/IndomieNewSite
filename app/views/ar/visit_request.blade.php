@extends('layouts.master')

@section('content')
<!-- CONTENT PAGE -->

 <div class="row whitepage positioning inside">
   <ol class="breadcrumb">
  <li><a href="الرئيسية">الرئيسية</a></li>
  <li>حكايتنا</li>
</ol>

  <div class="col-md-4">
<div class="quotes">
  <p>محتوى وجبة إندومي من الدهون والسعرات الحرارية لا يسبب السمنة </p>
</div>

<div class="quotes">
  <p>تصنع إندومي من دقيق القمح القاسي السعودي الفاخر</p>
</div>
  </div>

  <div class="col-md-7">
     @foreach( $errors->all() as $message )
          <div class="alert alert-danger"> {{$message}}</div>
        @endforeach
        @if(Session::has('success'))
    <div class="alert alert-success">
        <h2>{{ Session::get('success') }}</h2>
    </div>
@endif
    
<h1>طلب زيارة المصنع</h1>

<p> 
  {{ Form::open(array('url' => 'visite_request_submit')) }}

  <p>اللقب</p>
  <select name="title" class="form-control">
      <option value="">إختر</option>
       <option value="السيد">السيد</option>
       <option value="السيدة">السيدة</option>
  </select>
   <br>
  <p>الاسم</p>
  <input type="text" name="position" class="form-control"><br>
  <p>البريد الإلكتروني</p>
  <input type="email"  name="email" class="form-control"><br>
  <p>رقم الجوال</p>
  <input type="number"  name="mobile" class="form-control"><br>
  <p>الموعد المفضل للزيارة</p>
  <input type="date"  name="visit_date" class="form-control"><br>
  <p>موعد بديل للزيارة</p>
  <input type="date"  name="visit_date_2" class="form-control"><br>
  <p>المدينة</p>
  <input class="form-control" id="disabledInput" type="text" value="جدة" disabled><br>
  <p>نوع الزيارة</p>
   <select name="visit_type" class="form-control">

       <option value="">إختر</option>
       <option value="شركات">شركات</option>
       <option value="مدارس">جامعات و مدارس</option>
       <option value="مدارس">جهات حومية</option>
  </select>
  <p>عدد أفراد الزيارة</p>
  <input type="text"  name="visitors_numper" class="form-control"><br>
  <p>ملاحظات</p>
  <textarea name="note"  class="form-control" rows="3"></textarea>
        <br><br>
  <input type="submit" class="btn btn-default btn-lg" value="أرسل">
{{ Form::close() }}
</p>
  </div>
   
</div>

<!-- / CONTENT PAGE -->

@stop
  