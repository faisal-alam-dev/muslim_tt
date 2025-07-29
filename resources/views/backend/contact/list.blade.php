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
                                    <form id="deleteSelectedForm" action="{{ route('admin.contact.deleteSelected') }}" method="POST">
                                        @csrf
                                        <div style="overflow-x: auto;">
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <input type="checkbox" id="selectAll" />
                                                        </th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($contact_message as $key => $item)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="selectItem" name="ids[]" value="{{ $item->id }}">
                                                            </td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ $item->phone }}</td>
                                                            <td>
                                                                <div class="table_actions">
                                                                    {{-- View Contact Message --}}
                                                                    <a href="#" class="btn btn-outline-success view-package-details" data-bs-toggle="modal" data-bs-target="#contactMessageModal" data-package="{{ json_encode($item) }}" alt="View Contact Message Details" title="View Contact Message Details">
                                                                        <i class="fas fa-eye"></i>
                                                                    </a>
                                                                    {{-- Delete --}}
                                                                    <a href="#" class="btn btn-outline-danger delete-package-booking" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal" data-delete-url="{{ route('admin.contact.delete', $item->id) }}" alt="Delete Contact Message" title="Delete Contact Message">
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

    <!--View Contact Message Modal -->
    <div class="modal fade" id="contactMessageModal" tabindex="-1" aria-labelledby="contactMessageModalLabel" aria-hidden="true" style="max-height: 80vh; overflow-y: auto;">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body mt-4">
                    <div>
                        <h6>Name:</h6>
                        <p id="modal-name"></p>
                    </div>
                    <div>
                        <h6>Email:</h6>
                        <p id="modal-email"></p>
                    </div>
                    <div>
                        <h6>Phone:</h6>
                        <p id="modal-phone"></p>
                    </div>
                    <div>
                        <h6>Subject:</h6>
                        <p id="modal-subject"></p>
                    </div>
                    <div>
                        <h6>Message:</h6>
                        <p id="modal-message"></p>
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
                    Are you sure you want to delete this contact message?
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
    {{-- Contact Message Modal Logic --}}
    <script>
        var contactMessageModal = document.getElementById('contactMessageModal');
        contactMessageModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Button that triggered the modal
            const packageData = JSON.parse(button.getAttribute('data-package'));

            // Populate modal fields
            document.getElementById('modal-name').textContent = packageData.name;
            document.getElementById('modal-email').textContent = packageData.email;
            document.getElementById('modal-phone').textContent = packageData.phone;
            document.getElementById('modal-subject').textContent = packageData.subject;
            document.getElementById('modal-message').textContent = packageData.message;

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

    {{-- Select All Checkbox Logic --}}
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
