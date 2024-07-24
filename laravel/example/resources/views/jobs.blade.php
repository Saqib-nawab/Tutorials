<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <ul>
        @foreach($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}">
                <strong>{{ $job['title'] }}: </strong> pays {{ $job['salary'] }} salary per year
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>