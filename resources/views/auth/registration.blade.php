@extends('layouts.authlayout')

@section('content')
    <form class="form-horizontal">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-10">
                    <h4 class="card-title">Personal Info</h4>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 text-end control-label col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name" placeholder="First Name Here">
                </div>
            </div>
            <div class="form-group row">
                <label for="user type" class="col-sm-2 text-end control-label col-form-label">User Type</label>
                <div class="col-sm-6">
                    <select name="" class="form-control" id="">
                        <option value="customer">Customer</option>
                        <option value="tailor">Tailor</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 text-end control-label col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 text-end control-label col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="cono1" class="col-sm-2 text-end control-label col-form-label">Confirm Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="cono1" placeholder="Re type your password">
                </div>
            </div>
            <div class="border-top row">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-10">

                    <button type="button" class="btn btn-primary">
                        Submit
                    </button>

                </div>

            </div>
        </div>

    </form>
@endsection
