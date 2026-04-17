<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Programs') }}
            </h2>
            @if(in_array(Auth::user()->account_type, ['admin', 'staff'], true))
                <a href="{{ route('programs.create') }}" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    {{ __('Add program') }}
                </a>
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="mb-4 rounded-md bg-green-50 p-4 text-sm text-green-800">
                    {{ session('status') }}
                </div>
            @endif

            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left font-medium text-gray-500">{{ __('Code') }}</th>
                                <th scope="col" class="px-6 py-3 text-left font-medium text-gray-500">{{ __('Title') }}</th>
                                <th scope="col" class="px-6 py-3 text-left font-medium text-gray-500">{{ __('Years') }}</th>
                                @if(in_array(Auth::user()->account_type, ['admin', 'staff'], true))
                                    <th scope="col" class="px-6 py-3 text-right font-medium text-gray-500">{{ __('Actions') }}</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @forelse ($programs as $program)
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">{{ $program->code }}</td>
                                    <td class="px-6 py-4 text-gray-700">{{ $program->title }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 text-gray-700">{{ $program->years }}</td>
                                    @if(in_array(Auth::user()->account_type, ['admin', 'staff'], true))
                                        <td class="whitespace-nowrap px-6 py-4 text-right">
                                            <a href="{{ route('programs.edit', $program) }}" class="text-indigo-600 hover:text-indigo-900">{{ __('Edit') }}</a>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ in_array(Auth::user()->account_type, ['admin', 'staff'], true) ? 4 : 3 }}" class="px-6 py-8 text-center text-gray-500">{{ __('No programs yet.') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
