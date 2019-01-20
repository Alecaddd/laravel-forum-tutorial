@extends('layouts.app')

@section('content')
<div class="w-full max-w-xs mx-auto">
  <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf

    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
        E-Mail
      </label>
      <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('email') ? ' border-red' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <p class="text-red text-xs italic" role="alert">{{ $errors->first('email') }}</p>
        @endif
    </div>
    <div class="mb-6">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('password') ? ' border-red' : '' }}" name="password" type="password">
      
      @if ($errors->has('password'))
        <p class="text-red text-xs italic" role="alert">{{ $errors->first('password') }}</p>
      @endif
    </div>
    <div class="mb-6">
        <label class="md:w-2/3 block text-grey font-bold">
            <input class="mr-2 leading-tight" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <span class="text-sm">
                Remember Me!
            </span>
        </label>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="{{ route('password.request') }}">
        Forgot Password?
      </a>
    </div>
  </form>
</div>
@endsection
