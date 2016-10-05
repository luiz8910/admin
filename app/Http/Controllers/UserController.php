<?php

namespace Admin\Http\Controllers;

use Admin\Repositories\CargoRepository;
use Admin\Repositories\UserRepository;
use Illuminate\Http\Request;

use Admin\Http\Requests\UserRequest;

use Admin\Http\Requests;
use Admin\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    private $repository;
    /**
     * @var CargoRepository
     */
    private $cargoRepository;

    public function __construct(UserRepository $repository, CargoRepository $cargoRepository)
    {
        $this->repository = $repository;
        $this->cargoRepository = $cargoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = $this->repository->all();

        $user = $this->repository->findByField('role', 'Administrador');

        $editor = $this->repository->findByField('role', 'Editor');

        $operador = $this->repository->findByField('role', 'Operador');

        return view('admin.usuarios.index', compact('user', 'editor', 'operador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        $this->repository->create($data);

        return redirect()->route('admin.usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('admin.usuarios.edit');
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
}
