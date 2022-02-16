@extends('layouts.admin')

@section("content") 
    <main>
        <div class="sidebar">

            <a href="/" class="sidebar_brand">
                <div class="img_container">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo Amon">
                </div>
                <p>Amon</p>
            </a>
            
            <ul class="sidebar_list">
                <li class="sidebar_item" data-link="">
                    <a href="{{ Route("admin") }}" class="sidebar_link {{Route::getCurrentRoute()->uri() == 'admin' ? 'active_link' : '' }}"><i class='bx bx-home'></i><span>Accueil</span></a>
                </li>
                <li class="sidebar_item" data-link="">
                    <a href="{{ Route("actus") }}" class="sidebar_link {{Route::getCurrentRoute()->uri() == 'admin/actus' ? 'active_link' : '' }}"><i class='bx bx-news'></i><span>Actualités</span></a>
                </li>
                <li class="sidebar_item" data-link="">
                    <a href="{{ Route("admin.team") }}" class="sidebar_link {{Route::getCurrentRoute()->uri() == 'admin/team' ? 'active_link' : '' }}"><i class='bx bx-group' ></i><span>Team</span></a>
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

                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <br>
                    @endif

                    <div class="container_block_content">
                        <form action="/admin/team/create" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="create_new_team">
                                <input type="file" name="img_membre" id="img_membre">
                                <label for="img_membre" class="create_new_actus_container btn">
                                    <i class='bx bx-image-add'></i>
                                    <p>Import une image</p>
                                </label>
                            </div>

                            <div class="checkbox">
                                <input type="radio" name="poste" id="is-staff" value="staff">
                                <label for="is-staff">Staff</label>
                                
                                <input type="radio" name="poste" id="is-player" value="joueur" checked>
                                <label for="is-player">Joueur</label>
                            </div>

                            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
                            <input type="text" name="place" id="place" placeholder="Place occupée">

                            <h3>Réseaux sociaux</h3>
                            <div class="social_fields">
                                <i class='bx bxl-twitter' ></i>
                                <input type="text" name="twitter" id="twitter" placeholder="id twitter">
                            </div>

                            <div class="social_fields">
                                <i class='bx bxl-instagram'></i>
                                <input type="text" name="instagram" id="instagram" placeholder="id instagram">
                            </div>

                            <div class="social_fields">
                                <i class='bx bxl-twitch' ></i>
                                <input type="text" name="twitch" id="twitch" placeholder="id twitch">
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
                                <th>Place</th>
                                <th class="action_tab">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($membres) > 0)
                                @foreach ($membres as $membre)
                                    <tr>
                                        <td>{{ $membre->pseudo }}</td>
                                        <td>{{ $membre->place }}</td>
                                        <td class="tab_tools">
                                            <i class='bx btn bx-trash' data-id="{{ $membre->id }}"></i>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>Aucuns membres</td>
                                    <td>-</td>
                                    <td class="tab_tools"></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

@endsection

@section('script')
<script>
    $(document).on('click', '.bx-trash', function(){
        $(this).parents('tr').remove();
        axios.delete('/admin/team/delete/'+$(this).attr('data-id'));
    });
</script>
@endsection