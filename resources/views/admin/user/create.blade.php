@extends('admin.main.main')
@section('content')

<div class="main-content">
    <!-- main-content-wrap -->
    <div class="main-content-inner">
        <!-- main-content-wrap -->
        <div class="main-content-wrap">

            <!-- form-add-product -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{ route('user.store') }}" method="post" class="tf-section-2 form-add-product" enctype="multipart/form-data">
                @csrf
                <div dir="rtl" class="wg-box">

                    <fieldset class="name">
                        <div class="body-title mb-10">اسم المستخدم <span class="tf-color-1">*</span></div>

                        <input class="mb-10" type="text" placeholder="ادخل اسم المستخدم" name="name" tabindex="0" value="" aria-required="true" required="">

                    </fieldset>

                    <div class="gap22 cols">

                        <fieldset class="category">

                            <div class="body-title mb-10">رقم الهويه<span class="tf-color-1">*</span>
                            </div>
                            <div class="">
                                <input type="text" name="national_id" placeholder="الرقم القومي ">
                            </div>

                        </fieldset>

                    </div>

                    <div class="gap22 cols">
                        <fieldset class="category">
                            <div class="body-title mb-10">كلمة السر <span class="tf-color-1">*</span>
                            </div>
                            <div class="">
                                <input type="password" name="password" placeholder="كلمة السر ">
                            </div>
                        </fieldset>
                    </div>

                </div>
                <div dir="rtl" class="wg-box">
                    <fieldset>
                        <div class="body-title mb-10">ارفق صوره للمستخدم هنا</div>
                        <div class="upload-image mb-16">
                            <div class="item">
                                <img src="{{ asset('admin/images/upload/upload-1.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img id="imagePreview" src="" alt="">
                            </div>
                            <div class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="text-tiny">أسقط صورك هنا أو اختر <span
                                            class="tf-color">click to browse</span></span>
                                    <input type="file" id="myFile" name="image_path">
                                </label>
                            </div>
                        </div>
                        <div class="body-text">تحتاج إلى إضافة صوره على الأقل. انتبه إلى جودة الصور
                            التي تضيفها، والتزم بمعايير ألوان الخلفية. يجب أن تكون الصور بأبعاد
                          </div>
                    </fieldset>
                    <div class="col-12">
                        <fieldset class="name">
                            <div class="body-title mb-10">اضف نوعية المستخدم</div>
                            <div class="select mb-10">
                                <select dir="ltr" name="user_type" id="user_type" onchange="updateWilayat()">
                                    <option value="">اختر نوع المستخدم</option>
                                    <option value="معلم">معلم </option>
                                    <option value="طالب">طالب </option>
                                    <option value="اداري">اداري </option>
                                    <option value="المدير">المدير </option>
                                    <option value="التوجيه الطلابي">التوجيه الطلابي </option>
                                    <option value="الصحه المدرسيه">الصحه المدرسيه </option>
                                    <option value="مصادر التعلم">مصادر التعلم </option>
                                    <option value="الامن والسلامه">الامن والسلامه </option>

                                </select>
                            </div>
                        </fieldset>
                        <fieldset class="name" id="class_div">
                            <div class="body-title mb-10">اختر الصف</div>
                            <div class="select mb-10">
                                <select dir="ltr" name="grade" id="mohafaza" onchange="updateWilayat()">
                                    <option value="">اختر صف</option>
                                    <option value="الصف الرابع">الصف الرابع </option>
                                    <option value="الصف الخامس">الصف الخامس </option>
                                    <option value="الصف السادس">الصف السادس </option>
                                </select>
                            </div>
                        </fieldset>
                    </div>

                    <div class="col-12">
                        <button class="tf-button w-full" type="submit">اضافة مستخدم</button>
                    </div>
                </div>
            </form>
            <script>
            document.getElementById('user_type').addEventListener('change', function () {
                var userType = this.value;
                var classDiv = document.getElementById('class_div');
                if (userType === 'اداري' || userType === 'معلم' || userType === 'المدير' ||  userType === 'التوجيه الطلابي' ||  userType === 'الصحه المدرسيه' ||  userType === 'مصادر التعلم' || userType === 'الامن والسلامه'  ) {
                    classDiv.classList.add('hidden');
                } else {
                    classDiv.classList.remove('hidden');
                }
            });


                const imageUpload = document.getElementById('myFile');
                const imagePreview = document.getElementById('imagePreview');

                imageUpload.addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            imagePreview.src = e.target.result;
                            imagePreview.style.display = 'block';
                        }
                        reader.readAsDataURL(file);
                    }
                });

            </script>
            <!-- /form-add-product -->
        </div>
        <!-- /main-content-wrap -->
    </div>
    <!-- /main-content-wrap -->
    <!-- bottom-page -->
    <!-- /bottom-page -->
</div>

@endsection
