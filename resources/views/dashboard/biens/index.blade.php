@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md12 col-12 col">
            <div class="card">
                <div class="card-header">
                    <h4>Liste de mes biens</h4>
                    <hr>
                </div>
                <div class="card-body">
                    <a href="{{route('bien.create')}}" class="btn btn-primary mb-3">Ajouter un bien</a>
                        <div class="table-responsive">
                            <table
                                class="table table-striped
                            table-hover
                            table-bordered

                            align-middle">
                                <thead class="">
                                    <caption>Liste des biens</caption>
                                    <tr>
                                        <th>Type de bien</th>
                                        <th>Bien</th>
                                        <th>Type d'operation</th>
                                        <th>Coût</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($biens as $bien)
                                    <tr class="">
                                        <td scope="row">{{$bien->type_bien->libelle ?? ""}}</td>
                                        <td>
                                            <img src="{{$bien->image}}" alt="" width="100">
                                            {{$bien->libelle}} -
                                            {{$bien->localisation}}
                                        </td>
                                        <td>{{$bien->type_operation}}</td>
                                        <td>{{$bien->prix}} F CFA</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">Voir</a>
                                            <a href="#" class="btn btn-sm btn-success">Modifier</a>
                                        </td>
                                    </tr>

                                    @endforeach
                                    @if($biens->count()== 0)
                                    <tr>
                                        <td colspan="5" class="text-center">Aucune donnée</td>
                                    </tr>
                                    @endif


                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection
