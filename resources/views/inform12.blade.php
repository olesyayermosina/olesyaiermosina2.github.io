@extends('index')
@section('css')
    <link rel="stylesheet" href="../resources/css/inform.css">
@endsection
@section('page-content')
    <section id="containCont" class="containCont">
        <div class="container">
            <div class="inside">
                <div class="texts">
                    <h1>
                        <a href="" class="headText">
                            foreach, if
                        </a>
                    </h1>
                    <div class = "formact" style="padding-top: 3%; display: flex; flex-direction: column">
                        @foreach([1, 2, 3] as $v)
                            @if($v!=2)
                                {{$v}}
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="goods">
                    <div class="good" style="display: flex; flex-direction: column">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
