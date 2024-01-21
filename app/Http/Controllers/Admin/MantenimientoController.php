<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Mantenimiento\BulkDestroyMantenimiento;
use App\Http\Requests\Admin\Mantenimiento\DestroyMantenimiento;
use App\Http\Requests\Admin\Mantenimiento\IndexMantenimiento;
use App\Http\Requests\Admin\Mantenimiento\StoreMantenimiento;
use App\Http\Requests\Admin\Mantenimiento\UpdateMantenimiento;
use App\Models\Mantenimiento;
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

class MantenimientoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexMantenimiento $request
     * @return array|Factory|View
     */
    public function index(IndexMantenimiento $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Mantenimiento::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'Nombre', 'Actividad', 'Frecuencia', 'Prioridad', 'Responsable', 'Procedimiento', 'DiasParo', 'Equipo_id', 'Descripcion'],

            // set columns to searchIn
            ['id', 'Nombre', 'Actividad', 'Partes', 'Frecuencia', 'Prioridad', 'Responsable', 'Procedimiento', 'Descripcion']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.mantenimiento.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.mantenimiento.create');

        return view('admin.mantenimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMantenimiento $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreMantenimiento $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Mantenimiento
        $mantenimiento = Mantenimiento::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/mantenimientos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/mantenimientos');
    }

    /**
     * Display the specified resource.
     *
     * @param Mantenimiento $mantenimiento
     * @throws AuthorizationException
     * @return void
     */
    public function show(Mantenimiento $mantenimiento)
    {
        $this->authorize('admin.mantenimiento.show', $mantenimiento);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Mantenimiento $mantenimiento
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Mantenimiento $mantenimiento)
    {
        $this->authorize('admin.mantenimiento.edit', $mantenimiento);


        return view('admin.mantenimiento.edit', [
            'mantenimiento' => $mantenimiento,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMantenimiento $request
     * @param Mantenimiento $mantenimiento
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateMantenimiento $request, Mantenimiento $mantenimiento)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Mantenimiento
        $mantenimiento->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/mantenimientos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/mantenimientos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyMantenimiento $request
     * @param Mantenimiento $mantenimiento
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyMantenimiento $request, Mantenimiento $mantenimiento)
    {
        $mantenimiento->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyMantenimiento $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyMantenimiento $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Mantenimiento::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
