@extends('templates.adminsekolah')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pemilihan</h4>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr class="bg-light">
                                        <th>No</th>
                                        <th>Nama Calon</th>
                                        <th>Ship to</th>
                                        <th>Base Price</th>
                                        <th>Purchased Price</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>WD-61</td>
                                        <td>Edinburgh</td>
                                        <td>New York</td>
                                        <td>$1500</td>
                                        <td>$3200</td>
                                        <td>
                                            <label class="badge badge-info">On hold</label>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-light">
                                                <i class="mdi mdi-eye text-primary"></i>View
                                            </button>
                                            <button class="btn btn-light">
                                                <i class="mdi mdi-close text-danger"></i>Remove
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>WD-62</td>
                                        <td>Doe</td>
                                        <td>Brazil</td>
                                        <td>$4500</td>
                                        <td>$7500</td>
                                        <td>
                                            <label class="badge badge-danger">Pending</label>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-light">
                                                <i class="mdi mdi-eye text-primary"></i>View
                                            </button>
                                            <button class="btn btn-light">
                                                <i class="mdi mdi-close text-danger"></i>Remove
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>WD-63</td>
                                        <td>Sam</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                            <label class="badge badge-success">Closed</label>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-light">
                                                <i class="mdi mdi-eye text-primary"></i>View
                                            </button>
                                            <button class="btn btn-light">
                                                <i class="mdi mdi-close text-danger"></i>Remove
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>WD-64</td>
                                        <td>Joe</td>
                                        <td>Netherland</td>
                                        <td>$1100</td>
                                        <td>$7300</td>
                                        <td>
                                            <label class="badge badge-warning">Open</label>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-light">
                                                <i class="mdi mdi-eye text-primary"></i>View
                                            </button>
                                            <button class="btn btn-light">
                                                <i class="mdi mdi-close text-danger"></i>Remove
                                            </button>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
