<x-app-layout>
    @section('styles')
    <link
        rel="stylesheet"
        href="{{ asset('ckeditor/ckeditor.css') }}"
    >
    @endsection
    <div class="bg-slate-900 flex px-5 py-2">
        <div class="flex-1 flex justify-between items-center">
            <h1 class="text-white">
                <em>Laravel Sample Pdf Exporter</em>
            </h1>
            <button
                type="submit"
                class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                onclick="window.open('{{ route('pdf.export') }}')"
            >Export All</button>
        </div>
    </div>
    <div class="flex">
        <div class="flex-1 h-[100vh] overflow-y-auto p-10">
            @foreach (range(1,5) as $val)
            <form
                id="form-{{ $val }}"
                class="mb-5"
            >
                <input
                    hidden
                    type="text"
                    name="id"
                    value="{{ $val }}"
                >
                <x-forms.ckeditor
                    name="body"
                    class="editor-{{ $val }}"
                />
                <div class="flex justify-end mt-5">
                    <button
                        type="button"
                        class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2"
                        onclick="window.open('{{ route('pdf.show', $val) }}')"
                    >Export</button>
                    <button
                        type="submit"
                        class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    >Save</button>
                </div>
            </form>
            @endforeach
        </div>
        <div class="flex-1 h-[100vh] flex  justify-center items-center p-10 overflow-y-auto">
                <h2>
                    <strong>Preview section is developing.</strong>
                </h2>
        </div>
    </div>

    <script>
        let $forms = @json($forms)
    </script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

</x-app-layout>
