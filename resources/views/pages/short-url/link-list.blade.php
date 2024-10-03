@extends('pages.master')
@section('title', 'Link Lists')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-11 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>My Shorten Url List</h1>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Short Url</th>
                                            <th>Full Url</th>
                                            <th>Total Hit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($shortUrls as $shortUrl)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><a href="{{ route('total-clicks', ['shortUrl' => $shortUrl->short_url]) }}" style="text-decoration: none;">{{ url('/').'/'.$shortUrl->short_url ?? '' }}</a></td>
                                                <td>{{ $shortUrl->full_url ?? '' }}</td>
                                                <td>{{ $shortUrl->hit_count ?? 0 }}</td>
                                                <td>
                                                    <a href="{{ route('delete-url', ['shortUrl' => $shortUrl->id]) }}" onclick="return confirm('Are you sure to delete this?')" class="btn btn-sm btn-danger">delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
