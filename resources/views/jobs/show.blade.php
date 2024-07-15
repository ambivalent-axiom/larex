<x-layout>
    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>
    <h2>{{ $job->title }}</h2>
    <p>{{ $job->salary }}</p>
    @can('edit', $job)
    <p class="mt-6">
        <x-a-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-a-button>
    </p>
    @endcan
</x-layout>

