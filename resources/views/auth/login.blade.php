<x-layout>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="container-fluid auth-container">
        <div class="row">
            <div class="col-12 col-md-6 custom-display auth-column1 d-flex justify-content-center align-items-center flex-column">
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
            <div class="col-12 col-md-6 auth-column2 d-flex justify-content-center ">
                <div class="row  w-70 pt-5 ">
                    <div class="col-12 d-flex justify-content-start flex-column border-primary pt-5">
                        <span class="text-center d-inline-block auth-title">Login</span>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group my-4 auth-border-focus">
                                <span class="input-group-text auth-form-span d-inline-block d-flex"><i class="bi bi-envelope-fill  auth-icon"></i></span>
                                <input type="email" class="form-control auth-form-control"  id="email" required name="email" placeholder="Email"></input>
                            </div>
                            <div class="input-group my-4 auth-border-focus">
                                <span class="input-group-text auth-form-span d-inline-block d-flex"><i class="bi bi-key-fill  auth-icon"></i></span>
                                <input type="password" class="form-control auth-form-control" id="password" required name="password" placeholder="Password"></input>
                            </div>
                            <div class="col-12 d-flex justify-content-center mb-3">
                                <a href="#" class="auth-link">Hai dimenticato la password?</a>
                            </div>
                            <div class="col-12  d-flex justify-content-center">
                                <button type="submit" class="auth-button">Effettua il login</button>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-3">
                                <a href="{{route('register')}}" class="auth-link-register">Non sei ancora Registrato? Clicca qui</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

