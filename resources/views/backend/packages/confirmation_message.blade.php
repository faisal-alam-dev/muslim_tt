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
                                                        <th>Customer Name</th>
                                                        <th>Customer Phone</th>
                                                        <th>Package Name</th>
                                                        <th>Package Type</th>
                                                        <th>User Name</th>
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
                                                            <td>{{ $item->user_name }}</td>
                                                            <td>{{ $item->user_phone }}</td>
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
                                                            <td>{{ $item->userNameByID->name ?? 'N/A' }} ({{ $item->user_type ?? 'User' }})</td>
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
                                                                    {{-- Status Update --}}
                                                                    <a href="#" class="btn btn-outline-primary statusBtn" data-bs-toggle="modal" data-bs-target="#statusUpdateModal" data-id="{{ $item->id }}" alt="Update Package Booking Status" title="Update Package Booking Status">
                                                                        <i class="fa-solid fa-arrows-to-eye"></i>
                                                                    </a>
                                                                    {{-- View Booking Details --}}
                                                                    <a href="#" class="btn btn-outline-success view-package-details" data-bs-toggle="modal" data-bs-target="#packageBookingModal" data-package="{{ json_encode($item) }}" alt="View Package Booking Details" title="View Package Booking Details">
                                                                        <i class="fas fa-eye"></i>
                                                                    </a>
                                                                    {{-- Invoice --}}
                                                                    <a href="{{ route('admin.package_booking.invoice.view', $item->id) }}" class="btn btn-outline-info" target="_blank" alt="Package Booking Invoice" title="View Package Booking Invoice">
                                                                        <i class="fa-solid fa-file-invoice"></i>
                                                                    </a>
                                                                    {{-- Delete --}}
                                                                    <a href="#" class="btn btn-outline-danger delete-package-booking" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal" data-delete-url="{{ route('admin.package.confirmation.delete', $item->id) }}" alt="Delete Package Booking" title="Delete Package Booking">
                                                                        <i class="fas fa-trash"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>

                                        </div>

                                        <button type="button" class="btn btn-outline-danger" id="deleteSelectedButton" data-bs-toggle="modal" data-bs-target="#deleteSelectedConfirmationModal" disabled>Delete Selected</button>

                                    </form>

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
                    <h5 class="modal-title" id="statusUpdateModalLabel">Update Booking Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="packageStatusForm" action="{{ route('admin.package.confirmation.status') }}" method="post">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="package_id">
                        <div class="form-group">
                            <label for="status_select">Status</label>
                            <select class="form-control selectric" name="status" id="status_select">
                                <option value="" disabled selected>- SELECT STATUS -</option>
                                <option value="pending">Pending</option>
                                <option value="confirmed">Confirmed</option>
                                <option value="cancelled">Cancelled</option>
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

    <!--Package Booking Details Modal -->
    <div class="modal fade" id="packageBookingModal" tabindex="-1" aria-labelledby="packageBookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body mt-4">
                    <div>
                        <h6>Customer Name:</h6>
                        <p id="modal-user_name"></p>
                    </div>
                    <div>
                        <h6>Customer Phone:</h6>
                        <p id="modal-user_phone"></p>
                    </div>
                    <div>
                        <h6>Customer Email:</h6>
                        <p id="modal-user_email"></p>
                    </div>
                    <div>
                        <h6>Customer Message:</h6>
                        <p id="modal-user_message"></p>
                    </div>
                    <div>
                        <h6>Package Name:</h6>
                        <p id="modal-package_name"></p>
                    </div>
                    <div>
                        <h6>Package Type:</h6>
                        <p id="modal-package_type"></p>
                    </div>
                    <div>
                        <h6>Booking Date:</h6>
                        <p id="modal-created_at"></p>
                    </div>
                    <div>
                        <h6>NID or Passport:</h6>
                        <p id="modal-nid_passport"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this booking?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="#" id="confirmDeleteButton" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <!--Delete Selected Confirmation Modal -->
    <div class="modal fade" id="deleteSelectedConfirmationModal" tabindex="-1" aria-labelledby="deleteSelectedConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteSelectedConfirmationModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete all selected bookings?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" id="confirmDeleteSelectedBtn" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

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

    {{-- Package Booking Details Modal Logic --}}
    <script>
        var packageBookingModal = document.getElementById('packageBookingModal');
        packageBookingModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Button that triggered the modal
            const packageData = JSON.parse(button.getAttribute('data-package'));
            console.log(packageData);

            // Populate modal fields
            document.getElementById('modal-user_name').textContent = packageData.user_name;
            document.getElementById('modal-user_phone').textContent = packageData.user_phone;
            document.getElementById('modal-user_email').textContent = packageData.user_email;
            document.getElementById('modal-user_message').textContent = packageData.user_message;
            document.getElementById('modal-package_name').textContent = packageData.package.package_name;
            document.getElementById('modal-package_type').textContent = packageData.package.package_type;
            document.getElementById('modal-created_at').textContent = new Date(packageData.created_at).toLocaleString();

            const nidPassportLink = document.getElementById('modal-nid_passport');
            if (packageData.nid_passport) {
                nidPassportLink.innerHTML = `<a href="{{ asset('') }}${packageData.nid_passport}" target="_blank" class="btn btn-outline-info"><i class="fas fa-file"></i> View File</a>`;
            } else {
                nidPassportLink.textContent = 'No File';
            }
        });

        // Helper function to strip HTML tags
        function stripHtml(html) {
            let doc = new DOMParser().parseFromString(html, 'text/html');
            return doc.body.textContent || "";
        }
    </script>

    {{-- Delete Modal Logic --}}
    <script>
        var deleteConfirmationModal = document.getElementById('deleteConfirmationModal');
        deleteConfirmationModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const deleteUrl = button.getAttribute('data-delete-url');
            document.getElementById('confirmDeleteButton').setAttribute('href', deleteUrl);
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

    {{-- Bulk Delete Modal Logic --}}
    <script>
        document.getElementById('confirmDeleteSelectedBtn').addEventListener('click', function() {
            document.getElementById('deleteSelectedForm').submit();
        });
    </script>
@endsection
