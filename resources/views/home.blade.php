@extends('layout')

@section('content')
    <section class="card p-8 rounded-xl relative overflow-hidden">
        <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full bg-gradient-to-br from-black/40 to-yellow-700/10 blur-3xl opacity-20"></div>
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold">Welcome to the Student Portal</h2>
                <p class="mt-3 subtle max-w-xl">Dark, clean and illuminated — a Batman-inspired UI with warm accent lights for clarity. This demo uses static data for a visual preview.</p>

                <div class="mt-6 flex gap-3">
                    <a href="{{ route('students.index') }}" class="inline-flex items-center gap-2 bg-yellow-400 px-4 py-2 rounded-md font-medium text-black shadow-neon">View Students</a>
                    <a href="{{ route('students.create') }}" class="inline-flex items-center gap-2 border border-white/6 px-4 py-2 rounded-md subtle hover:bg-white/2">Add Student</a>
                </div>
            </div>

            <div class="flex-shrink-0">
                <div class="w-48 h-32 rounded-lg bg-gradient-to-b from-black/20 to-white/2 border border-white/3 flex items-center justify-center text-yellow-300 font-semibold">Students · Profiles</div>
            </div>
        </div>
    </section>

    <section class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="card p-4">
            <h3 class="font-semibold">Moody design</h3>
            <p class="text-sm subtle mt-2">Dark backgrounds with warm light accents provide hierarchy and focus.</p>
        </div>
        <div class="card p-4">
            <h3 class="font-semibold">Readable</h3>
            <p class="text-sm subtle mt-2">Text contrast and illuminated key actions keep the UI approachable.</p>
        </div>
        <div class="card p-4">
            <h3 class="font-semibold">Static Demo</h3>
            <p class="text-sm subtle mt-2">No backend required for this UI preview.</p>
        </div>
    </section>
@endsection
