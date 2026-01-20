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
                    <input placeholder="Search students" class="pl-10 pr-3 py-2 rounded-md bg-transparent border border-white/6 text-gray-200 w-64 focus:border-yellow-400/50 focus:outline-none transition-colors" />
                    <svg class="w-4 h-4 absolute left-3 top-2.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18z"/></svg>
                </div>

                <x-action-button href="{{ route('students.create') }}" type="primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    Add New Student
                </x-action-button>
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
                    <tr class="hover:bg-white/3 border-b border-white/6 transition-colors">
                        <td class="px-6 py-4">Jane Doe</td>
                        <td class="px-6 py-4 subtle">Computer Science</td>
                        <td class="px-6 py-4 subtle">3rd Year</td>
                        <td class="px-6 py-4 flex gap-2">
                            <x-action-button href="{{ route('students.show', 1) }}" type="secondary">
                                View
                            </x-action-button>
                            
                            <x-action-button href="{{ route('students.edit', 1) }}" type="ghost">
                                Edit
                            </x-action-button>
                        </td>
                    </tr>
                    
                    <tr class="hover:bg-white/3 border-b border-white/6 transition-colors">
                        <td class="px-6 py-4">John Smith</td>
                        <td class="px-6 py-4 subtle">Business Administration</td>
                        <td class="px-6 py-4 subtle">2nd Year</td>
                        <td class="px-6 py-4 flex gap-2">
                            <x-action-button href="{{ route('students.show', 2) }}" type="secondary">
                                View
                            </x-action-button>
                            
                            <x-action-button href="{{ route('students.edit', 2) }}" type="ghost">
                                Edit
                            </x-action-button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
