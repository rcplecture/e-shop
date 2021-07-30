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
                    <h1>Food Create</h1>

                    {{--<a href="/tasks" class="btn btn-primary" role="button" aria-pressed="true">View All</a>--}}
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form method="post" action="{{ route('admin.food.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="name" class="block mt-1 w-full" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="block mt-1 w-full" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" name="price" class="block mt-1 w-full" placeholder="Enter price">
                        </div>
                        <div class="form-group">
                            <label for="">Discount %</label>
                            <input type="text" name="is_discount" class="block mt-1 w-full" placeholder="Enter Discount in %">
                        </div>
                        <div class="form-group">
                            <label for="">Rating</label>
                            <input type="number" name="rating" class="block mt-1 w-full" min="1" max="5" value="4">
                        </div>
                        <div class="form-group">
                            <label for="">Quantity Stock</label>
                            <input type="number" name="quantity" class="block mt-1 w-full" min="1" max="100" value="5">
                        </div>
                        <div class="form-group">
                            <label for="">Choose Image</label>
                            <input type="file" name="image_path" class="block mt-1 w-full">
                        </div>
                        <div class="form-group">
                            <label for="">Select Type</label>
                            <select name="type" id="" class="block mt-1 w-full">
                                <option value="1">Special</option>
                                <option value="2">Menu</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
