<x-layout>
    <x-slot:heading>
        Job Title: {{$job['title']}}
    </x-slot:heading>

    <p>
        this job pays {{$job['salary']}} per year
    </p>
</x-layout>