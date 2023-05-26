@extends('layouts.app')

@section('content')

<div class="container">
    <div id="dash"></div>
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header"><h1>Inscriptions</h1></div>
                <div class="card-body">
                    <br>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table id="dtBasicExample" class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date d'inscription</th>
                                <th scope="col">Status</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Formation</th>
                                <th scope="col">Client</th>
                                <th scope="col">Action</th>

                              </tr>
                            </thead>
                            <tbody>
                                @foreach ( $inscriptions as $inscription)

                                <tr>
                                  <th scope="row">{{ $inscription->id }}</th>
                                  <td>{{ $inscription->dateInscription }}</td>
                                  <td>{{ $inscription->status }}</td>
                                  <td>{{ $inscription->prix }}</td>
                                  <td>{{ $inscription->formation->nom }}</td>
                                  <td>{{ $inscription->user->name }}</td>
                                  <td>
                                    <form class="" action="{{ route('deleteSection' , $inscription->id) }}" method="POST">

                                        {!! csrf_field() !!}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $inscription->id }}">
                                            Details
                                        </button>

                                    </form>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
