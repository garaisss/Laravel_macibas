<x-layout>

    <x-setting :heading="'Edit Post: ' . $post->title">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            
            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thumbnail" type="file" />
            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />
    
    
            <x-form.field>
                <x-form.label name="cateogry" />
    
                <select class="border border-gray-300 mb-6" name="category_id" id="category">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp
    
                    @foreach ($categories as $category)
                        <option 
                            value="{{ $category->id }}" 
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
    
                <x-form.error name="category" />
            </x-form.field>
    
            <x-submit-button>Publish</x-submit-button>
        </form>
    </x-setting>
</x-layout>