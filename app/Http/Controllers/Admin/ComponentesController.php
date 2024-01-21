<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Componente\BulkDestroyComponente;
use App\Http\Requests\Admin\Componente\DestroyComponente;
use App\Http\Requests\Admin\Componente\IndexComponente;
use App\Http\Requests\Admin\Componente\StoreComponente;
use App\Http\Requests\Admin\Componente\UpdateComponente;
use App\Models\Componente;
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

class ComponentesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexComponente $request
     * @return array|Factory|View
     */
    public function index(IndexComponente $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Componente::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'Nombre', 'Marca', 'Area', 'NumeroSerie', 'FechaAdquirido', 'AñoComponente', 'Prioridad', 'Estado', 'Equipo_id'],

            // set columns to searchIn
            ['id', 'Nombre', 'Marca', 'Area', 'NumeroSerie', 'Prioridad', 'Estado']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.componente.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.componente.create');

        return view('admin.componente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreComponente $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreComponente $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Componente
        $componente = Componente::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/componentes'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/componentes');
    }

    /**
     * Display the specified resource.
     *
     * @param Componente $componente
     * @throws AuthorizationException
     * @return void
     */
    public function show(Componente $componente)
    {
        $this->authorize('admin.componente.show', $componente);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Componente $componente
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Componente $componente)
    {
        $this->authorize('admin.componente.edit', $componente);


        return view('admin.componente.edit', [
            'componente' => $componente,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateComponente $request
     * @param Componente $componente
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateComponente $request, Componente $componente)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Componente
        $componente->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/componentes'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/componentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyComponente $request
     * @param Componente $componente
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyComponente $request, Componente $componente)
    {
        $componente->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyComponente $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyComponente $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Componente::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
