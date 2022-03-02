@extends('layouts.blank')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-12">
                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                @endif
                <div class="text-muted font-13">
                    <form method="POST" action="{{ route('purchase.code') }}">
                        @csrf
                        <div class="form-group" style="display: none">
                            <label for="purchase_code">Codecanyon Username</label>
                            <input type="text" value="client_user_name" class="form-control" id="username"
                                   name="username" required>
                        </div>

                        <div class="form-group" style="display: none">
                            <label for="purchase_code">Purchase Code</label>
                            <input type="text" value="client_purchase_code" class="form-control" id="purchase_key"
                                   name="purchase_key" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info">Proceed to Database setup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
