<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل الدخول</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('user/css/login.css') }}">
  </head>
  <body>
    
    <div class="container">
        <div class="right-image">
            <img src="{{ asset('user/images/صورة واتساب بتاريخ 1446-01-20 في 15.57.23_18f62518.jpg') }}" alt="">
          </div>
          <div class="left-image">
            <img src="{{ asset('user/images/صورة واتساب بتاريخ 1446-01-21 في 10.26.16_d495b896.jpg') }}" alt="">
          </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

      <h1 class="header" style="line-height: 1.5;">مرحبا بكم في موقع<br> مدرسة مسليه الإلكتروني</h1>
      <form action="{{ route('admin.login') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="email" class="form-label">الايميل الالكتروني</label>
          <input type="text" class="form-control" name="email" id="email" placeholder="أدخل الايميل الالكتروني" aria-describedby="email" >
          <div id="email" class="form-text">لا تشارك الايميل الالكتروني مع أي شخص آخر.</div>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">كلمة السر</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="أدخل كلمة السر">
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">تذكرني</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">تسجيل الدخول</button>

      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
