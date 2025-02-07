@extends('layouts.main')

@section('title', 'Auth - Login')
@section('body')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Kirish</h2>
                                <p class="text-white-50 mb-5">Akkauntingizni to'g'ri kiriting</p>

                                <form action="{{ route('auth.login') }}" method="post">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typeEmailX">Email</label>
                                        <input name="email" type="email" id="typeEmailX"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typePasswordX">Parol</label>
                                        <input name="password" type="password" id="typePasswordX"
                                            class="form-control form-control-lg" />
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Kirish</button>

                                </form>
                            </div>
                            <div>
                                <p class="mb-0">Akkauntingiz yoqmi <a href="#!" class="text-white-50 fw-bold">Akkaunt
                                        ochish</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
