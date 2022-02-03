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
                    <img src="" alt="">
                </div>
                <div class="actus_title">
                    <h1>
                        Lorem, ipsum dolor sit amet consectetur .
                    </h1>
                </div>
                <div class="actus_content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo velit quibusdam, nam, voluptatibus debitis mollitia iure aut dolorem dolor sunt excepturi voluptate suscipit, hic quaerat reiciendis blanditiis porro qui sit.
                        Deserunt enim error nisi illum dolorum alias possimus consequuntur quod quis. Ea porro officiis animi nesciunt temporibus voluptatum laborum illo necessitatibus corrupti eaque. Ducimus voluptatem maxime quidem aliquid enim nostrum?
                        Voluptates consectetur, ullam officiis excepturi omnis voluptas alias temporibus ipsam et quibusdam consequuntur veritatis unde quam vel ipsa nisi obcaecati mollitia reprehenderit non atque error! Quae deserunt ut sequi consequuntur.
                        Consequuntur veniam corrupti alias modi? Laborum ipsa temporibus cumque ut accusantium tempora unde, commodi dolores fuga quasi recusandae inventore tenetur ullam distinctio facilis deserunt beatae voluptas hic officiis quibusdam repellendus.
                        Laboriosam minima cumque incidunt? Autem, sint animi. Et, vitae consequatur magni sapiente eum modi voluptatum non nostrum. Voluptates quia doloribus, facilis sed optio explicabo ipsam assumenda iusto neque hic officiis.
                        <br><br><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo velit quibusdam, nam, voluptatibus debitis mollitia iure aut dolorem dolor sunt excepturi voluptate suscipit, hic quaerat reiciendis blanditiis porro qui sit.
                        Deserunt enim error nisi illum dolorum alias possimus consequuntur quod quis. Ea porro officiis animi nesciunt temporibus voluptatum laborum illo necessitatibus corrupti eaque. Ducimus voluptatem maxime quidem aliquid enim nostrum?
                        Voluptates consectetur, ullam officiis excepturi omnis voluptas alias temporibus ipsam et quibusdam consequuntur veritatis unde quam vel ipsa nisi obcaecati mollitia reprehenderit non atque error! Quae deserunt ut sequi consequuntur.
                        Consequuntur veniam corrupti alias modi? Laborum ipsa temporibus cumque ut accusantium tempora unde, commodi dolores fuga quasi recusandae inventore tenetur ullam distinctio facilis deserunt beatae voluptas hic officiis quibusdam repellendus.
                        Laboriosam minima cumque incidunt? Autem, sint animi. Et, vitae consequatur magni sapiente eum modi voluptatum non nostrum. Voluptates quia doloribus, facilis sed optio explicabo ipsam assumenda iusto neque hic officiis.
                    </p>
                </div>
                <div class="actus_date">
                    <p>23/01/2022</p>
                </div>
            </div>
        </section>
        <section id="actus-recommended">
            <div class="container">
                <h2>Les dernières actus</h2>
                <ul class="list_actus">
                    <li class="item_actus">
                        <a href="" class="link_actus">
                            <div class="img_container">
                                <img src="" alt="">
                            </div>
                            <div class="article_infos">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, quos fugit nobis aliquid autem quia, similique nesciunt modi culpa atque maxime at ipsam esse, inventore iste earum? Non, consectetur at.</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus molestias alias quaerat illum, inventore ratione iure nihil, aut quae, similique tempore vero voluptatibus vitae dolores ipsam saepe nam in rem?</p>
                                <p class="date_article_published">23-01-2022</p>
                            </div>
                        </a>
                    </li>
                    <li class="item_actus">
                        <a href="" class="link_actus">
                            <div class="img_container">
                                <img src="" alt="">
                            </div>
                            <div class="article_infos">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, quos fugit nobis aliquid autem quia, similique nesciunt modi culpa atque maxime at ipsam esse, inventore iste earum? Non, consectetur at.</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus molestias alias quaerat illum, inventore ratione iure nihil, aut quae, similique tempore vero voluptatibus vitae dolores ipsam saepe nam in rem?</p>
                                <p class="date_article_published">23-01-2022</p>
                            </div>
                        </a>
                    </li>
                    <li class="item_actus">
                        <a href="" class="link_actus">
                            <div class="img_container">
                                <img src="" alt="">
                            </div>
                            <div class="article_infos">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, quos fugit nobis aliquid autem quia, similique nesciunt modi culpa atque maxime at ipsam esse, inventore iste earum? Non, consectetur at.</h2>
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