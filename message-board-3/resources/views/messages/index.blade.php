@extends('layouts.app')

@section('content')
    <h1>メッセージ確認</h1>

    <?php if(count($messages) > 0){ ?>
        <ul>
            <?php foreach($messages as $message){ ?>
                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}:{{ $message->content }}</li>
            <?php } ?>
        </ul>
    <?php } ?>

    {!! link_to_route('messages.create', '新規メッセージの投稿') !!}
@endsection