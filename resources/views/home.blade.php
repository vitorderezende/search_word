@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Words</th>
                                <th>Language</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($words as $word)
                                <tr>
                                    <td>{{ $word-> word }}</td>
                                    <td>{{ $word-> language-> name }}</td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No word found.</td>
                                </tr>
                            @endforelse


                        </tbody>
                        {{$words -> links()}}
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection