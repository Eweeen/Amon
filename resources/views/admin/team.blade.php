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
                    <a href="{{ Route("admin") }}" class="sidebar_link {{Route::getCurrentRoute()->uri() == 'admin' ? 'active_link' : '' }}"><i class='bx bx-home'></i><span>Accueil</span></a>
                </li>
                <li class="sidebar_item" data-link="">
                    <a href="{{ Route("actus") }}" class="sidebar_link {{Route::getCurrentRoute()->uri() == 'admin/actus' ? 'active_link' : '' }}"><i class='bx bx-news'></i><span>Actualités</span></a>
                </li>
                <li class="sidebar_item" data-link="">
                    <a href="{{ Route("team") }}" class="sidebar_link {{Route::getCurrentRoute()->uri() == 'admin/team' ? 'active_link' : '' }}"><i class='bx bx-group' ></i><span>Team</span></a>
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
                    <h1>Team</h1>
                </div>

                <div class="container_block">
                    <div class="container_block_title">
                        <p>Nouveau membre</p>
                    </div>
                    <div class="container_block_content">
                        <form action="" method="post">
                            <div class="create_new_team">
                                <input type="file" name="" id="new_img_actus">
                                <label for="new_img_actus" class="create_new_actus_container btn">
                                    <i class='bx bx-image-add'></i>
                                    <p>Import une image</p>
                                </label>
                            </div>

                            <div class="checkbox">
                                <input type="radio" name="role" id="is-staff" value="Staff">
                                <label for="is-staff">Staff</label>
                                
                                <input type="radio" name="role" id="is-player" value="Joueur" checked>
                                <label for="is-player">Joueur</label>
                            </div>

                            <input type="text" name="" id="" placeholder="Nom">
                            <input type="text" name="" id="" placeholder="Prénom">
                            <input type="text" name="" id="" placeholder="Pseudo">
                            <input type="text" name="" id="" placeholder="Place occupée">

                            <h3>Réseaux sociaux</h3>
                            <div class="social_fields">
                                <i class='bx bxl-instagram'></i>
                                <input type="text" name="" id="" placeholder="id instagram">
                            </div>

                            <div class="social_fields">
                                <i class='bx bxl-twitter' ></i>
                                <input type="text" name="" id="" placeholder="id twitter">
                            </div>

                            <div class="social_fields">
                                <i class='bx bxl-twitch' ></i>
                                <input type="text" name="" id="" placeholder="id twitch">
                            </div>

                            <button type="submit" class="btn">Ajouter</button>
                        </form>
                    </div>
                </div>

                <div class="container_block">
                    <table>
                        <thead>
                            <tr>
                                <th>Pseudo</th>
                                <th class="action_tab">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td class="tab_tools">
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