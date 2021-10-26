<div class="card mb-5 mb-xl-10">
    <div class="card-body p-0">
        <div class="card-px text-center py-10 my-5">
            <h2 class="fs-2x fw-bolder mb-10">Layanan {{ $pengajuan->layanan->layanan }}</h2>
            <p class="text-gray-400 fs-3 fw-bold mb-5">Tidak Ditemukan<br><br>
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Kembali</a>
        </div>
        <div class="text-center px-2">
            <img class="mw-100 mh-200px" alt="layanan"
                src="{{ asset('') }}assets/media/illustrations/sigma-1/5.png" />
        </div>
    </div>
</div>
