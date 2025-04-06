@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-md">
  <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Welcome Back</h2>

  <form action="{{route('login')}}" method="POST" class="space-y-5">
    @csrf

    <div>
      <label class="block mb-1 text-gray-600" for="email">Email</label>
      <input type="email" id="email" name="email" required
             class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
    </div>

    <div>
      <label class="block mb-1 text-gray-600" for="password">Password</label>
      <input type="password" id="password" name="password" required
             class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
    </div>

    <div class="flex justify-between items-center">
      <label class="flex items-center text-sm">
        <input type="checkbox" class="mr-2">
        Remember me
      </label>
      <a href="#" class="text-sm text-indigo-500 hover:underline">Forgot password?</a>
    </div>

    <button type="submit"
            class="w-full bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-600 transition">
      Login
    </button>
  </form>

  <p class="mt-6 text-sm text-center text-gray-600">
    Don't have an account?
    <a href="/register" class="text-indigo-500 hover:underline">Sign up</a>
  </p>
</div>
@endsection

@section('scripts')
<script>
 window.addEventListener('load', function () {
  $(document).ready(function () {
    console.log('jQuery is working!');
  });
});

window.addEventListener("pageshow", function (event) {
        if (event.persisted || (window.performance && window.performance.navigation.type === 2)) {
            window.location.reload();
        }
    });

</script>
@endsection

