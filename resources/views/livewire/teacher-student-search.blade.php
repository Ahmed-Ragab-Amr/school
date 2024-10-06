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
    </div>

    <div class="wg-table table-product-list">
        <ul class="table-title flex gap10 mb-14">
            <li>
                <div class="body-title" style="transform: translateX(15%);">اسم المستخدم</div>
            </li>


            <li>
                <div class="body-title" style="transform: translateX(3%);">الصف</div>
            </li>



            <li>
                <div class="body-title" style="transform: translateX(-6%);">الاضافات</div>
            </li>
        </ul>
        <ul class="flex flex-column">
            @foreach ($users as $user)


            <li class="product-item gap14">
                <div class="image no-bg">
                    <img src="{{ asset("uploads/$user->image_path") }}" alt="">
                </div>
                <div class="flex items-center justify-between gap20 flex-grow">
                    <div class="name">
                        <a href="{{ route('studnet.profile' , $user->id) }}" class="body-title-2">
                        {{$user->name}}</a>
                    </div>
                    <div class="body-text"style="">{{ $user->grade }}</div>



                    <div class="list-icon-function">
                        <div  class="">
                            <a href="{{ route('studnet.profile' , $user->id) }}"><i  style="color:#3b82f6; font-size:15px" class="fas fa-eye eye-icon"></i></a>
                        </div>


                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

    {{ $users->links() }}

</div>


