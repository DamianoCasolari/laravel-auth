@extends('layouts.admin')


@section('content')
    <h1 class="px-2">Show projects table</h1>
    <a class="btn btn-dark m-2 mb-3" href="{{ route('admin.projects.create') }}" role="button">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Add new Projectt</a>

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

                        <td class="buttons_container d-flex flex-column ">
                            <a name="" id="" class="btn btn-primary my-1 fs_13"
                                href="{{ route('admin.projects.show', $project) }}" role="button"> <i class="fa fa-eye"
                                    aria-hidden="true"></i></a>
                            <a name="" id="" class="btn btn-primary my-1 fs_13"
                                href="{{ route('admin.projects.edit', $project) }}" role="button"><i
                                    class="fa-solid fa-pen-to-square"></i> </a>

                            <button type="button" class="btn btn-danger my-1 fs_13" data-bs-toggle="modal"
                                data-bs-target="#project-delete-{{ $project->id }}">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>

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
