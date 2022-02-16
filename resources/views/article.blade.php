@extends('layouts.app')

@section("styles")
    <link href="{{ asset('css/article.css') }}" rel="stylesheet">
@endsection

@section('nav')
    @include('partials.nav')
@endsection

@section("content")
    <main>
        <section id="actus">
            <div class="container">
                <div class="img_container">
                    <img src="{{ asset('img_articles/'.$article->path) }}" alt="{{ $article->titre }}">
                </div>
                <div class="actus_title">
                    <h1>{{ $article->titre }}</h1>
                </div>
                <div class="actus_content">
                    <p>
                        {{ $article->contenu }}
                    </p>
                </div>
                <div class="actus_date">
                    <p>{{ date('d/m/Y', strtotime($article->created_at)) }}</p>
                </div>
            </div>
        </section>
        <section id="actus-recommended">
            <div class="container">
                <h2>Les dernières actus</h2>
                <ul class="list_actus">
                    @foreach ($articles as $art)
                    <li class="item_actus">
                        <a href="/article/{{ $art->id }}" class="link_actus">
                            <div class="img_container">
                                <img src="{{ asset('img_articles/'.$art->path) }}" alt="{{ $art->titre }}">
                            </div>
                            <div class="article_infos">
                                <h2>{{ $art->titre }}</h2>
                                <p>{{ $art->contenu }}</p>
                                <p class="date_article_published">{{ date('d/m/Y', strtotime($art->created_at)) }}</p>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
@endsection