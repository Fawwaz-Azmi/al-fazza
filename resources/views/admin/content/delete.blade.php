@push('styles')
    <script>
        function confirmDelete(event, formId) {
            event.preventDefault();
            if (confirm('Apakah Anda yakin ingin menghapus konten ini?')) {
                document.getElementById(formId).submit();
            }
        }
    </script>
@endpush

<form id="delete-form-{{ $content->id }}" action="{{ route('content.destroy', $content->id) }}" method="POST"
    class="inline">
    @csrf
    @method('DELETE')
    <button type="button" onclick="confirmDelete(event, 'delete-form-{{ $content->id }}')"
        class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300">
        Delete
    </button>
</form>