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
                                    <a href="{{ route('agent.package_booking.add') }}" class="btn btn-outline-primary"><i class="fas fa-plus"></i> Add</a>
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
                                                    <th>
                                                        <input type="checkbox" id="selectAll" />
                                                    </th>
                                                    <th>Package Name</th>
                                                    <th>Package Type</th>
                                                    <th>User Name</th>
                                                    <th>User Phone</th>
                                                    <th>User Email</th>
                                                    <th>User Message</th>
                                                    <th>User File</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($agent_package_booking_list as $key => $item)
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

                                                                @if ($item->status == 'pending')
                                                                    <a href="{{ route('agent.package_booking.edit', $item->id) }}" class="btn btn-outline-primary" alt="Edit" title="Edit">
                                                                        <i class="far fa-edit"></i> Edit
                                                                    </a>
                                                                @endif

                                                                <a href="{{ route('agent.package_booking.delete', $item->id) }}" class="btn btn-outline-danger">
                                                                    <i class="fas fa-trash"></i> Delete
                                                                </a>

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

@endsection
