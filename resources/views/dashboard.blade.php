@extends('layouts.admin-app')

@section('content')

<div class="dashboard container">
    <div class="row">
        <div class="col-md-3 type-dashboard">
            <div class="img"><img src="{{ asset('images/qrcode.png') }}" width="100%" height="100%"></div>
            <div class="contenu">
                <div class="con-icone"> <i class="fas fa-users"></i> </div>
                <div class="con-com">19 Users</div>
                <a href="" class="btn btn-primary">View All Users</a>
            </div>
        </div>

        <div class="col-md-3 type-dashboard">
            <div class="img"><img src="{{ asset('images/qrcode.png') }}" width="100%" height="100%"></div>
            <div class="contenu">
                <div class="con-icone"> <i class="fas fa-users"></i> </div>
                <div class="con-com">19 Users</div>
                <a href="" class="btn btn-primary">View All Users</a>
            </div>
        </div>

        <div class="col-md-3 type-dashboard">
            <div class="img"><img src="{{ asset('images/qrcode.png') }}" width="100%" height="100%"></div>
            <div class="contenu">
                <div class="con-icone"> <i class="fas fa-users"></i> </div>
                <div class="con-com">19 Users</div>
                <a href="" class="btn btn-primary">View All Users</a>
            </div>
        </div>

        <div class="col-md-3 type-dashboard">
            <div class="img"><img src="{{ asset('images/qrcode.png') }}" width="100%" height="100%"></div>
            <div class="contenu">
                <div class="con-icone"> <i class="fas fa-users"></i> </div>
                <div class="con-com">19 Users</div>
                <a href="" class="btn btn-primary">View All Users</a>
            </div>
        </div>
        
    </div>
</div>

@endsection