<x-layout>
    <div class="container-fluid ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-6 auth-column1 d-flex justify-content-center align-items-center flex-column">
                <div class="auth-title d-flex justify-content-center">
                    <span class="auth-title-white">ClickOn</span>
                    <span class="auth-title-yellow">Demand</span>
                </div>
                <div class="auth-image-card d-flex justify-content-center align-items-center">
                    <div class="auth-image1"></div>
                    <div class="auth-image2"></div>
                    <div class="auth-image3"></div>
                </div>
            </div>
            <div class="col-6 auth-column2 d-flex justify-content-center ">
                <div class="row  w-70 pt-5 ">
                    <div class="col-12 d-flex justify-content-start flex-column border-primary pt-5">
                        <span class="text-center d-inline-block auth-title">Registrazione</span>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-group my-4 auth-border-focus">
                                <span class="input-group-text auth-form-span d-inline-block d-flex"><i
                                        class="bi bi-person-square  auth-icon"></i></span>
                                <input type="textt" class="form-control auth-form-control" id="email" required
                                    name="name" placeholder="Username" required></input>
                            </div>
                            <div class="input-group my-4 auth-border-focus">
                                <span class="input-group-text auth-form-span d-inline-block d-flex"><i
                                        class="bi bi-envelope-fill  auth-icon"></i></span>
                                <input type="email" class="form-control auth-form-control" id="email" required
                                    name="email" placeholder="Email" required></input>
                            </div>
                            <div class="input-group my-4 auth-border-focus">
                                <span class="input-group-text auth-form-span d-inline-block d-flex"><i
                                        class="bi bi-key  auth-icon"></i></span>
                                <input type="password" class="form-control auth-form-control" id="exampleInputPassword1"
                                    name="password" placeholder="Password" required></input>
                            </div>
                            <div class="input-group my-4 auth-border-focus">
                                <span class="input-group-text auth-form-span d-inline-block d-flex"><i
                                        class="bi bi-key-fill  auth-icon"></i></span>
                                <input type="password" class="form-control auth-form-control" id="ConfirmationPassword"
                                    name="password_confirmation" placeholder="Conferma Password" required></input>
                            </div>
                            <div class="col-12  d-flex justify-content-center">
                                <button type="submit" class="auth-button">Effettua la Registrazione</button>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-3">
                                <a href="{{ route('login') }}" class="auth-link-register">Hai già un account? Clicca
                                    qui</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
