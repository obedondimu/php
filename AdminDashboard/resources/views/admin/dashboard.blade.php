@extends('layouts.master')

@section('title')
    Dashboard | Created by Obed
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Simple Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table text-primary">
                                <th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Salary</th>
                                <thead>
                                <tbody>
                                    <tr>
                                        <td>Obed</td>
                                        <td>Kenya</td>
                                        <td>Nairobi</td>
                                        <td>4000</td>
                                    </tr>
                            <tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
