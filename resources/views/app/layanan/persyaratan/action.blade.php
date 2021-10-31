<form id="form-status" action="{{ url('persyaratan/status', $persyaratan->id) }}" method="POST">
    @csrf
    @method('put')
    <a href="{{ url('persyaratan/edit', $persyaratan->id) }}"
        class="btn btn-light btn-active-light-primary btn-sm btn_show_modal" title="Edit Persyaratan">Edit</a>
    <button type="submit" class="btn btn-light btn-active-light-primary btn-sm btn_show_alert" title="Ubah Status"
        text="Yakin ingin {{ $persyaratan->aktif ? 'Nonaktifkan' : 'Aktifkan' }}?">{{ $persyaratan->aktif ? 'Nonaktifkan' : 'Aktifkan' }}</button>
</form>
