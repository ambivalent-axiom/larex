<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                name="title"
                                id="title"
                                value="{{ $job->title }}"
                                placeholder="Shift Leader"
                                required
                            />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                name="salary"
                                id="salary"
                                value="{{ $job->salary }}"
                                placeholder="Shift Leader"
                                required
                            />
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div>
                <x-button form="delete-form">Delete</x-button>
            </div>
            <div class="flex items-center gap-x-6">
                <x-a-button href="/jobs/{{ $job->id }}">Cancel</x-a-button>
                <x-button>Update</x-button>
            </div>
        </div>
    </form>
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
