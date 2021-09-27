@extends('layouts.main')

@section('title', '郵便番号検索')

@section('content')

    <h1>郵便番号検索</h1>
    <div>
        <label for="zipcode">郵便番号検索</label>
        <input type="text" name='zipcode' placeholder="検索したい郵便番号">

        <button onclick="location.href='/customers/create'">検索</button>
    </div>
    <button onclick="location.href='/customers'">一覧に戻る</button>
