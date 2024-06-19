@extends('layouts.index')

@section('title', 'Payment Invoice')

@section('content')
    <script>
        var startDate = new Date('{{ $transaction->start_date }}');
        var endDate = new Date('{{ $transaction->end_date }}');
        var duration = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24)) + 1;
    </script>
    <div class="tables access page min-h-screen align-content-center">
        <div class="tab-header text-center">
            <p>Invoice</p>
            <h3>Transaction Invoice</h3>
        </div>
        <div class="container my-5">
            <div class="bg-white p-4 overflow-auto shadow-md rounded-lg" style="scrollbar-width: none">
                <div class="d-flex mb-4">
                    <div style="width: 50%">
                        <h4 class="mb-3 text-lg">Invoice Information</h4>
                        <div class="d-flex">
                            <div class="me-3">
                                <div><strong>Invoice No</strong></div>
                                <div><strong>Date</strong></div>
                                <div><strong>Due Date</strong></div>
                            </div>
                            <div>
                                <div>: {{ $transaction->id }}</div>
                                <div>: {{ now()->format('Y-m-d') }}</div>
                                <div>: {{ \Carbon\Carbon::parse($transaction->end_date)->format('Y-m-d') }}</div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 50%">
                        <h4 class="mb-3 text-lg">Buyer Information</h4>
                        <div class="d-flex">
                            <div class="me-3">
                                <div><strong>Booker Name</strong></div>
                                <div><strong>Booker E-mail</strong></div>
                            </div>
                            <div>
                                <div>: {{ $transaction->user->name }}</div>
                                <div>: {{ $transaction->user->email }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="min-w-full divide-y divide-gray-200 shadow-sm rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Car Booked</div>
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Daily Price</div>
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Duration</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $transaction->car->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    Rp{{ number_format($transaction->car->price) }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $start_date = \Carbon\Carbon::parse($transaction->start_date);
                                    $end_date = \Carbon\Carbon::parse($transaction->end_date);
                                    $duration = $start_date->diffInDays($end_date) + 1; // Include the end date in duration
                                @endphp
                                <div class="text-sm text-gray-900">
                                    {{ $duration }} day(s)
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-4">
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="d-flex">
                            <div class="me-3">
                                <div><strong>Subtotal</strong></div>
                                @if ($transaction->include_driver == 1)
                                    <div><strong>Driver Fee</strong></div>
                                @endif
                            </div>
                            <div>
                                <div>: Rp{{ number_format($transaction->car->price * $duration) }}</div>
                                @if ($transaction->include_driver == 1)
                                    <div>: Rp{{ number_format(50000 * $duration) }}</div>
                                @endif
                            </div>
                        </div>
                        <div><strong>Total:</strong> Rp{{ number_format($transaction->total_price) }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
