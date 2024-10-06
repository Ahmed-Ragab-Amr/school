@extends('admin.main.main')
@section('content')

<div class="main-content">
    <!-- main-content-wrap -->
    <div class="main-content-inner">
        <!-- main-content-wrap -->
        <div class="main-content-wrap">

            <!-- product-list -->
           @livewire('safty-search')
            <!-- /product-list -->
        </div>
        <!-- /main-content-wrap -->
    </div>
    <!-- /main-content-wrap -->
    <!-- bottom-page -->

    <!-- /bottom-page -->
</div>
{{-- <script>
    document.getElementById('search').addEventListener('input', function () {
        var searchQuery = this.value.toLowerCase();
        var items = document.querySelectorAll('#item-container .item');

        items.forEach(function(item) {
            var itemName = item.textContent.toLowerCase();
            if (itemName.includes(searchQuery)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
</script> --}}

@endsection
