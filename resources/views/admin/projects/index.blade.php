@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Project Link</th>
                        <th>Language</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <td><a href="#">{{ $project->link_project }}</a></td>
                            <td>{{ $project->language }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>No Project</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection