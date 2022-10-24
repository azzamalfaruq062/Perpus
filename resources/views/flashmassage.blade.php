@if(session()->has('success'))
<div class="alert alert-success alert-dismissible mt-2" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" ariahidden="true"></button>
    <i class="fa-solid fa-check"></i> {{session('success')}}
</div>
@elseif(session()->has('error'))
<div class="alert alert-warning alert-dismissible mt-2" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" ariahidden="true"></button>
    {{session('error')}}
</div>
@elseif($errors->any())
<div class="alert alert-danger alert-dismissible mt-2" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" ariahidden="true"></button>
    <i class="fa-solid fa-triangle-exclamation"></i> Masukkan Data dengan benar
</div>
@endif