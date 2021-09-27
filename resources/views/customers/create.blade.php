@extends('layouts.main')

@section('title', '新規登録画面')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <h1>新規登録画面</h1>
    {{-- {{ dd($customer->results[0]->address1) }} --}}

    {{-- {{ dd($customer) }} --}}
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/customers" method="POST">
        @csrf
        <p>
            <label for="name">名前</label>
            <input type="text" name='name' value="{{ old('name') }}">
        </p>
        <p>
            <label for="email">メールアドレス</label>
            <input type="text" name='email' value="{{ old('email') }}">
        </p>
        <p>
            <label for="zipcode">郵便番号</label>
            <input type="text" name='zipcode' value="{{ $customer->results[0]->zipcode }}">
        </p>
        <p>
            <label for="address">住所</label>
            <textarea name="address" id="address" cols="30" rows="10">{{ $address }}</textarea>
        </p>
        <p>
            <label for="telephone">電話番号</label>
            <input type="text" name='telephone' value="{{ old('telephone') }}">
        </p>
        <input type="submit" value="登録">
    </form>
    <button onclick="location.href='/customers/zipcode'">郵便番号検索に戻る</button>
    </body>

@endsection
