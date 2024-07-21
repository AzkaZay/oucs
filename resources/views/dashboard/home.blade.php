@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Home</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('news.create') }}">Add News</a></li>
                        <li class="breadcrumb-item active">All News</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse($news as $newsItem)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $newsItem->title }}</h5>
                            <p class="card-text">{{ $newsItem->message }}</p>
                            <footer class="blockquote-footer">
                                Created by: {{ $newsItem->created_by }}
                            </footer>
                            <footer class="menu-title">
                                Created at: {{ $newsItem->created_at }}
                            </footer>

                            @auth
                                @if(Auth::user()->role === 'admin')
                                    <form action="{{ route('news.destroy', $newsItem->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link" title="Delete Record" style="border: none; background: transparent; color: red;">
                                            <i class="fa fa-trash"></i> <!-- Font Awesome trash icon -->
                                        </button>
                                    </form>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p>No news available.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
