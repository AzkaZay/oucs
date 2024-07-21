@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="mt-5 mb-3 clearfix">
                            <h2 class="pull-left">News List</h2>
                        </div>

                        @if($newsList->isNotEmpty())
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Created By</th>
                                        <th>Message</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($newsList as $news)
                                    <tr>
                                        <td>{{ $news->id }}</td>
                                        <td>{{ $news->title }}</td>
                                        <td>{{ $news->created_by }}</td>
                                        <td>{{ $news->message }}</td>
                                        <td>{{ $news->created_at }}</td>
                                        <td>
                                            <form action="{{ route('news.destroy', $news->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Delete Record" style="border: none; background-color:transparent;">
                                                    <span class="fa fa-trash"></span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="alert alert-danger"><em>No news records were found.</em></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
