@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="card card-tab">
                <div class="card-header" style="overflow-y:hidden;">
                    <ul class="nav nav-tabs">
                        <li class="active" style="width: 50%;">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"
                               aria-expanded="true">Cars</a>
                        </li>
                        <li style="width: 50%;">
                            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"
                               aria-expanded="false">Places</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body no-padding tab-content">
                    <div role="tabpanel" class="tab-pane no-padding active" id="tab1">
                        <div class="search-result">
                            <ul class="result">
                                <li>
                                    <div class="img">
                                        <img src="/assets/images/axia.jpg">
                                    </div>
                                    <div class="info">
                                        <div class="col-xs-10">
                                            <div class="title">
                                                <a href=""><span class="highlight">Perodua Axia</span></a></div>
                                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut
                                                enim ad minim veniam, quis nostrud exercitation
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="btn-group-vertical" role="group">
                                                <button class="btn btn-info">
                                                    <i class="fa fa-eye"></i> View
                                                </button>
                                                <button class="btn btn-warning">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="/assets/images/myvi.jpg">
                                    </div>
                                    <div class="info">
                                        <div class="col-xs-10">
                                            <div class="title">
                                                <a href=""><span class="highlight">Perodua Axia</span></a></div>
                                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut
                                                enim ad minim veniam, quis nostrud exercitation
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="btn-group-vertical" role="group">
                                                <button class="btn btn-info">
                                                    <i class="fa fa-eye"></i> View
                                                </button>
                                                <button class="btn btn-warning">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="footer">
                                <ul class="pagination">
                                    <li>
                                        <a href=#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <div class="search-result">
                            <ul class="result">
                                <li>
                                    <div class="img">
                                        <img src="/assets/images/aeon.png">
                                    </div>
                                    <div class="info col-xs-12">
                                        <div class="col-xs-10">
                                            <div class="title">
                                                <a href=""><span class="highlight">Aeon Taman Universiti</span></a>
                                            </div>
                                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut
                                                enim ad minim veniam, quis nostrud exercitation
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="btn-group-vertical" role="group">
                                                <button class="btn btn-info">
                                                    <i class="fa fa-eye"></i> View
                                                </button>
                                                <button class="btn btn-warning">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="/assets/images/dataran_jb.jpg">
                                    </div>
                                    <div class="info col-xs-12">
                                        <div class="col-xs-10">
                                            <div class="title">
                                                <a href=""><span class="highlight">Dataran Johor Bahru</span></a>
                                            </div>
                                            <div class="description">
                                                Shopping Mall, Miscellaneous Shop, and Convenience Store at Skudai
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="btn-group-vertical" role="group">
                                                <button class="btn btn-info">
                                                    <i class="fa fa-eye"></i> View
                                                </button>
                                                <button class="btn btn-warning">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="footer">
                                <ul class="pagination">
                                    <li>
                                        <a href=#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('styles')
    <style>
        .full {
            width: 100%;
        }

    </style>
@endsection
