@if (session('warning'))
<div class="col-12">
    <div class="alert alert-warning mb-3" role="alert" style="background-color: rgb(255, 230, 0); color:white">
        <strong><i class="me-1" data-feather="alert-circle"></i> {{ __(session('Attention')) }} :</strong>

        <div class="alert-body">
            {{-- {{ __(session('warning')) }} --}}
            {{ session('warning') }}
        </div>
    </div>
</div>
@endif
