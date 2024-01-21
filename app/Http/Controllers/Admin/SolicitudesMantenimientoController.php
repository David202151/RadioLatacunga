<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SolicitudesMantenimiento\BulkDestroySolicitudesMantenimiento;
use App\Http\Requests\Admin\SolicitudesMantenimiento\DestroySolicitudesMantenimiento;
use App\Http\Requests\Admin\SolicitudesMantenimiento\IndexSolicitudesMantenimiento;
use App\Http\Requests\Admin\SolicitudesMantenimiento\StoreSolicitudesMantenimiento;
use App\Http\Requests\Admin\SolicitudesMantenimiento\UpdateSolicitudesMantenimiento;
use App\Models\SolicitudesMantenimiento;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SolicitudesMantenimientoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexSolicitudesMantenimiento $request
     * @return array|Factory|View
     */
    public function index(IndexSolicitudesMantenimiento $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(SolicitudesMantenimiento::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'FechaMantenimineto', 'HoraMantenimineto', 'AreaMantenimineto', 'MotivoMantenimineto', 'ObservacionesMantenimineto', 'TiempoDuracion', 'HoraSalida', 'HoraRegreso', 'EstadoSolicitud', 'Equipo_id', 'Usuario_id', 'Mantenimiento_id', 'Componente_id'],

            // set columns to searchIn
            ['id', 'AreaMantenimineto', 'MotivoMantenimineto', 'ObservacionesMantenimineto', 'EstadoSolicitud', 'Parte']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.solicitudes-mantenimiento.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.solicitudes-mantenimiento.create');

        return view('admin.solicitudes-mantenimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSolicitudesMantenimiento $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreSolicitudesMantenimiento $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the SolicitudesMantenimiento
        $solicitudesMantenimiento = SolicitudesMantenimiento::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/solicitudes-mantenimientos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/solicitudes-mantenimientos');
    }

    /**
     * Display the specified resource.
     *
     * @param SolicitudesMantenimiento $solicitudesMantenimiento
     * @throws AuthorizationException
     * @return void
     */
    public function show(SolicitudesMantenimiento $solicitudesMantenimiento)
    {
        $this->authorize('admin.solicitudes-mantenimiento.show', $solicitudesMantenimiento);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SolicitudesMantenimiento $solicitudesMantenimiento
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(SolicitudesMantenimiento $solicitudesMantenimiento)
    {
        $this->authorize('admin.solicitudes-mantenimiento.edit', $solicitudesMantenimiento);


        return view('admin.solicitudes-mantenimiento.edit', [
            'solicitudesMantenimiento' => $solicitudesMantenimiento,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSolicitudesMantenimiento $request
     * @param SolicitudesMantenimiento $solicitudesMantenimiento
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateSolicitudesMantenimiento $request, SolicitudesMantenimiento $solicitudesMantenimiento)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values SolicitudesMantenimiento
        $solicitudesMantenimiento->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/solicitudes-mantenimientos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/solicitudes-mantenimientos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySolicitudesMantenimiento $request
     * @param SolicitudesMantenimiento $solicitudesMantenimiento
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroySolicitudesMantenimiento $request, SolicitudesMantenimiento $solicitudesMantenimiento)
    {
        $solicitudesMantenimiento->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroySolicitudesMantenimiento $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroySolicitudesMantenimiento $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    SolicitudesMantenimiento::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
