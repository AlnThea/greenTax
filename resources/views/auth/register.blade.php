@extends('layouts.app')

@section('title', 'Register - Green Tax Awareness for Gen Z')

@section('content')
<div class="bg-emerald-700 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto">
            <h1 class="text-3xl font-bold mb-2">Create an Account</h1>
            <p>Join the Green Tax Awareness community</p>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-6">
            <form method="POST" action="/register">
                @csrf
                
                <div class="mb-4">
                    <label for="name" class="block font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-md" required autofocus>
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block font-medium mb-2">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                
                <div class="mb-4">
                    <label for="password" class="block font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                
                <div class="mb-6">
                    <label for="password_confirmation" class="block font-medium mb-2">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                
                <div class="mb-6">
                    <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-2 px-4 rounded-lg transition">
                        Register
                    </button>
                </div>
                
                <div class="text-center">
                    <p>Already have an account? <a href="/login" class="text-emerald-600 hover:text-emerald-800">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
