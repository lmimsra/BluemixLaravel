@extends('hello')
@section('title')
    ブレード最高！
@endsection

@section('body')
    @parent<br/>
    サブから
@stop

