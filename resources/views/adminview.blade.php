@extends('layouts.app')

@section("styles")
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section("content") 
    <main>
        <div class="sidebar">

            <div class="sidebar_brand">
                <div class="img_container">
                    <img src="" alt="">
                </div>
                <p>Amon</p>
            </div>
            
            <ul class="sidebar_list">
                <li class="sidebar_item" data-link="">
                    <a href="{{ Route("admin") }}" class="sidebar_link active_link" data-id="Accueil"><i class='bx bx-home'></i><span>Accueil</span></a>
                </li>
                <li class="sidebar_item" data-link="">
                    <a href="{{ Route("admin") }}" class="sidebar_link" data-id="Blog"><i class='bx bx-news'></i><span>Articles</span></a>
                </li>
                <li class="sidebar_item" data-link="">
                    <a href="{{ Route("admin") }}" class="sidebar_link" data-id="Code"><i class='bx bx-error'></i><span>Signaler</span></a>
                </li>
            </ul>
            <div class="btn btn_deconnexion">
                <a href="#" id="btn-deconnexion">
                    <i class='bx bx-power-off' ></i>
                    <span>Déconnexion</span>
                </a>
            </div>
        </div>
        <section id="admin-container">
            <div class="container">

                <div class="title_container">
                    <h1>Accueil</h1>
                </div>

                <div class="container_block half_block">
                    <h2>Messages signalés</h2>
                    <p class="nb_msg">20</p>
                </div>

                <div class="container_block">
                    <table>
                        <thead>
                            <tr>
                                <th>Utilisateur</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container_block">
                    <div class="container_block_title">
                        <p>Slider</p>
                    </div>
                    <div class="container_block_content">
                        <form action="" method="post">

                            <ul class="slide_list">
                                <li class="slide_item">
                                    <div class="img_container">
                                        <img src="" alt="">
                                    </div>
                                    <p>Slide 1</p>
                                    <div class="slide_tools">
                                        <i class='bx btn bx-move-vertical'></i>
                                        <i class='bx btn bx-trash'></i>
                                    </div>
                                </li>
                                <li class="slide_item">
                                    <div class="img_container">
                                        <img src="" alt="">
                                    </div>
                                    <p>Slide 2</p>
                                    <div class="slide_tools">
                                        <i class='bx btn bx-move-vertical'></i>
                                        <i class='bx btn bx-trash'></i>
                                    </div>
                                </li>
                                <li class="slide_item">
                                    <div class="img_container">
                                        <img src="" alt="">
                                    </div>
                                    <p>Slide 3</p>
                                    <div class="slide_tools">
                                        <i class='bx btn bx-move-vertical'></i>
                                        <i class='bx btn bx-trash'></i>
                                    </div>
                                </li>
                                <li class="slide_item">
                                    <div class="img_container">
                                        <img src="" alt="">
                                    </div>
                                    <p>Slide 4</p>
                                    <div class="slide_tools">
                                        <i class='bx btn bx-move-vertical'></i>
                                        <i class='bx btn bx-trash'></i>
                                    </div>
                                </li>
                            </ul>

                            <div class="create_new_slide">
                                <input type="file" name="img_new_slide" id="img_new_slide">
                                <label for="img_new_slide" class="create_new_slide_container btn">
                                    <i class='bx bx-image-add'></i>
                                    <p>Import une image</p>
                                </label>
                            </div>

                            <div class="footer_btn">
                                <button type="submit">
                                    Enregistrer
                                </button>

                                <div class="add_new_slide btn">
                                    <i class='bx bx-plus'></i>
                                    <p>Ajouter une slide</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="title_container">
                    <h1>Actualités</h1>
                </div>

                <div class="container_block">
                    <div class="container_block_title">
                        <p>Nouvelle actualité</p>
                    </div>
                    <div class="container_block_content">
                        <form action="" method="post">
                            <div class="create_new_actus">
                                <input type="file" name="" id="new_img_actus">
                                <label for="new_img_actus" class="create_new_actus_container btn">
                                    <i class='bx bx-image-add'></i>
                                    <p>Import une image</p>
                                </label>
                            </div>
                            <input type="text" name="" id="" placeholder="Titre de l'article">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Contenu de l'article"></textarea>
                        </form>
                    </div>
                </div>

                <div class="container_block">
                    <table>
                        <thead>
                            <tr>
                                <th>Titre article</th>
                                <th>Date de publication</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td class="tab_tools">
                                    <i class='bx btn bx-edit'></i>
                                    <i class='bx btn bx-trash'></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </section>
    </main>
@endsection
@section("script")

    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
    <script src="https://platform.twitter.com/widgets.js"></script>

@endsection
