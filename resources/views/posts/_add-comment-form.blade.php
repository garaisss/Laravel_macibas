@auth
                    <x-panel>
                        <form method="POST" action="/posts/{{ $post->slug }}/comments">
                            @csrf
    
                            <header class="flex items-center">
                                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" 
                                    class="rounded-full">
    
                                <h2 class="pl-4">Leave a comment down below!</h2>
    
                            </header>
    
                            <div class="mt-6">
                                <textarea 
                                    name="body" 
                                    class="w-full text-sm focus:outline-none focus:ring" 
                                    rows="5" 
                                    placeholder="Quick, think of something to say!"
                                    required></textarea>

                                    @error('body')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                            </div>
    
                            <div class="flex justify-end border-t border-gray-200 pt-6">
                                <x-submit-button>Post</x-submit-button>
                            </div>
                        </form>
                    </x-panel>
                    @else
                        <p>
                            <a href="/register" class="text-blue-500 hover:text-blue-600 font-semibold">Register</a>
                            or 
                            <a href="/login" class="text-blue-500 hover:text-blue-600 font-semibold">Log In</a> 
                            to leave a comment!
                        </p>
                @endauth