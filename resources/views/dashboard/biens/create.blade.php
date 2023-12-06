@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md12 col-12 col">
            <div class="card">
                <form action="{{route('bien.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h4>Formulaire d'ajout d'un bien</h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="">Type de bien</label>
                                    <select name="type_bien_id" id="type_bien_id" class="form-control" required onchange="checkType(this)">
                                        <option value="">Choisir le type de bien</option>
                                        @foreach ($typebiens as $typebien)
                                            <option value="{{$typebien->id}}">{{$typebien->libelle}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="">Libelle du bien</label>
                                    <input type="text" name="libelle" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="">Localisation du bien</label>
                                    <input type="text" name="localisation" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="">Superficie du bien en m²</label>
                                    <input type="text" name="superficie" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div  id="sauf_terrain"  style="display: none">

                            <div class="row mt-3">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombre de piece du bien</label>
                                        <input type="number" min="0" name="nombre_piece" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombre de salle de bain</label>
                                        <input type="number" min="0" name="nombre_douche" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombre de garage</label>
                                        <input type="number" min="0" name="nombre_garage" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="">Type d'opération</label>
                                    <select name="operation" id="" required class="form-control">
                                        <option value="">Choisir le type de l'opération</option>
                                        <option value="Vente">Vente</option>
                                        <option value="Location">Location</option>
                                        <option value="Réservation">Réservation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="">Coût</label>
                                    <input type="number" name="prix" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="">Image du bien</label>
                                    <input type="file" name="image" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Description du bien</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Enregistrer" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function checkType(elt)
        {
            document.getElementById('sauf_terrain').style.display = 'none';
            if(elt.value !=  4)
            {
                document.getElementById('sauf_terrain').style.display = 'block';
            }
        }
    </script>
@endsection
 {{-- $table->string('type_operation');
            $table->float('prix')->default(0);
            $table->string('image')->nullable();
            $table->text('description')->nullable();
           $table->unsignedBigInteger('bailleur_id')->nullable();
            $table->foreign('bailleur_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null'); --}}
