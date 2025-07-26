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
                                    <a href="{{ URL::previous() }}" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Back</a>
                                </h4>
                            </div>

                            <div class="card-body">

                                @include('widgets.errors')
                                @include('widgets.success')

                                <div class="table-responsive">
                                    <form id="deleteSelectedForm" action="{{ route('admin.package.confirmation.bulk.delete') }}" method="POST">
                                        @csrf
                                        <div style="overflow-x: auto;">
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%; white-space: nowrap;">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <input type="checkbox" id="selectAll" />
                                                        </th>
                                                        <th>Package Name</th>
                                                        <th>Package Type</th>
                                                        <th>User Type</th>
                                                        <th>User Name</th>
                                                        <th>Customer Name</th>
                                                        <th>Customer Phone</th>
                                                        <th>Customer Email</th>
                                                        <th>Customer Message</th>
                                                        <th>Customer File</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($package_confirmation_message as $key => $item)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="selectItem" name="ids[]" value="{{ $item->id }}">
                                                            </td>
                                                            <td>{{ $item->package->package_name }}</td>
                                                            <td>
                                                                <div class="badges">
                                                                    @if ($item->package->package_type == 'umrah')
                                                                        <span class="badge badge-info">Umrah</span>
                                                                    @elseif ($item->package->package_type == 'hajj')
                                                                        <span class="badge badge-dark">Hajj</span>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                            <td>{{ $item->user_type }}</td>
                                                            <td>{{ $item->userNameByID->name ?? 'N/A' }}</td>
                                                            <td>{{ $item->user_name }}</td>
                                                            <td>{{ $item->user_phone }}</td>
                                                            <td>{{ $item->user_email }}</td>
                                                            <td>{{ $item->user_message }}</td>
                                                            <td>
                                                                @if ($item->nid_passport)
                                                                    <a href="{{ asset($item->nid_passport) }}" target="_blank" class="btn btn-outline-info">
                                                                        <i class="fas fa-file"></i> View File
                                                                    </a>
                                                                @else
                                                                    <span class="text-muted">No File</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="badges">
                                                                    @if ($item->status == 'pending')
                                                                        <span class="badge badge-warning">Pending</span>
                                                                    @elseif ($item->status == 'confirmed')
                                                                        <span class="badge badge-success">Confirmed</span>
                                                                    @elseif ($item->status == 'cancelled')
                                                                        <span class="badge badge-danger">Cancelled</span>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="table_actions">

                                                                    <a href="#" class="btn btn-outline-primary statusBtn" data-toggle="modal" data-target="#PackageStatusModal" data-id="{{ $item->id }}">
                                                                        <i class="fas fa-eye"></i> Status
                                                                    </a>

                                                                    <a href="{{ route('admin.agent.package_booking.invoice.view', $item->id) }}" class="btn btn-outline-info" target="_blank">
                                                                        <i class="fas fa-eye"></i> View Invoice
                                                                    </a>

                                                                    <a href="{{ route('admin.package.confirmation.delete', $item->id) }}" class="btn btn-outline-danger">
                                                                        <i class="fas fa-trash"></i> Delete
                                                                    </a>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <button type="submit" class="btn btn-outline-danger" id="deleteSelectedButton" disabled>Delete Selected</button>
                                    </form>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>


    <!-- Modal -->
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

                    <form id="form" action="{{ route('admin.package.confirmation.status') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="form-group row mb-4">
                            <label>Status</label>
                            <select class="form-control selectric" name="status">
                                <option value="" disabled selected>- SELECT STATUS -</option>
                                <option value="pending">Pending</option>
                                <option value="confirmed">Confirmed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>


                </div>
            </div>
        </div>
    </div>





@endsection

@section('footer_script')

    <script>
        $(document).on('click', '.statusBtn', function() {
            let id = $(this).data('id');
            $('#id').val(id);
        });
    </script>



    <script>
        document.getElementById('selectAll').addEventListener('change', function() {
            let checkboxes = document.querySelectorAll('.selectItem');
            checkboxes.forEach((checkbox) => {
                checkbox.checked = this.checked;
            });
            toggleDeleteButton();
        });

        document.querySelectorAll('.selectItem').forEach((checkbox) => {
            checkbox.addEventListener('change', function() {
                toggleDeleteButton();
            });
        });

        function toggleDeleteButton() {
            let selectedItems = document.querySelectorAll('.selectItem:checked').length;
            document.getElementById('deleteSelectedButton').disabled = selectedItems === 0;
        }
    </script>
@endsection
