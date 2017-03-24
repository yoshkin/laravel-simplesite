@extends('layout')

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    Title: {{ $title }}
                </div>
                <div>
                    <ul>
                        <li>URL: {{ $page['slug'] }}</li>
                        <li>Name: {{ $page['name'] }}</li>
                        {{--<li>Header: {{ $page->header }}</li>--}}
                        <li>Title: {{ $page['title'] }}</li>
                        {{--<li>Description: {{ $page->meta_description }}</li>--}}
                        <li>Body: {{ $page['content'] }}</li>
                        <li>Meta Description: {{ $page['meta_description'] }}</li>
                        {{--<li>Menu Name: {{ $pageMenuName->menu->name }}</li>--}}
                    </ul>
                </div>
                <div>
                    Вывод контента страницы как HTML:
                    {!! $page['content'] !!}
                    <br>
                    {{ Config::get('settings.contact_email') }}<br>
                    {{ Config::get('settings.motto') }}<br>

                </div>
                <div class="links">
                        {{--@foreach ($pages as $p)--}}
                            {{--<a href="{{ $p->url }}">{{ $p->name }}</a>--}}
                        {{--@endforeach--}}
                </div>
            </div>
@stop