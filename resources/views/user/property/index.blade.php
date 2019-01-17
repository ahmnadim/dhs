@extends('layouts.backend.app')

@push('css')
<!-- JQuery DataTable Css -->
<link href="{{asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="block-header">
	<a class="btn btn-primary waves-effect" href="{{ route('user.property.create') }}"><i class="material-icons">add</i><span>Add New Property</span></a>
</div>

<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    All Property
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Published By</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Is Approved</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Published By</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Is Approved</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        	@foreach ($properties as $key=>$property)
                        		<tr>
                        		    <td>{{ $key+1 }}</td>
                        		    <td>{{ $property->property_title}}</td>
                        		    <td>{{ $property->user->name }}</td>
                        		    <td>{{ $property->created_at}}</td>
                        		    <td>{{ $property->updated_at}}</td>
                        		    <td>
                        		    	@if ($property->is_approve == true)
                        		    		<span class="badge bg-blue">Approved</span>
                        		    	@else
                        		    	<span class="badge bg-pink">Pending</span>
                        		    	@endif
                        		    </td>
                        		    <td>
                        		    	@if ($property->property_publication_status == true )
                        		    		<span class="badge bg-blue">Published</span>
                        		    	@else
                        		    	<span class="badge bg-pink">Unpublished</span>
                        		    	@endif
                        		    </td>
                        		    <td>
                        		    	<a title="view" class="btn btn-info waves-effect" href="{{ route('user.property.show', $property->id) }}">
                        		    		<i class="material-icons">visibility</i>
                        		    	</a>

                      		    	<a title="Edit" class="btn btn-success waves-effect" href="{{ route('user.property.edit', $property->id) }}">
                        		    		<i class="material-icons">edit</i>
                        		    	</a>
                                                


                        		    	<button class="btn btn-danger" type="button" onclick="delete_property({{$property->id}})"><i class="material-icons">delete</i></button>
                                                <form id="delete-form-{{$property->id}}" action="{{ route('user.property.destroy',$property->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
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
<!-- #END# Exportable Table -->

@endsection

@push('js')
<!-- Jquery DataTable Plugin Js -->
<script src="{{asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/backend/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function delete_property(id){
                const swalWithBootstrapButtons = swal.mixin({
                  confirmButtonClass: 'btn btn-success',
                  cancelButtonClass: 'btn btn-danger',
                  buttonsStyling: false,
                })

                swalWithBootstrapButtons({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Yes, delete it!',
                  cancelButtonText: 'No, cancel!',
                  reverseButtons: true
                }).then((result) => {
                  if (result.value) {
                   event.preventDefault();
                   document.getElementById('delete-form-'+id).submit();

                  } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                  ) {
                    swalWithBootstrapButtons(
                      'Cancelled',
                      'Your Data is safe 🙂',
                      'error'
                    )
                  }
                })
                        }
    </script>
@endpush