@extends('layouts.helloapp')
<style>
	th {background-color: #999; color: fff;padding: 5px 10px;}
	td {border: solid 1px #aaa; color: #999; padding: 5px 10px;}
</style>

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')

    <table>
    <tr>
        <th><a href="/hello?sort=name">name</a></th>
        <th><a href="/hello?sort=mail">mail</a></th>
        <th><a href="/hello?sort=age">age</a></th>
    </tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td>
        </tr>
    @endforeach
    </table>


@endsection



@section('footer')
copyright 2017 tuyano.
@endsection
