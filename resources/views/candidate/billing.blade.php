@extends('candidate.layouts.master')
@section('content')
    <div class="container">
        <div class="dashboard-wrapper">
            <div class="container">
                <div class="row">
                    @include('candidate.layouts.sidebar')
                    <div class="billing-wrapper">

                        <!-- Alert -->
                        <div class="plan-alert">
                            <p>You do not have an active plan. Please choose a plan to continue.</p>
                            <a href="#" class="btn-primary">Select Your Plan</a>
                        </div>

                        <!-- Invoices -->
                        <div class="invoice-card">
                            <h4>Latest Invoices</h4>

                            <div class="invoice-table">
                                <div class="table-head">
                                    <span>#</span>
                                    <span>Date</span>
                                    <span>Plan</span>
                                    <span>Amount</span>
                                    <span>Payment Provider</span>
                                    <span>Payment Status</span>
                                </div>
                                {{-- @if ($invoices->isEmpty())
                                    {{-- show empty state --}}
                                {{-- @else --}}
                                    {{-- loop invoices --}}
                                {{-- @endif  --}}

                                <div class="table-empty">
                                    <div class="clipboard">
                                        📋
                                    </div>
                                    <p>No Data Found!</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <style>
                    .billing-wrapper {
                        max-width: 1000px;
                        margin: 40px auto;
                        font-family: system-ui, sans-serif;
                    }

                    /* Alert */
                    .plan-alert {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        background: #fff4cc;
                        border-radius: 8px;
                        padding: 14px 18px;
                        margin-bottom: 18px;
                    }

                    .plan-alert p {
                        margin: 0;
                        font-size: 14px;
                        color: #92400e;
                    }

                    .btn-primary {
                        background: #2563eb;
                        color: #fff;
                        padding: 8px 16px;
                        border-radius: 6px;
                        text-decoration: none;
                        font-size: 13px;
                        font-weight: 500;
                    }

                    .btn-primary:hover {
                        background: #1e40af;
                    }

                    /* Card */
                    .invoice-card {
                        border: 1px solid #e5e7eb;
                        border-radius: 10px;
                        background: #fff;
                    }

                    .invoice-card h4 {
                        margin: 0;
                        padding: 14px 18px;
                        border-bottom: 1px solid #e5e7eb;
                        font-size: 15px;
                    }

                    /* Table */
                    .invoice-table {
                        width: 100%;
                    }

                    .table-head {
                        display: grid;
                        grid-template-columns: 40px 1.2fr 1fr 1fr 1.5fr 1.3fr;
                        padding: 12px 18px;
                        background: #f9fafb;
                        font-size: 12px;
                        color: #6b7280;
                    }

                    .table-empty {
                        text-align: center;
                        padding: 60px 20px;
                    }

                    .clipboard {
                        font-size: 42px;
                        margin-bottom: 10px;
                    }

                    .table-empty p {
                        margin: 0;
                        font-size: 14px;
                        color: #6b7280;
                    }
                </style>
            </div>
        </div>
    </div>
    </div>
@endsection
