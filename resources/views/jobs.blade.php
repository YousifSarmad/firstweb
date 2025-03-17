<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <a href="/jobs/{{ $job['id'] }}" class="block px-6 py-4">
                        <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name}}</div>

                        <div>
                            <strong>{{$job['title']}}</strong> Pays {{$job['salary']}} per year.
                        </div>
                    </a>
                </div>
        @endforeach
    </div>
        {{$jobs->links()}}
    </div>
</x-layout>