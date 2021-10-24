<a href="{{ $url_edit }}" class="btn btn-light btn-active-light-primary btn-sm modal_user_show"
    title="Edit User">Edit</a>
<a href="{{ $url_destroy }}" class="btn btn-light btn-active-light-primary btn-sm btn_status"
    title="{{ $model->aktif ? 'nonaktifkan ' : 'aktifkan ' }}{{ $model->nama }}">{{ $model->aktif ? 'Nonaktifkan' : 'Aktifkan' }}</a>
