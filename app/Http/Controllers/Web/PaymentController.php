<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Invoice;
use App\Models\Cart;
use App\Models\Member;
use App\Models\Lesson;
use App\Models\Bootcamp;
use App\Models\InvoiceDetail;
use DB;
use Auth;
use Session;
use App\Mail\InvoiceMail;
use App\Mail\SuksesMail;
use App\Notifications\MembeliBootcamp;
use Mail;

class PaymentController extends Controller
{
  public function index($response)
  {
    Cart::where('member_id', Auth::guard('members')->user()->id)->delete();
    $invoice = Invoice::where('members_id', Auth::guard('members')->user()->id)->first();
    // $bootcamps =1;
    $members = Member::where('id', $invoice->members_id)->first();
    // $send = Lesson::where($invoice->details())->first();
    // dd($send);
    if($invoice){
      if($invoice->status == 2){
        // Mail::to($members->email)->send(new InvoiceMail());
      }
      else if($invoice->status == 1){
        Mail::to($members->email)->send(new SuksesMail());
      }
    }
    // $member = Member::find($members->id);
    // $bootcamp = Bootcamp::find($bootcamps);
   
    if($response == 'finish'){
      // $member->notify(new MembeliBootcamp($member, $bootcamp));
      return view('web.payment.finish',[
        'invoice' => $invoice,
      ]);
    }else if($response == 'unfinish'){
      return view('web.payment.unfinish');
    }else if($response == 'error'){
      return view('web.payment.error');
    }


  }

  public function notification()
  {

  }


}
