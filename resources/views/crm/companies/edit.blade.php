@extends('layouts.base')

@section('caption', 'Dodaj firmę')

@section('title', 'Dodaj firmę')

@section('lyric', 'lorem ipsum')

@section('content')
    <!-- will be used to show any messages -->
    @if(session()->has('message_success'))
        <div class="alert alert-success">
            <strong>Bardzo dobrze!</strong> {{ session()->get('message_success') }}
        </div>
    @elseif(session()->has('message_danger'))
        <div class="alert alert-danger">
            <strong>Uwaga!</strong> {{ session()->get('message_danger') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            {{ Form::model($companies, array('route' => array('companies.update', $companies->id), 'method' => 'PUT')) }}

                            <div class="form-group">
                                {{ Form::label('name', 'Nazwa') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('tax_number', 'NIP') }}
                                {{ Form::text('tax_number', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('phone', 'Telefon') }}
                                {{ Form::text('phone', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('city', 'Miasto') }}
                                {{ Form::text('city', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('billing_address', 'Adres') }}
                                {{ Form::text('billing_address', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('country', 'Państwo') }}
                                {{ Form::text('country', null, array('class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                {{ Form::label('postal_code', 'Kod pocztowy') }}
                                {{ Form::text('postal_code', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('employees', 'Liczba pracowników') }}
                                {{ Form::text('employees', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('fax', 'Fax') }}
                                {{ Form::text('fax', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('description', 'Krótki opis') }}
                                {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                            </div>

                        </div>

                        </div>

                        <div class="col-lg-12">
                            {{ Form::submit('Submit Button', array('class' => 'btn btn-primary')) }}
                            {{ Form::reset('Reset Button', array('class' => 'btn btn-warning')) }}
                        </div>

                        {{ Form::close() }}

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>


@endsection