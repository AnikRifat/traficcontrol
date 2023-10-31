@extends('voyager::master')
@section('page_title', __('voyager::generic.viewing') . ' ' . 'Reports')
@section('content')
    <style>

    </style>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Ticket Code</th>
                            <th>Driver Name</th>
                            <th>Offence Name</th>
                            <th>Officer Name</th>
                            <th>Remarks</th>
                            <th>Fine</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $totalFine = 0; // Initialize the total fine
                        @endphp
                        @foreach ($reports as $data)
                            <tr>
                                <td>{{ $data->ticket_code }}</td>
                                <td>{{ $data->driver->name }}</td>
                                <td>{{ $data->OffenceType->name }}</td>
                                <td>{{ $data->officer->name }}</td>
                                <td>{{ $data->remarks }}</td>
                                <td>{{ $data->OffenceType->fine }}</td>
                                <td>
                                    @if ($data->paid_status == 0)
                                        @if (Auth::user()->role_id == 7)
                                            <button class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter">Pay</button>
                                            @include('voyager::reports.components.payment-model')
                                        @else
                                            <span class="badge badge-danger">Un Paid</span>
                                        @endif
                                    @else
                                        <span class="badge badge-success">Paid</span>
                                    @endif
                                </td>
                            </tr>
                            @php
                                $totalFine += $data->OffenceType->fine; // Add the fine to the total
                            @endphp
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <!-- Modal -->

        {{-- @if (Auth::user()->role_id == 7)
            <div class="card-title">
                <p>Total Fine: ${{ $totalFine }}</p>
            </div>
        @endif --}}
    </div>


@stop
