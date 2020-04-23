<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            request()->validate(User::$rules);
            $data = $request->all();
            $user = User::create($data);
            $this->insertContacts($user, $data);

            return redirect()->route('user.index')
                ->withSuccess('User created successfully.');
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('user.index')
                ->with('error', 'User already exists.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        try {
            request()->validate(User::$rules);
            $data = $request->all();
            $user->update($data);
            $this->insertContacts($user, $data);

            return redirect()->route('user.index')
                ->with('success', 'User updated successfully');
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('user.index')
                ->with('error', 'User already exists.');
        }
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('user.index')
            ->with('success', 'User deleted successfully');
    }

    /**
     * @param User $user
     * @param array $data
     *
     * @return bool
     */
    protected function insertContacts(User $user, array $data) {
        try {
            if (!empty($data['phones'])) {
                $contact = ['user_id' => $user->id, 'type' => Contact::TYPE_PHONE, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()];
                $insertData = [];
                foreach ($data['phones'] as $phone) {
                    $contactData = array_merge($contact, ['value' => $phone]);
                    $validator = Validator::make($contactData, Contact::$rules);

                    if ($validator->fails()) {
                        return false;
                    }

                    $insertData[] = $contactData;
                }
                $user->contacts()->delete();
                Contact::insert($insertData);
            }
        } catch (Throwable $e) {
            report($e);
        }

        return true;
    }
}
