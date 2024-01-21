<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Equipo\BulkDestroyEquipo;
use App\Http\Requests\Admin\Equipo\DestroyEquipo;
use App\Http\Requests\Admin\Equipo\IndexEquipo;
use App\Http\Requests\Admin\Equipo\StoreEquipo;
use App\Http\Requests\Admin\Equipo\UpdateEquipo;
use App\Models\Equipo;
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

class EquiposController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexEquipo $request
     * @return array|Factory|View
     */
    public function index(IndexEquipo $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Equipo::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'Nombre', 'Procesador', 'Marca', 'TargetaGrafica', 'Modelo', 'Antivirus', 'SO', 'EspacioDisco', 'MemoriaRAM', 'Area', 'Estado', 'FechaAdquirido', 'AñoEquipo', 'Prioridad'],

            // set columns to searchIn
            ['id', 'Nombre', 'Procesador', 'Marca', 'TargetaGrafica', 'Modelo', 'Antivirus', 'SO', 'EspacioDisco', 'MemoriaRAM', 'Area', 'Prioridad']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.equipo.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.equipo.create');

        return view('admin.equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreEquipo $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreEquipo $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Equipo
        $equipo = Equipo::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/equipos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/equipos');
    }

    /**
     * Display the specified resource.
     *
     * @param Equipo $equipo
     * @throws AuthorizationException
     * @return void
     */
    public function show(Equipo $equipo)
    {
        $this->authorize('admin.equipo.show', $equipo);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Equipo $equipo
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Equipo $equipo)
    {
        $this->authorize('admin.equipo.edit', $equipo);


        return view('admin.equipo.edit', [
            'equipo' => $equipo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateEquipo $request
     * @param Equipo $equipo
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateEquipo $request, Equipo $equipo)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Equipo
        $equipo->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/equipos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/equipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyEquipo $request
     * @param Equipo $equipo
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyEquipo $request, Equipo $equipo)
    {
        $equipo->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyEquipo $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyEquipo $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Equipo::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
