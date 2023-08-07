@if (session('success'))

<div class="alert alert-success mb-3" role="alert" style="background-color: rgb(93, 202, 93); color:white">

    <div class="alert-body">
        <strong><i class="me-1" data-feather="check"></i>Informations :</strong>
        <hr>
        {{-- {{ __(session('info')) }} --}}
        {!! session('success') !!}
    </div>
</div>
@endif
