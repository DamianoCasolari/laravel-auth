@extends('layouts.admin')


@section('content')
    <h1 class="px-2">Show projects table</h1>
    <a class="btn btn-dark m-2" href="{{ route('admin.projects.create') }}" role="button">Create Post</a>

    {{-- @include('partials.session_message') --}}

    <div class="table-responsive">
        <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
            <thead class="table-light ">

                <tr class="text-center">
                    <th>ID</th>
                    <th>Logo</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">


                @forelse ($projects as $project)
                    <tr class="table-primary">
                        <td scope="row">{{ $project->id }}</td>
                        <td><img height="100" src="{{ $project->logo }}" alt="{{ $project->title }}"></td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->link }}</td>
                        <td>

                            VIEW/EDIT/DELETE

                        </td>

                    </tr>
                @empty
                    <tr class="table-primary">
                        <td scope="row">No project yet.</td>

                    </tr>
                @endforelse
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
@endsection
