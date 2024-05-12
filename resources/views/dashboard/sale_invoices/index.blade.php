@extends('dashboard.master')
@section('title' , 'Sale Invoices')
@section('body')

    <section id="dom">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">All Invoices</h4>
{{--                        <a class="btn btn-outline-primary btn-md mt-1" href="{{ asset('/dashboard/sale_invoices/create') }}">--}}
{{--                            New Invoice--}}
{{--                        </a>--}}
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                <li><a data-action="close"><i class="feather icon-x"></i></a></li>

                            </ul>

                        </div>
                    </div>
                    <!-- Zero configuration table -->
                    <section id="configuration">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="card">

                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Client Name</th>
                                                    <th>Subtotal</th>
                                                    <th>Discount</th>
                                                    <th>Total</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($sale_invoices as $key => $sale_invoice)
                                                <tr>
                                                    <td>{{ $key +1 }}</td>
                                                    <td>{{ $sale_invoice->customers->name }}</td>
                                                    <td>{{ $sale_invoice->subtotal}}</td>
                                                    <td>{{ $sale_invoice->discount}}</td>
                                                    <td>{{ $sale_invoice->total}}</td>
                                                    <td>{{ $sale_invoice->	created_at }}</td>

                                                    <td>
                                                        <a href="{{ route('sale_invoices.show', $sale_invoice->id) }}" class="btn btn-sm btn-primary"><i
                                                                class="feather icon-eye "></i></a>

{{--                                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#danger{{$sale_invoice->id}}">--}}
{{--                                                            <i class="fa fa-trash"></i> </button>--}}
                                                    </td>

                                                </tr>
{{--                                                <div class="modal fade text-left" id="danger{{ $sale_invoice->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">--}}
{{--                                                    <form action="{{ route('sale_invoices.destroy', $sale_invoice->id) }}" method="POST">--}}
{{--                                                        @csrf--}}
{{--                                                        @method('delete')--}}
{{--                                                        <div class="modal-dialog" role="document">--}}
{{--                                                            <div class="modal-content">--}}
{{--                                                                <div class="modal-header bg-danger white">--}}
{{--                                                                    <h4 class="modal-title" id="myModalLabel10">Confirm Delete</h4>--}}
{{--                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                                        <span aria-hidden="true">&times;</span>--}}
{{--                                                                    </button>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="modal-body">--}}
{{--                                                                    <h5>--}}
{{--                                                                        Are You Sure You Want To Delete--}}
{{--                                                                        " {{ $sale_invoice->client_name }}'s Invoice "--}}
{{--                                                                        ?--}}
{{--                                                                    </h5>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="modal-footer">--}}
{{--                                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>--}}
{{--                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/ Zero configuration table -->                </div>
            </div>
        </div>
    </section>

@endsection
