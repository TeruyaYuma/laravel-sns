@extends('app')

@section('title', 'ユーザー登録')

@section('content')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">

        <h1 class="text-center"><a class="text-dark" href="/">memo</a></h1>

        <div class="card mt-3">
          <div class="card-body text-center">

            <h2 class="h3 card-title text-center mt-2">ユーザー登録</h2>

            @include('error_card_list')

            <div class="card-text">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="md-form">
                        <label for="name">ユーザー名</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                    </div>

                    <div class="md-form">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
                    </div>

                    <div class="md-form">
                        <label for="password">パスワード</label>
                        <input type="password" class="form-control" id="password" name="password" required value="{{ old('password') }}">
                    </div>

                    <div class="md-form">
                        <label for="password_confirmation">パスワード(確認)</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required value="{{ old('password_confirmation') }}">
                    </div>

                    <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ユーザー登録</button>
                </form>

              <div class="mt-0">
                <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>
              </div>  
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>