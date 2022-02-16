@extends('layouts.app')

@section("styles")
    <link href="{{ asset('css/articles.css') }}" rel="stylesheet">
@endsection

@section('nav')
    @include('partials.nav')
@endsection

@section("content")

    <main>
        <section>
            <div class="container">
                <ul class="articles_list">
                    <li class="article_item">
                        @foreach ($articles as $article)
                        <a href="/article/{{ $article->id }}" class="article_link">
                            <div class="img_container">
                                <img src="{{ asset('img_articles/'.$article->path) }}" alt="{{ $article->titre }}">
                            </div>
                            <div class="article_infos">
                                <h2>{{ $article->titre }}</h2>
                                <p>{{ $article->contenu }}</p>
                                <p class="date_article_published">{{ date('d/m/Y', strtotime($article->created_at)) }}</p>
                            </div>
                        </a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </section>
    </main>

@endsection

@section("script")
    <script type="text/javascript" src="{{ asset('js/chat.js') }}"></script>
@endsection