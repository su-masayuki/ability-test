@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="header__inner">
    <a class="header__logo" href="/">
        Contact Form
    </a>
</div>

    <div class="thanks__content">
        <div class="thanks__heading">
            <h2>お問い合わせありがとうございました
            </h2>
        </div>
    </div>
@endsection