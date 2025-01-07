@extends('layouts.public.app')

@section('name', "Home")

@section('content')
    <div class="py-3 px-2">
        <h2 class="text-2xl">Notifikasi</h2>

        <div class="flex flex-col gap-2 my-2">
            @foreach($notifications as $notification)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $notification->message }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
