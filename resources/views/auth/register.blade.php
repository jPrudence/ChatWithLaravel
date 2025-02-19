@extends('layouts.index')

@section('contenu')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 d-flex justify-content-center">
                <div class="wrapper-register bg-light mx-4">
                    <div class="p-4">
                        <p class="text-center text-uppercase">S'enregistrer</p>
                        <form method="POST" action="{{ route('auth.conn_reg') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="nom">Nom: <span class="text-danger">*</span></label>
                                        <input id="nom" type="text" class="form-control" name="nom"
                                            autocomplete="nom" autofocus required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="prenom">Prénom: <span class="text-danger">*</span></label>
                                        <input id="prenom" type="text" class="form-control" name="prenom"
                                            autocomplete="prenom" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="email">Adresse email: <span class="text-danger">*</span></label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="email" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="image">Selectionner une image: <span
                                                class="text-danger">*</span></label>
                                        <input id="image" type="file"
                                            class="form-control  @if (Session::get('erreur_img')) is-invalid @endif"
                                            name="image" value="{{ old('image') }}" autocomplete="image" required>

                                        @if (Session::get('erreur_img'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ Session::get('erreur_img') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="mot_de_passe">Mot de passe: <span class="text-danger">*</span></label>
                                        <input id="mot_de_passe" type="password"
                                            class="form-control @error('mot_de_passe') is-invalid @enderror"
                                            name="mot_de_passe" required autocomplete="current-password">
                                        <i class="fa fa-eye-slash @error('mot_de_passe') hide @enderror text-secondary"></i>

                                        @error('mot_de_passe')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="confirm" class="form-group mb-3">
                                        <label for="mot_de_passe-confirm">Confirmation de mot de passe : <span
                                                class="text-danger">*</span></label>
                                        <input id="mot_de_passe-confirm" type="password"
                                            class="form-control @error('mot_de_passe') is-invalid @enderror"
                                            name="mot_de_passe_confirmation" required>
                                        <i class="fa fa-eye-slash @error('mot_de_passe') hide @enderror text-secondary"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <button class="form-control btn btn-primary" type="submit">Soumettre</button>
                                    <div class="mt-2">
                                        Déjà un compte?<a class="text-decoration-none mx-2"
                                            href="{{ route('auth.login') }}">se connecter
                                            maintenant</a>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
