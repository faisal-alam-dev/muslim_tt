@extends('backend.admin.master')

@section('admin_title', $title)

@section('admin_content')

    <div class="main-content">

        <section class="section">

            <div class="section-body">

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-header d-flex justify-content-between">
                                <h4>{{ $title }}</h4>
                                <h4>
                                    <a href="{{ route('admin.users.add') }}" class="btn btn-outline-primary"><i class="fas fa-plus"></i> Add</a>
                                    <a href="{{ URL::previous() }}" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Back</a>
                                </h4>
                            </div>

                            <div class="card-body">

                                @include('widgets.errors')
                                @include('widgets.success')

                                <div class="table-responsive">

                                    <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Number Of Book Packages</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($agent_data as $key => $item)
                                                <tr>
                                                    <td>{{ $agent_data->count() - $key }}</td>
                                                    <td>
                                                        <div class="table_slider_list_image" style="background-image: url({{ asset($item->thumbnail) }});"></div>
                                                    </td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>N/A</td>
                                                    <td>
                                                        <div class="badges">
                                                            @if ($item->status == 'active')
                                                                <span class="badge badge-success">Active</span>
                                                            @elseif ($item->status == 'inactive')
                                                                <span class="badge badge-danger">Inactive</span>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table_actions d-flex gap-2">
                                                            <a href="#" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#userDataModal" data-name="{{ $item->name }}" data-email="{{ $item->email }}" data-phone="{{ $item->phone ?? 'N/A' }}" data-address="{{ $item->address ?? 'N/A' }}" title="View User">
                                                                <i class="fas fa-eye"></i> View Details
                                                            </a>
                                                            {{-- <a href="{{ route('admin.users.edit', $item->id) }}" class="btn btn-outline-primary" alt="Edit" title="Edit">
                                                                <i class="far fa-edit"></i>
                                                            </a> --}}
                                                            <a href="#" class="btn btn-outline-primary statusBtn" data-toggle="modal" data-target="#PackageStatusModal" data-id="{{ $item->id }}">
                                                                <i class="fas fa-eye"></i> Status
                                                            </a>
                                                            {{-- <a href="#!" class="btn btn-outline-danger" data-del="{{ route('admin.users.delete', $item->id) }}" data-bs-toggle="modal" data-bs-target="#user_delete_modal" data-id="{{ $item->id }}" data-name="{{ $item->name }}" alt="Delete" title="Delete">
                                                                <i class="far fa-trash-alt"></i> Delete
                                                            </a> --}}
                                                        </div>
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

        </section>

    </div>

    <!-- User Data Modal -->
    <div class="modal fade" id="userDataModal" tabindex="-1" aria-labelledby="userDataModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body mt-4">
                    <div>
                        <h6>Name:</h6>
                        <p id="modal-name"></p> <!-- Set ID for JavaScript targeting -->
                    </div>
                    <div>
                        <h6>Email:</h6>
                        <p id="modal-email"></p> <!-- Set ID for JavaScript targeting -->
                    </div>
                    <div>
                        <h6>Phone:</h6>
                        <p id="modal-phone"></p> <!-- Set ID for JavaScript targeting -->
                    </div>
                    <div>
                        <h6>Address:</h6>
                        <p id="modal-address"></p> <!-- Set ID for JavaScript targeting -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Status Modal -->
    <div class="modal fade" id="PackageStatusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="form" action="{{ route('admin.users.status.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="form-group row mb-4">
                            <label>Status</label>
                            <select class="form-control selectric" name="status">
                                <option value="" disabled selected>- SELECT STATUS -</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

    {{-- Delete Modal --}}
    <div class="modal fade" id="user_delete_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel"></h3>
                </div>
                <div class="modal-body">
                    <h5> Are you sure you want to delete this User?</h5>
                </div>
                <div class="modal-footer" style="justify-content: space-between">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="" id="final_delete" class="btn btn-outline-danger">Confirm Delete</a>
                </div>
            </div>
        </div>
    </div>
    {{-- End: Delete Modal --}}

@endsection

@section('footer_script')

    <script>
        var userDataModal = document.getElementById('userDataModal');
        userDataModal.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            const button = event.relatedTarget;

            // Extract info from data-* attributes
            const name = button.getAttribute('data-name');
            const email = button.getAttribute('data-email');
            const phone = button.getAttribute('data-phone');
            const address = button.getAttribute('data-address');

            // Update the modal's content
            const modalName = userDataModal.querySelector('#modal-name');
            const modalEmail = userDataModal.querySelector('#modal-email');
            const modalPhone = userDataModal.querySelector('#modal-phone');
            const modalAddress = userDataModal.querySelector('#modal-address');

            // Set the text content for user data
            modalName.textContent = name;
            modalEmail.textContent = email;
            modalPhone.textContent = phone;
            modalAddress.textContent = address;
        });
    </script>

    <script>
        $(document).on('click', '.statusBtn', function() {
            let id = $(this).data('id');
            $('#id').val(id);
        });
    </script>

    <script>
        $('#user_delete_modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var modal = $(this)
            modal.find('.modal-title').html('Delete <span class="text-danger">' + name + '</span>');
            $('#final_delete').attr('href', button.attr('data-del'))
        })
    </script>
@endsection
