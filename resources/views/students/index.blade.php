@extends('layout')

@section('content')
    <div class="card p-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div>
                <h2 class="text-2xl font-semibold">Student List</h2>
                <p class="text-sm subtle">Static sample students for UI demo.</p>
            </div>

            <div class="flex items-center gap-3">
                <div class="relative">
                    <input placeholder="Search students" class="pl-10 pr-3 py-2 rounded-md bg-transparent border border-white/6 text-gray-200 w-64" />
                    <svg class="w-4 h-4 absolute left-3 top-2.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18z"/></svg>
                </div>

                <a href="{{ route('students.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400 text-black rounded-md shadow-neon">Add New Student</a>
            </div>
        </div>

        <div class="overflow-hidden rounded-md border border-white/6">
            <table class="min-w-full">
                <thead class="bg-black/30">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium subtle uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium subtle uppercase tracking-wider">Course</th>
                        <th class="px-6 py-3 text-left text-xs font-medium subtle uppercase tracking-wider">Year Level</th>
                        <th class="px-6 py-3 text-left text-xs font-medium subtle uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-transparent">
                    <tr class="hover:bg-white/3 border-b border-white/6">
                        <td class="px-6 py-4">Jane Doe</td>
                        <td class="px-6 py-4 subtle">Computer Science</td>
                        <td class="px-6 py-4 subtle">3rd Year</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('students.show', 1) }}" class="text-yellow-300 hover:underline mr-4">View</a>
                            <a href="{{ route('students.edit', 1) }}" class="text-yellow-400 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-white/3 border-b border-white/6">
                        <td class="px-6 py-4">John Smith</td>
                        <td class="px-6 py-4 subtle">Business Administration</td>
                        <td class="px-6 py-4 subtle">2nd Year</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('students.show', 2) }}" class="text-yellow-300 hover:underline mr-4">View</a>
                            <a href="{{ route('students.edit', 2) }}" class="text-yellow-400 hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
