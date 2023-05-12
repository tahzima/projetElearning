@extends('layouts.app')

@section('content')

<div class="container">
    <div id="dash"></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"><h1>Formations</h1></div>

                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        Ajouter Categorie
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter Formation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('addformation')}}" method="POST">

                                <div class="modal-body">
                                    {!! csrf_field() !!}
                                    <div class="mb-3">
                                      <label for="libelle" class="form-label">libelle</label>
                                      <input type="text" class="form-control" id="libelle" name="libelle">
                                    </div>
                                    <div class="mb-3">
                                      <label for="description" class="form-label">description</label>
                                      <input type="text" class="form-control" id="description" name="description">
                                    </div>
                                    <div class="mb-3">
                                      <label for="description" class="form-label">Prerequis</label>
                                      <input type="text" class="form-control" id="description" name="description">
                                    </div>
                                    <div class="mb-3">
                                      <label for="description" class="form-label">Niveau Difficulte</label>
                                      <input type="text" class="form-control" id="description" name="description">
                                    </div>
                                    <div class="mb-3">
                                      <label for="description" class="form-label">Programme</label>
                                      <input type="text" class="form-control" id="description" name="description">
                                    </div>
                                    <div class="mb-3">
                                      <label for="description" class="form-label">Prix</label>
                                      <input type="text" class="form-control" id="description" name="description">
                                    </div>
                                    <div class="mb-3">
                                      <label for="description" class="form-label">Duree Formation /Heure</label>
                                      <input type="text" class="form-control" id="description" name="description">
                                    </div>
                                    {{-- <div class="mb-3">
                                      <label for="description" class="form-label">Section</label>
                                      <input type="text" class="form-control" id="description" name="description">
                                    </div> --}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table id="dtBasicExample" class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Libelle</th>
                                <th scope="col">Description</th>
                                <th scope="col">Prerequis</th>
                                <th scope="col">Niveau Difficulte</th>
                                <th scope="col">Programme</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Duree Formation /Heure</th>
                                <th scope="col">Action</th>

                              </tr>
                            </thead>
                            <tbody>
                                @foreach ( $formations as $formation)

                                <tr>
                                  <th scope="row">{{ $formation->id }}</th>
                                  <td>{{ $formation->libelle }}</td>
                                  <td>{{ $formation->description }}</td>
                                  <td>{{ $formation->prerequisFormation }}</td>
                                  <td>{{ $formation->niveauDifficulte }}</td>
                                  <td>{{ $formation->programme }}</td>
                                  <td>{{ $formation->prix }}</td>
                                  <td>{{ $formation->dureeFormationParHeure }}</td>
                                  {{-- <td>{{ $category->categorie ? $category->categorie->libelle : "No Parent Categorie"}}</td> --}}
                                  <td>
                                    <form class="" action="{{ route('deleteFormation' , $formation->id) }}" method="POST">

                                        {!! csrf_field() !!}
                                        {{-- <input type="hidden" class="form-control" value="{{ $partenaire->id }}" id="nompartenaire" name="partenaireId"> --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $formation->id }}">
                                            modifier
                                        </button>
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger show_confirm"  type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                        </svg></button>

                                    </form>
                                  </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="editModal{{ $formation->id }}"  tabindex="-1" aria-labelledby="exampleModalLabel{{ $formation->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel{{ $formation->id }}">Modifier Formation</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('updateFormation',$formation->id)}}" method="POST">

                                            <div class="modal-body">
                                                {!! csrf_field() !!}
                                                <div class="mb-3">
                                                  <label for="libelle" class="form-label">libelle</label>
                                                  <input type="text" class="form-control" id="libelle" name="libelle" value="{{ $formation->libelle }}">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="description" class="form-label">description</label>
                                                  <input type="text" class="form-control" id="description" name="description" value="{{ $formation->description }}">
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>

</div>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });


      $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
        });

</script>
@endsection
