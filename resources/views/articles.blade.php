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
                        <a href="" class="article_link">
                            <div class="img_container">
                                <img src="" alt="">
                            </div>
                            <div class="article_infos">
                                <h2>Lorem Ipsum</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus molestias alias quaerat illum, inventore ratione iure nihil, aut quae, similique tempore vero voluptatibus vitae dolores ipsam saepe nam in rem?</p>
                                <p class="date_article_published">23-01-2022</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

    </main>

@endsection

@section("script")
    <script type="text/javascript" src="{{ asset('js/chat.js') }}"></script>
@endsection