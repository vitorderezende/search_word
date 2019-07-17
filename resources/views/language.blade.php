@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Language page</div>

                <div class="card-body">

                    <h1>{{ $language->name }}</h1>

                    <ul>
                    @foreach($languages as $language)
                        <li>
                            <a href="{{ route('language.show', $language->id) }}">{{ $language->name }}</a>
                        </li>
                    @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
