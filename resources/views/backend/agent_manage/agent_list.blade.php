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
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Number Of Book Packages</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($agent_data as $key => $item)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                        <div class="table_slider_list_image" style="background-image: url({{ asset($item->thumbnail) }});"></div>
                                                    </td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->address }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.agent.package_booking_list', $item->id) }}" alt="View Package Booking List" title="View Agent Package Booking List">{{ $item->package_confirmations_count }}</a>
                                                    </td>
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
                                                            {{-- Status Update --}}
                                                            <a href="#" class="btn btn-outline-primary statusBtn" data-bs-toggle="modal" data-bs-target="#statusUpdateModal" data-id="{{ $item->id }}" alt="Update Agent Status" title="Update Agent Status">
                                                                <i class="fa-solid fa-arrows-to-eye"></i>
                                                            </a>
                                                            {{-- View Agent Package Booking List --}}
                                                            <a href="{{ route('admin.agent.package_booking_list', $item->id) }}" class="btn btn-outline-dark" alt="View Package Booking List" title="View Agent Package Booking List">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                            {{-- Delete --}}
                                                            {{-- <a href="#" class="btn btn-outline-danger delete-package-booking" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal" data-delete-url="{{ route('admin.users.delete', $item->id) }}" alt="Delete Agent" title="Delete Agent">
                                                                <i class="fas fa-trash"></i>
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

    <!-- Status Update Modal -->
    <div class="modal fade" id="statusUpdateModal" tabindex="-1" aria-labelledby="statusUpdateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="statusUpdateModalLabel">Update Agent Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="packageStatusForm" action="{{ route('admin.users.status.update') }}" method="post">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="package_id">
                        <div class="form-group">
                            <label for="status_select">Status</label>
                            <select class="form-control selectric" name="status" id="status_select">
                                <option value="" disabled selected>- SELECT STATUS -</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Delete Confirmation Modal -->
    {{-- <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this agent?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="#" id="confirmDeleteButton" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div> --}}

@endsection

@section('footer_script')

    {{-- Package Status Update Modal Logic --}}
    <script>
        var statusUpdateModal = document.getElementById('statusUpdateModal');
        statusUpdateModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const packageId = button.getAttribute('data-id');
            document.getElementById('package_id').value = packageId;
        });
    </script>

    {{-- Delete Modal Logic --}}
    {{-- <script>
        var deleteConfirmationModal = document.getElementById('deleteConfirmationModal');
        deleteConfirmationModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const deleteUrl = button.getAttribute('data-delete-url');
            document.getElementById('confirmDeleteButton').setAttribute('href', deleteUrl);
        });
    </script> --}}
@endsection
