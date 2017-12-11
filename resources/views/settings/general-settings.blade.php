@extends('layouts.app2')

@section('page-title')
    General Settings
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        Registration Settings
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups-bordered">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Registration Portal</label>

                            <div class="col-sm-5">
                                <div class="make-switch switch-small" data-on="success" data-off="warning" data-on-label="Open" data-off-label="Close">
                                    <input type="checkbox" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-3" class="col-sm-3 control-label">Set Registration Amount</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" data-mask="currency" data-sign="&#8358;" placeholder="Enter registration amount" />
                                {{--<input type="text" class="form-control" data-mask="fdecimal" placeholder="Enter registration amount" data-dec="," data-rad="." maxlength="10" />--}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Set Bank(s) for Registration</label>

                            <div class="col-sm-5">
                                <select multiple="multiple" name="my-select[]" class="form-control multi-select">
                                    <option value="elem_1">Diamond Bank</option>
                                    <option value="elem_2">Eco Bank</option>
                                    <option value="elem_3">Fidelity Bank</option>
                                    <option value="elem_4">United Bank of Africa</option>
                                    <option value="elem_5">Guarantee Trust Bank</option>
                                    <option value="elem_6" selected>Union Bank</option>
                                    <option value="elem_7" selected>First Bank</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group pull-right">
                            <button type="submit" data-loading-text="Updating..." class="btn btn-success btn-icon icon-left">
                                Update registration settings
                                <i class="entypo-check"></i>
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        School Bank Settings
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups-bordered">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Bank Name</label>

                            <div class="col-sm-5">

                                <select name="test" class="select2" data-allow-clear="true" data-placeholder="Select bank">
                                    <option></option>
                                    <option value="1">Diamond Bank</option>
                                    <option value="2">Eco Bank</option>
                                    <option value="3">Fidelity Bank</option>
                                    <option value="4">United Bank of Africa</option>
                                    <option value="5">Guarantee Trust Bank</option>
                                    <option value="6">Union Bank</option>
                                    <option value="7">First Bank</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="account-name" class="col-sm-3 control-label">Account Name</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" placeholder="Enter account name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="account-name" class="col-sm-3 control-label">Account Number</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" data-mask="9999999999" placeholder="Enter account number" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Account Purpose</label>

                            <div class="col-sm-5">

                                <select name="test" class="select2" data-allow-clear="true" data-placeholder="Select account purpose">
                                    <option></option>
                                    <option value="1">Registration</option>
                                    <option value="2">School Fees</option>
                                    <option value="3">Course Registration</option>
                                    <option value="4">Acceptance Fees</option>
                                    <option value="5">Guarantee Trust Bank</option>
                                </select>

                            </div>
                        </div>


                        <div class="form-group pull-right">
                            <button type="submit" data-loading-text="Adding..." class="btn btn-success btn-icon icon-left">
                                Add Bank
                                <i class="entypo-check"></i>
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        Account Purpose Settings
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups-bordered">

                        <div class="form-group">
                            <label for="account-name" class="col-sm-3 control-label">Purpose</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" placeholder="Enter account purpose">
                            </div>
                        </div>

                        <div class="form-group pull-right">
                            <button type="submit" data-loading-text="Updating..." class="btn btn-success btn-icon icon-left">
                                Add Account Purpose
                                <i class="entypo-check"></i>
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        Payment Purpose Settings
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups-bordered">

                        <div class="form-group">
                            <label for="account-name" class="col-sm-3 control-label">Purpose Name</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" placeholder="Enter payment purpose">
                            </div>
                        </div>

                        <div class="form-group pull-right">
                            <button type="submit" data-loading-text="Updating..." class="btn btn-success btn-icon icon-left">
                                Add Payment Purpose
                                <i class="entypo-check"></i>
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>




@endsection