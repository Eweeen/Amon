@extends('layouts.admin')

@section("content") 
    <main >
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
                    <h1>Actualités</h1>
                </div>

                <div class="container_block">
                    <div class="container_block_title">
                        <p>Nouvelle actualité</p>
                    </div>
                    <div class="container_block_content">
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <br>
                        @endif

                        <form action="/admin/actus/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="create_new_actus">
                                <input type="file" name="new_img_actus" id="new_img_actus">
                                <label for="new_img_actus" class="create_new_actus_container btn">
                                    <i class='bx bx-image-add'></i>
                                    <p>Import une image</p>
                                </label>
                            </div>
                            <input type="text" name="new_titre_actus" id="new_titre_actus" placeholder="Titre de l'article">
                            <textarea name="new_contenu_actus" id="new_contenu_actus" cols="30" rows="10" placeholder="Contenu de l'article"></textarea>

                            <button type="submit" class="btn">Créer</button>
                        </form>
                    </div>
                </div>

                <div class="container_block">
                    <table>
                        <thead>
                            <tr>
                                <th>Titre article</th>
                                <th>Date de publication</th>
                                <th class="action_tab">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($articles) > 0)
                                @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->titre }}</td>
                                    <td>{{ date('d/m/Y H:i', strtotime($article->created_at)) }}</td>
                                    <td class="tab_tools">
                                        <i class='bx btn bx-trash' data-id="{{ $article->id }}"></i>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                            <tr>
                                <td>Aucuns articles</td>
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
        axios.delete('/admin/actus/delete/'+$(this).attr('data-id'));
    });
</script>
@endsection