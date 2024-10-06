@extends('admin.main.main')
@section('content')

<div class="main-content">
    <!-- main-content-wrap -->
    <div class="main-content-inner">
        <!-- main-content-wrap -->
        <div class="main-content-wrap">

            <!-- product-list -->
            @livewire('student-search')
            <!-- /product-list -->
            
        </div>
        <!-- /main-content-wrap -->
    </div>
    <!-- /main-content-wrap -->
    <!-- bottom-page -->

    <!-- /bottom-page -->
</div>

@endsection
