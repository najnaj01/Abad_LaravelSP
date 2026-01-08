@extends('layout')

@section('content')
    <div class="card p-6 max-w-xl mx-auto">
        <div class="flex items-center gap-6">
            <div class="w-20 h-20 rounded-full bg-gradient-to-br from-black/40 to-yellow-700/10 flex items-center justify-center text-yellow-300 font-semibold text-xl">JD</div>
            <div>
                <h2 class="text-2xl font-semibold">Jane Doe</h2>
                <div class="text-sm subtle">Computer Science · 3rd Year</div>
            </div>
        </div>

        <div class="mt-6 grid grid-cols-1 gap-3 text-sm text-gray-200">
            <div><span class="font-medium">Email:</span> jane.doe@example.com</div>
            <div><span class="font-medium">Course:</span> Computer Science</div>
            <div><span class="font-medium">Year Level:</span> 3rd Year</div>
        </div>

        <div class="mt-6 flex gap-3">
            <a href="{{ route('students.index') }}" class="px-4 py-2 rounded-md border border-white/6 subtle">Back to Student List</a>
            <a href="{{ route('students.edit', 1) }}" class="px-4 py-2 rounded-md bg-yellow-400 text-black">Edit</a>
        </div>
    </div>
@endsection
