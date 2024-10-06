<div class="wg-box">
    <div class="title-box">
        <i class="icon-coffee"></i>
        <div class="body-text">ابحث عن الطالب  بالإسم أو رقم الهويه او الصف</div>

    </div>
    <div class="flex items-center justify-between gap10 flex-wrap">
        <div class="wg-filter flex-grow col-md-6">


            <input type="text" wire:input='updateSearch($event.target.value)' class="form-control" placeholder="Search here..."
            style="width: 50%; padding:15px 25px; border-radius:15px" id="search-input">

        </div>



        <a class="tf-button style-1 w208" href="{{ route('user.create') }}"><i
                class="icon-plus"></i>اضافة مستخدم</a>
    </div>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('student.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file">Choose Excel file</label>
                <input type="file" class="form-control" name="file" id="file" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
    <div class="wg-table table-product-list">
        <ul class="table-title flex gap10 mb-14">
            <li>
                <div class="body-title">اسم المستخدم</div>
            </li>
            <li>
                <div class="body-title">رقم الهويه</div>
            </li>

            <li>
                <div class="body-title">الصف</div>
            </li>

            <li>
                <div class="body-title"  style="transform: translateX(-90%);">كلمه السر</div>
            </li>


                <div class="body-title">الاضافات</div>
            </li>
        </ul>
        <ul class="flex flex-column">
            @foreach ($students as $student)


            <li class="product-item gap14">
                <div class="image no-bg">
                    <img src="{{ asset("uploads/$student->image_path") }}" alt="">
                </div>
                <div class="flex items-center justify-between gap20 flex-grow">
                    <div class="name">
                        <a href="{{ route('profile.user' , $student->id) }}" class="body-title-2">
                        {{$student->name}}</a>
                    </div>
                    <div class="body-text" style="transform: translateX(-9%);">{{ $student->national_id }}</div>
                    <div class="body-text"style="transform: translateX(5%);">{{ $student->grade }}</div>



                    <div class="body-text" style="transform: translateX(-15%);">{{ $student->password }}</div>
                    <div class="list-icon-function">
                        <div  class="">
                            <a href="{{ route('profile.user' , $student->id) }}"><i  style="color:#3b82f6; font-size:15px" class="fas fa-eye eye-icon"></i></a>
                        </div>
                        <div class="item edit">

                            <a href="{{ route('user.edit' , $student->id) }}"><i style="color: green;" class="icon-edit-3"></i></a>
                        </div>
                        <div class="">
                            <form action="{{ route('user.delete' , $student->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="icon-trash-2"  style="border: none; color:red; width:fit-content;
                                transform: translateX(-25%)"></button>
                            </form>
                        </div>


                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    {{ $students->links() }}


</div>
