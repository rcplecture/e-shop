<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('food.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" role="button" aria-pressed="true">Create</a>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <br><br>
                    <div class="bg-green-200">

                        <table class="table-auto border-separate border border-green-900" width="100%">
                            <thead>
                            <tr>
                                <th class="border border-green-600">#</th>
                                <th class="border border-green-600">Name/Title</th>
                                <th class="border border-green-600">Description</th>
                                <th class="border border-green-600">Created Ad</th>
                                <th class="border border-green-600">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($foods as $task)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->created_at }}</td>
                                    <td>
                                        {{--                                    <form action="{{ route('task.destroy',$task->id) }}" method="POST">--}}
                                        {{--                                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary">Edit</a>--}}
                                        {{--                                        |--}}
                                        {{--                                        @csrf--}}
                                        {{--                                        @method('DELETE')--}}
                                        {{--                                        <button type="submit" class="btn btn-danger">Delete</button>--}}
                                        {{--                                    </form>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
