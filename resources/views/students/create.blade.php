@extends('layout')

@section('content')
    <div class="card p-6 max-w-2xl mx-auto">
        <h2 class="text-2xl font-semibold mb-4">Add Student</h2>

        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium subtle">Name</label>
                <input class="mt-1 block w-full rounded-md px-3 py-2 bg-black/10 border border-white/6 text-gray-100" placeholder="Full name">
            </div>

            <div>
                <label class="block text-sm font-medium subtle">Email</label>
                <input class="mt-1 block w-full rounded-md px-3 py-2 bg-black/10 border border-white/6 text-gray-100" placeholder="email@example.com">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium subtle">Course</label>
                    <input class="mt-1 block w-full rounded-md px-3 py-2 bg-black/10 border border-white/6 text-gray-100" placeholder="Course">
                </div>
                <div>
                    <label class="block text-sm font-medium subtle">Year Level</label>
                    <input class="mt-1 block w-full rounded-md px-3 py-2 bg-black/10 border border-white/6 text-gray-100" placeholder="e.g. 1st Year">
                </div>
            </div>

            <div class="flex items-center gap-3">
                <button class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400 text-black rounded-md shadow-neon">Save</button>
                <a href="{{ route('students.index') }}" class="px-4 py-2 rounded-md border border-white/6 subtle">Cancel</a>
            </div>
        </form>
    </div>
@endsection
