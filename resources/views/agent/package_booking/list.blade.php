@extends('agent.dashboard')

@section('agent_title', $title)

@section('agent_content')

    <div class="main-content">

        <section class="section">

            <div class="section-body">

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-header d-flex justify-content-between">
                                <h4>{{ $title }}</h4>
                                <h4>
                                    <a href="{{ route('agent.package_booking.add') }}" class="btn btn-outline-primary" alt="Add Package Booking" title="Add Package Booking"><i class="fas fa-plus"></i> Add</a>
                                    <a href="{{ URL::previous() }}" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Back</a>
                                </h4>
                            </div>

                            <div class="card-body">

                                @include('widgets.errors')
                                @include('widgets.success')

                                <div class="table-responsive">

                                    <div style="overflow-x: auto;">

                                        <table class="table table-striped table-hover" id="tableExport" style="width:100%; white-space: nowrap;">

                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Customer Name</th>
                                                    <th>Customer Phone</th>
                                                    <th>Package Name</th>
                                                    <th>Package Type</th>
                                                    {{-- <th>NID or Passport</th> --}}
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($agent_package_booking_list as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
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
                                                        {{-- <td>
                                                            @if ($item->nid_passport)
                                                                <a href="{{ asset($item->nid_passport) }}" target="_blank" class="btn btn-outline-info">
                                                                    <i class="fas fa-file"></i> View File
                                                                </a>
                                                            @else
                                                                <span class="text-muted">No File</span>
                                                            @endif
                                                        </td> --}}
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
                                                                {{-- View Booking Details --}}
                                                                <a href="#" class="btn btn-outline-success view-package-details" data-bs-toggle="modal" data-bs-target="#packageBookingModal" data-package="{{ json_encode($item) }}" alt="View Package Booking Details" title="View Package Booking Details">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                                {{-- Invoice --}}
                                                                <a href="{{ route('agent.package_booking.package_booking.invoice.view', $item->id) }}" class="btn btn-outline-info" target="_blank" alt="Package Booking Invoice" title="View Package Booking Invoice">
                                                                    <i class="fa-solid fa-file-invoice"></i>
                                                                </a>
                                                                {{-- Edit --}}
                                                                @if ($item->status == 'pending')
                                                                    <a href="{{ route('agent.package_booking.edit', $item->id) }}" class="btn btn-outline-primary" alt="Edit Package Booking" title="Edit Package Booking">
                                                                        <i class="far fa-edit"></i>
                                                                    </a>
                                                                @endif
                                                                {{-- Delete --}}
                                                                @if ($item->status == 'pending')
                                                                    <a href="#" class="btn btn-outline-danger delete-package-booking" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal" data-delete-url="{{ route('agent.package_booking.delete', $item->id) }}" alt="Delete Package Booking" title="Delete Package Booking">
                                                                        <i class="fas fa-trash"></i>
                                                                    </a>
                                                                @endif
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

            </div>

        </section>

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

@endsection

@section('footer_script')

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
@endsection
