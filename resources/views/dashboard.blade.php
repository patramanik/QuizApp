@extends('layouts.app')
@section('title', 'Dashboard | Quiz Admin')
@section('content')
    <h2 class="text-xl font-semibold mb-4">Welcome Home</h2>
    <p class="custom">This is your homepage using Tailwind and Blade layout.</p>
    {{-- Logout Button --}}
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="mt-4 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
            Logout
        </button>
    </form>
@endsection


@section('scripts')
    <script>
        console.log('Home page script loaded!');
    </script>
@endsection
