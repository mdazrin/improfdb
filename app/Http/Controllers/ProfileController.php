<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        //validate data
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'ppi' => 'required|integer',
            'batch' => 'required',
            'avatar' => 'image',
        ]);


        //save data
        DB::table('users')
            ->where('id',$request->user()->id)
            ->update([
                'firstname'=>$request->input('firstname'),
                'lastname'=>$request->input('lastname'),
                'ppi'=>$request->input('ppi'),
                'batch'=>$request->input('batch'),
            ]);

        DB::table('personal_infos')
            ->where('user_id',$request->user()->id)
            ->update([
                'ic'=>$request->input('ic'),
                'mailing_address'=>$request->input('mailing-address'),
                'date_of_birth'=>$request->input('date-of-birth'),
                'tel_no'=>$request->input('tel-no'),
                'bank_account'=>$request->input('bank-account'),
                'bank_name'=>$request->input('bank-name'),
                'sex'=>$request->input('sex'),
                'birthday_month'=>$request->input('birthday-month'),
                'facebook'=>$request->input('facebook'),
                'twitter'=>$request->input('twitter'),
                'instagram'=>$request->input('instagram'),
            ]);

        DB::table('pas')
            ->where('user_id',$request->user()->id)
            ->update([
                'pas_no'=>$request->input('pas-no'),
                'involvement'=>$request->input('involvement'),
                'cawangan'=>$request->input('cawangan'),
                'kawasan'=>$request->input('kawasan'),
                'negeri'=>$request->input('negeri'),
                'interest_one'=>$request->input('first-interest'),
                'interest_two'=>$request->input('second-interest'),
                'interest_three'=>$request->input('third-interest'),
            ]);

        DB::table('professions')
            ->where('user_id',$request->user()->id)
            ->update([
                'employer'=>$request->input('ic'),
                'field_of_work'=>$request->input('mailing-address'),
                'occupation'=>$request->input('date-of-birth'),
            ]);

        DB::table('academics')
            ->where('user_id',$request->user()->id)
            ->update([
                'course'=>$request->input('course'),
                'intake'=>$request->input('intake'),
                'grade_year'=>$request->input('grade-year'),
                'academic_level'=>$request->input('academic-level'),
            ]);

        DB::table('locations')
            ->where('user_id',$request->user()->id)
            ->update([
                'current_address'=>$request->input('course'),
                'zon'=>$request->input('intake'),
                'state'=>$request->input('grade-year'),
                'district'=>$request->input('academic-level'),
            ]);



        //save picture
        $image = $request->user()->image;
        if ($request->hasFile('avatar'))
        {
            $path = $request->file('avatar')->store('images');
            $image->url = $path;
            $image->save();
        }

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
