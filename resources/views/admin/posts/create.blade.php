<x-layout>

    <section class="px-6 py-8 border border-gray-200 p-6 rounded-xl mt-20 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-8">
            Publish New POST
        </h1>
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                    Title
                </label>
                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="title"
                       id="title"
                       value="{{old('title')}}"
                       required
                >
                @error('title')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                    Slug
                </label>
                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="slug"
                       id="slug"
                       value="{{old('slug')}}"
                       required
                >
                @error('slug')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                    Thumbnail
                </label>
                <input class="border border-gray-400 p-2 w-full"
                       type="file"
                       name="thumbnail"
                       id="thumbnail"
                       required
                >
                @error('thumbnail')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                    Excerpt
                </label>
                <textarea class="border border-gray-400 p-2 w-full"
                          type="text"
                          name="excerpt"
                          id="excerpt"
                          required
                >{{old('excerpt')}}</textarea>
                @error('excerpt')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                    Body
                </label>
                <textarea class="border border-gray-400 p-2 w-full"
                          type="text"
                          name="body"
                          id="body"
                          required
                >{{old('body')}}</textarea>
                @error('body')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                    Category
                </label>
                <select name="category_id" id="category">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="flex justify-end mt-10 border-t border-gray-200 pt-6">
                <button type="submit"
                        class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-700">
                    Post
                </button>
            </div>
        </form>
    </section>
</x-layout>
