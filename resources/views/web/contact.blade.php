@extends('web.master')

@section('header-css')
@endsection

@section('main-content')

<section id="features" class="container services">
    <div class="row">
        <div class="col-sm-3">
            <h2>Full responsive</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>LESS/SASS Files</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>6 Charts Library</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Advanced Forms</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
    </div>
</section>


<section id="features" class="container services animated fadeInRight">
    <div class="row">
        <div class="col-lg-5">
            <div class="ibox float-e-margins">
                <div class="ibox-title gray-bg">
                    <h5>Contact Us <small>Mail Us for more Information</small></h5>
                </div>
                <div class="ibox-content gray-bg">
                    <div class="row">
                        <div class="col-sm-12">
                            <form role="form">
                                <div class="form-group">
                                    <label>Name<span class="required-field"> *</span></label>
                                    <input type="text" placeholder="Name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Email<span class="required-field"> *</span></label>
                                    <input type="email" placeholder="Email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea placeholder="Description" class="form-control" rows="4"></textarea>
                                </div>

                                <button class="btn btn-sm btn-primary m-t-n-xs" type="button"><strong>Send Mail</strong></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('footer')
@endsection