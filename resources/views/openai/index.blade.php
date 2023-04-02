<x-layout>
    <h1 class=" mt-0 mb-2 text-3xl font-medium leading-tight mx-4">
        Ask a Question
    </h1>
    <x-card>
        <form method="POST" action="/openai/chat">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="question">
                    Question
                </label>
                <input type="text"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="question" id="question" rows="3" placeholder="What is the meaning of life?" />
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Ask
                </button>
            </div>
        </form>
    </x-card>
</x-layout>
