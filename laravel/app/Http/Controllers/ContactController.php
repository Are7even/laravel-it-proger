<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        if (isset($req)) {
            if (Contact::add($req->all())) {
                return redirect()
                    ->route('home')
                    ->with('success', 'Сообщение было отправлено');
            }
            return 'request does not save';
        }
        return 'request is unset';
    }

    public function allData()
    {
        $data = Contact::all();
        return view('messages', ['data' => $data]);
    }

    public function oneMessage($id)
    {
        $data = Contact::getById($id);
        return view('one-message', ['data' => $data]);
    }

    public function updateMessage($id)
    {
        $data = Contact::getById($id);
        return view('update-message', ['data' => $data]);
    }

    public function deleteMessage($id)
    {
        $data = Contact::getById($id)->delete();
        return redirect()
            ->route('contact-data')
            ->with('success','Сообщение удалено');
    }

    public function updateMessageSubmit($id ,ContactRequest $request)
    {
        if (isset($request)) {
            if (Contact::updateMessage($id, $request->all())) {
                return redirect()
                    ->route('contact-data-one',['id'=>$id])
                    ->with('success', 'Сообщение было обновлено');
            }
            return 'request does not save';
        }
        return 'request = null';
    }

}
