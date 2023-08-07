@if (session('info'))
{{-- <div class="col-12 m-2">
    <div class="alert alert-primary" role="alert">
        <strong><i class="me-1" data-feather="info"></i> Informations :</strong>

        <div class="alert-body">
            {{ session('info') }}
        </div>
    </div>
</div> --}}
<div class="alert alert-primary mb-3" role="alert" style="background-color: rgb(26, 133, 233); color:white">

    <div class="alert-body">
        <strong><i class="me-1" data-feather="info"></i> Informations :</strong>
        <br>
        {{-- {{ __(session('info')) }} --}}
        {!! session('info') !!}
    </div>
</div>
@endif

