<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use DataTables;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.pengajuan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('app.pengajuan.show', [
            'pengajuan' => Pengajuan::with('layanan', 'pelapor', 'user', 'data_pengajuan')->where('id', $id)->first(),
            'status_pengajuan' => get_status_pengajuan($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function data()
    {
        $model = Pengajuan::query()->with(['data_pengajuan', 'layanan', 'pelapor', 'user'])->orderBy('tgl', 'desc');
        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('layanan', function ($model) {
                return $model->id_layanan ? $model->layanan->layanan : '';
            })
            ->addColumn('pelapor', function ($model) {
                return view('app.pengajuan.datatable.pelapor', [
                    'model' => $model,
                ]);
            })
            ->addColumn('tgl', function ($model) {
                return \Carbon\Carbon::parse($model->tgl)->isoFormat('D MMMM Y');
            })
            ->addColumn('status', function ($model) {
                return view('app.pengajuan.datatable.status', [
                    'model' => $model,
                ]);
            })
            ->addColumn('action', function ($model) {
                return view('app.pengajuan.datatable.action', [
                    'model' => $model,
                    'url_show' => route('pengajuan.show', $model->id),
                ]);
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function status(Request $request, $id, $status)
    {
        $status_pengajuan = $status == 'terima' ? 'Y' : ($status == 'tolak' ? 'N' : 'V');
        $keterangan = $status_pengajuan == 'V' ? null : $request->keterangan;
        Pengajuan::where('id', $id)->update([
            'status' => $status_pengajuan,
            'keterangan' => $keterangan
        ]);

        return redirect()->back()->with('success', 'Berhasil mengubah status pengajuan');
    }
}
