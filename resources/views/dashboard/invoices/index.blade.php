@extends('dashboard.master')
@section('title' , 'Sale Invoices')
@section('body')

    <div class="content-header-left col-md-6 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Invoice</a>
                    </li>
                    <li class="breadcrumb-item active">Invoice List
                    </li>
                </ol>
            </div>
        </div>
        <h3 class="content-header-title mb-0">Invoice list</h3>
    </div>

    <div class="content-body">
        <div class="row mb-1 mt-1 mt-md-0">
            <div class="col-12">
                <a href="" class="btn btn-primary">Create Invoice</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <!-- datatable started -->
                <div id="app-invoice-wrapper" class="">
                    <table id="app-invoice-table" class="table" style="width: 100%;">
                        <thead class="border-bottom border-dark">
                        <tr>
                            <th></th>
                            <th></th>
                            <th>
                                <span class="align-middle">Invoice#</span>
                            </th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Tags</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="">INV-00956</a>
                            </td>
                            <td><span class="invoice-amount">$459.30</span></td>
                            <td><span class="invoice-date">12-08-19</span></td>
                            <td><span class="invoice-customer">Pixinvent PVT. LTD</span></td>
                            <td>
                                <span class="bullet bullet-success bullet-sm"></span>
                                Technology
                            </td>
                            <td><span class="badge badge-danger badge-pill">UNPAID</span></td>
                            <td>
                                <div class="invoice-action">
                                    <a href="" class="invoice-action-view mr-1">
                                        <i class="feather icon-eye"></i>
                                    </a>
                                    <a href="" class="invoice-action-edit cursor-pointer">
                                        <i class="feather icon-edit-1"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
