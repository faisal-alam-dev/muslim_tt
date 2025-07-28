@extends('agent.dashboard')

@section('agent_title', $title)

@section('agent_content')

    <style>
        .invoice hr {
            border-top-color: #ccc;
        }

        @media print {
            @page {
                size: A4;
                margin: 0.5cm;
            }

            body * {
                visibility: hidden;
            }

            #invoice-print-area,
            #invoice-print-area * {
                visibility: visible;
            }

            #invoice-print-area {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
        }
    </style>

    <div class="main-content">

        <section class="section mb-3">

            <div class="section-body">

                <div class="row">

                    <div class="col-12">

                        <div class=" d-flex justify-content-between">
                            <h4><button class="btn btn-warning btn-icon icon-left" onclick="window.print()"><i class="fas fa-print"></i> Print</button></h4>
                            <h4>
                                <a href="{{ URL::previous() }}" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Back</a>
                            </h4>
                        </div>

                    </div>

                </div>

            </div>

        </section>


        <section class="section">

            <div class="section-body">

                <div class="invoice" id="invoice-print-area">

                    <div class="invoice-print">

                        <div class="row">

                            <div class="col-lg-12">

                                <div class="invoice-title">
                                    <h2>Invoice</h2>
                                    <div class="invoice-number">Order #{{ $confirmation->invoice_number ?? 'N/A' }}</div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-6">
                                        <address>
                                            <strong>Billed To:</strong><br>
                                            {{ $confirmation->user_name ?? 'N/A' }}<br>
                                            {{ $confirmation->user_phone ?? 'N/A' }}<br>
                                            {{ $confirmation->user_email ?? 'N/A' }}
                                        </address>
                                    </div>
                                    <div class="col-6 text-end">
                                        <address>
                                            <strong>Created By ({{ ucfirst($confirmation->user_type ?? 'User') }}):</strong><br>
                                            {{ $confirmation->agent->name ?? $confirmation->user_name }}<br>
                                            {{ $confirmation->agent->email ?? $confirmation->user_email }}
                                        </address>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        {{-- This space can be used for payment method details if available in the future --}}
                                    </div>
                                    <div class="col-6 text-end">
                                        <address>
                                            <strong>Order Date:</strong><br>
                                            {{ $confirmation->created_at->format('F j, Y') }}<br><br>
                                        </address>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="row mt-4">

                            <div class="col-md-12">

                                <div class="section-title">Order Summary</div>
                                {{-- <p class="section-lead">All items here cannot be deleted.</p> --}}
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-md">
                                        <tr>
                                            <th data-width="40">#</th>
                                            <th>Item</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-right">Totals</th>
                                        </tr>
                                        @php
                                            $package_price = (float) str_replace(',', '', $confirmation->package->package_price_with_food ?? 0);
                                        @endphp
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $confirmation->package->package_name ?? 'N/A' }} ({{ ucfirst($confirmation->package->package_type ?? '') }})</td>
                                            <td class="text-center">৳{{ number_format($package_price, 2) }}</td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">৳{{ number_format($package_price, 2) }}</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-8">
                                        {{-- <div class="section-title">Payment Method</div>
                                        <p class="section-lead">The payment method that we provide is to make it easier for you to pay
                                            invoices.</p> --}}
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Subtotal</div>
                                            <div class="invoice-detail-value">৳{{ number_format($package_price, 2) }}</div>
                                        </div>
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Paid Amount</div>
                                            <div class="invoice-detail-value">৳{{ number_format($confirmation->paid_amount ?? 0, 2) }}</div>
                                        </div>
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Due Amount</div>
                                            <div class="invoice-detail-value">৳{{ number_format($package_price - ($confirmation->paid_amount ?? 0), 2) }}</div>
                                        </div>
                                        <hr class="mt-2 mb-2">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Total</div>
                                            <div class="invoice-detail-value invoice-detail-value-lg">৳{{ number_format($package_price, 2) }}</div>
                                        </div>
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
