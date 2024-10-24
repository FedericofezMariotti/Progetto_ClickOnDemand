<x-auth>


    <div class="container-fluid  auth-container">
        <div class="auth-icon-close-container ">
            <a href="{{ route('home') }}">
                <i class="bi bi-x auth-icon-close fs-5"></i>
            </a>
           
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-none d-md-flex  auth-column1 d-flex justify-content-center align-items-center flex-column">
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

            <div class="col-12 col-md-6 auth-column2 d-flex justify-content-start flex-column align-items-center pt-5">
                <div class="auth-col-index d-flex justify-content-center  pt-5  " >
                    <div class=" active auth-anchor text-center auth-link-login" id="authLogin">
                        <a href="#"  ><span
                                class="d-inline-block ">Login</span></a>
                    </div>
                    <div class=" auth-anchor  text-center auth-link-login" id="authRegister">
                        <a href="#"  ><span
                                class="d-inline-block ">Registrazione</span></a>
                    </div>
                </div>
                <div class="row  w-70 pt-3 ">
      
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-12 d-flex justify-content-start flex-column  "id="authLoginForm">
                            <span class="text-center d-inline-block auth-title">Login</span>
                            <form method="POST" action="{{route('login')}}" >
                                @csrf
                                <div class="input-group my-4 auth-border-focus">
                                    <span class="input-group-text auth-form-span d-inline-block d-flex"><i
                                            class="bi bi-envelope-fill  auth-icon"></i></span>
                                    <input type="email" class="form-control auth-form-control" id="emailLogin" required
                                        name="email" placeholder="Email" ></input>
                                </div>
                                <div class="input-group my-4 auth-border-focus">
                                    <span class="input-group-text auth-form-span d-inline-block d-flex"><i
                                            class="bi bi-key-fill  auth-icon"></i></span>
                                    <input type="password" class="form-control auth-form-control" id="password"
                                        required name="password" placeholder="Password"></input>
                                </div>
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <a href="#" class="auth-link">Hai dimenticato la password?</a>
                                </div>
                                <div class="col-12  d-flex justify-content-center">
                                    <button type="submit" class="auth-button">Accedi</button>
                                </div>
                                
                            </form>
                        </div>

                        <div class="col-12 d-flex justify-content-start flex-column border-primary d-none" id="authRegisterForm">
                            <span class="text-center d-inline-block auth-title">Registrazione</span>
                            <form method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="input-group my-4 auth-border-focus">
                                    <span class="input-group-text auth-form-span d-inline-block d-flex"><i
                                            class="bi bi-person-square  auth-icon"></i></span>
                                    <input type="text" class="form-control auth-form-control" id="userName"  name="name"
                                        placeholder="Username" required ></input>
                                </div>
                                <div class="input-group my-4 auth-border-focus">
                                    <span class="input-group-text auth-form-span d-inline-block d-flex"><i
                                            class="bi bi-envelope-fill  auth-icon"></i></span>
                                    <input type="email" class="form-control auth-form-control" id="emailRegister" name="email"
                                        placeholder="Email"  required></input>
                                </div>
                                <div class="input-group my-4 auth-border-focus">
                                    <span class="input-group-text auth-form-span d-inline-block d-flex"><i
                                            class="bi bi-key  auth-icon"></i></span>
                                    <input type="password" class="form-control auth-form-control" id="exampleInputPassword1" name="password"
                                        placeholder="Password"  required></input>
                                </div>
                                <div class="input-group my-4 auth-border-focus">
                                    <span class="input-group-text auth-form-span d-inline-block d-flex"><i
                                            class="bi bi-key-fill  auth-icon"></i></span>
                                    <input type="password" class="form-control auth-form-control" id="ConfirmationPassword"
                                        name="password_confirmation"  placeholder="Conferma Password" required></input>
                                </div>
                                <div class="col-12  d-flex justify-content-center">
                                    <button type="submit" class="auth-button">Crea Account</button>
                                </div>
                               
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    




</x-auth>
