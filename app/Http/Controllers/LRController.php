<?php

namespace App\Http\Controllers;

use App\Host;
use App\User;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Controllers\MailController;

class LRController extends Controller
{
   protected $mail;
   public function __construct(MailController $mail){
      $this->mail = $mail;
   }


  public function userRegister(Request $request){

    try{
      $upassword = $request -> input('upassword');
      $ucpassword = $request -> input('uCPassword');
      $umiddleName = $request ->input('umiddleName');
      $udob = $request -> input('udob');
      if($umiddleName == null){
          $umiddleName = '';
      }
      if($upassword == $ucpassword) {
           $user = new User;
          $user->uuid =  uniqid();
          $user->ufname = $request -> input('ufirstName');
          $user->umname = $umiddleName;
          $user->ulname = $request -> input('ulastName');
          $user->uemail = $request -> input('uemail');
          $user->uphone_number = $request -> input('uphoneNumber');
          $user->ugender = $request -> input('ugender');
          $user->udob = $request -> input('udob');
          $user->ucountry = $request -> input('ucountry');
          $user->udistrict = $request -> input('udistrict');
          $user->uaddress = $request -> input('uaddress');
          $user->upassword = $request -> input('upassword');
          $user->uphoto = 'null';
          $user->save();
          return redirect('userLogin');

      }
      else {
        return redirect('userRegister');
      }

    }
    catch (QueryException $e) {
      $errorCode = $e->errorInfo[1];
      if($errorCode == 1062){
          return redirect('userRegister');
      }
    }
  }
  // user Login
  public function userLogin(Request $request) {

    $this->validate($request,[
      'uLUsername' =>'required',
      'uLPassword' =>'required',
    ]);
    $userEmail = $request->input('uLUsername');
    $userPassword = $request->input('uLPassword');
    if($userEmail != null && $userPassword != null) {
            $user = DB::table('users')->where('uemail', $userEmail)->first();
                  //check exist user
                  if($user) {
                      if($user->upassword == $userPassword) {
                         $request->session()->put('uemail',$userEmail);
                          return redirect('/');
                      }

                      else {
                        return redirect('userLogin'); // password error
                       }

                  } else { //user exist or not check end
                    return redirect('userLogin'); // not valid username/email
                    }
                  //end else to check existing valid email

      } else { //empty check
       return redirect('userLogin'); // null
      }


  }  // main function end


  // Sign Out
  public function signout(Request $request){
    $request->session()->flush();
    return redirect('/');
  }

  /**
  *host register
  **/
  public function hostRegister(Request $request) {
     try {
      $hpassword =  $request -> input('hpassword');
      $hcpassword = $request -> input('hCPassword');

       if($hpassword == $hcpassword) {
       $host = new Host;
       $host->huid = uniqid();
       $host->horganization_name = $request -> input('horganizationName');
       $host->hemail = $request -> input('horganizationEmail');
       $host->hphone_number = $request -> input('hphoneNumber');
       $host->horganization_type = $request -> input('horganizationType');
       $host->hcountry = $request -> input('hcountry');
       $host->hdistrict = $request -> input('hdistrict');
       $host->haddress = $request -> input('haddress');
       $host->hpassword = $request -> input('hpassword');
       $host->hphoto = "null";
       $host->save();
       return $this->mail->hostLoginVerification($host->huid, $host->hemail);

       } else {
         return redirect('hostRegister');
       }

        } catch (QueryException $e){
          $errorCode = $e->errorInfo[1];
          if($errorCode == 1062){
              return redirect('hostRegister');
          }
        }
  }

  // host login
  public function hostLogin(Request $request) {

        $this->validate($request,[
          'hLUsername' =>'required',
          'hLPassword' =>'required',
        ]);

        $hostEmail = $request->input('hLUsername');
        $hostPassword = $request->input('hLPassword');
        if($hostEmail != null && $hostPassword != null) {
                $host = Host::where(['hemail'=>$hostEmail])->first();
                      //check exist user
                      if($host) {
                              //check verified host
                              if($host->status == "1")
                              {

                                        if($host->hpassword == $hostPassword) {
                                           $request->session()->put('hemail',$hostEmail);
                                            return redirect('/');
                                        }

                                        else {
                                          return redirect('hostLogin'); // password error
                                         }

                                  } else { // status else
                                   Session::flash('hostverify',"Please check your email to verify your account !!");
                                   return redirect('hostLogin');
                                    }

                      } else { //user exist or not check end
                        return redirect('hostLogin'); // not valid username/email
                        }
                      //end else to check existing valid email
          } else { //empty check
           return redirect('hostLogin');// null
          }

  }



  public function testfunction(){
    $data = "Hello Sushil";
   return  $this->mail->test($data);
   // return (new MailController)->test();
  }

}
