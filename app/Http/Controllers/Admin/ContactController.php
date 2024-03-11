<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Mail;
use App\Mail\MailContact;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }// end of __construct

    public function index()
    {
         return view('admin.contacts.index');

    }// end of index

    public function data()
    {
        $contacts = Contact::whereNull('reply_id')->get();

        return DataTables::of($contacts)
            ->addColumn('record_select', 'admin.contacts.data_table.record_select')
            ->editColumn('created_at', function (Contact $contact) {
                return $contact->created_at->format('Y-m-d');
            })
            ->addColumn('reply', function (Contact $contact) {
                return view('admin.contacts.data_table.reply', compact('contact'));
            })
            ->addColumn('actions', 'admin.contacts.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data


    public function reply(Contact $contact) {
        return view('admin.contacts.reply', compact('contact'));
    }// end of reply


    public function store_reply(Request $request, Contact $contact) {
        Contact::create([
            'message' => $request->reply,
            'name' => 'Admin',
            'email' => setting('email'),
            'phone' => setting('phone'),
            'reply_id' => $contact->id,
        ]);
        $mailData = ['title' => $contact->name, 'body' => $request->reply];
        Mail::to($contact->email)->send(new MailContact($mailData));
        $contact->update(['status'=>1]);
        session()->flash('success', 'Reply Send Successfully');
        return redirect()->route('admin.contacts.index');
    }//end of reply store

    public function destroy(Contact $contact)
    {
        $this->delete($contact);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $contact = Contact::FindOrFail($recordId);
            $this->delete($contact);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Contact $contact)
    {
        $contact->delete();
    }// end of delete

}//end of controller