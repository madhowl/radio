<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRadioRequest;
use App\Http\Requests\UpdateRadioRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\RadioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RadioController extends AppBaseController
{
    /** @var  RadioRepository */
    private $radioRepository;

    public function __construct(RadioRepository $radioRepo)
    {
        $this->radioRepository = $radioRepo;
    }

    /**
     * Display a listing of the Radio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $radios = $this->radioRepository-> paginate(10);

        return view('radios.index')
            ->with('radios', $radios);
    }

    /**
     * Show the form for creating a new Radio.
     *
     * @return Response
     */
    public function create()
    {
        $categories = \App\Models\Category::all('id','title')->pluck('title', 'id');

        $countries = \App\Models\Country::all('id','title')->pluck('title', 'id');

        return view('radios.create',['categories'=>$categories, 'countries'=>$countries]);
    }

    /**
     * Store a newly created Radio in storage.
     *
     * @param CreateRadioRequest $request
     *
     * @return Response
     */
    public function store(CreateRadioRequest $request)
    {
        $input = $request->all();

        $radio = $this->radioRepository->create($input);

        Flash::success('Радиостанция успешно сохранена.');

        return redirect(route('radios.index'));
    }

    /**
     * Display the specified Radio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $radio = $this->radioRepository->find($id);

        if (empty($radio)) {
            Flash::error('Радиостанция не найдена');

            return redirect(route('radios.index'));
        }

        return view('radios.show')->with('radio', $radio);
    }

    /**
     * Show the form for editing the specified Radio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $radio = $this->radioRepository->find($id);

        if (empty($radio)) {
            Flash::error('Радиостанция не найдена');

            return redirect(route('radios.index'));
        }

        $categories = \App\Models\Category::all('id','title')->pluck('title', 'id');

        $countries = \App\Models\Country::all('id','title')->pluck('title', 'id');

        return view('radios.edit',['categories'=>$categories, 'countries'=>$countries])->with('radio', $radio);
    }

    /**
     * Update the specified Radio in storage.
     *
     * @param int $id
     * @param UpdateRadioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRadioRequest $request)
    {
        $radio = $this->radioRepository->find($id);

        if (empty($radio)) {
            Flash::error('Радиостанция не найдена');

            return redirect(route('radios.index'));
        }

        $radio = $this->radioRepository->update($request->all(), $id);

        Flash::success('Радиостанция обновлена успешно.');

        return redirect(route('radios.index'));
    }

    /**
     * Remove the specified Radio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $radio = $this->radioRepository->find($id);

        if (empty($radio)) {
            Flash::error('Радиостанция не найдена');

            return redirect(route('radios.index'));
        }

        $this->radioRepository->delete($id);

        Flash::success('Радиостанция удалена успешно.');

        return redirect(route('radios.index'));
    }
}
