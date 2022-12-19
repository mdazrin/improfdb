<x-layout>
    <x-slot name="content">
        <div class="container">
            <form action="{{ route('profile.update') }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('patch')
                <div class="mb-3 col-sm-3">
                    <img src="{{ (asset($user->image->url))}}" class="img-thumbnail avatar">
                    <input type="file" name="avatar" class="form-control" id="formFile">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" value="{{old('firstname',optional($user ?? null)->firstname) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="lastname" class="form-label">Lastname</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" value="{{old('lastname',optional($user ?? null)->lastname) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="ppi" class="form-label">PPI/TOC</label>
                    <input type="text" name="ppi" class="form-control" id="ppi" value="{{old('ppi',optional($user ?? null)->ppi) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Batch</label>
                    <input type="text" name="batch" class="form-control" id="batch" value="{{old('batch',optional($user ?? null)->batch) }}">
                </div>



                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">IC</label>
                    <input type="text" name="ic" class="form-control" id="ic" value="{{old('batch',optional($user ?? null)->personal->ic) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Mailing Address</label>
                    <input type="text" name="mailing-address" class="form-control" id="mailing-address" value="{{old('batch',optional($user ?? null)->personal->mailing_address) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Date of Birth</label>
                    <input type="text" name="date-of-birth" class="form-control" id="date-of-birth" value="{{old('batch',optional($user ?? null)->personal->date_of_birth) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Tel No</label>
                    <input type="text" name="tel-no" class="form-control" id="tel-no" value="{{old('batch',optional($user ?? null)->personal->tel_no) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Bank Account</label>
                    <input type="text" name="bank-account" class="form-control" id="bank-account" value="{{old('batch',optional($user ?? null)->personal->bank_account) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Bank Name</label>
                    <input type="text" name="bank-name" class="form-control" id="bank-name" value="{{old('batch',optional($user ?? null)->personal->bank_name) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Sex</label>
                    <input type="text" name="sex" class="form-control" id="sex" value="{{old('batch',optional($user ?? null)->personal->sex) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Birthday Month</label>
                    <input type="text" name="birthday-month" class="form-control" id="birthday-month" value="{{old('batch',optional($user ?? null)->personal->birthday_month) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Facebook</label>
                    <input type="text" name="facebook" class="form-control" id="facebook" value="{{old('batch',optional($user ?? null)->personal->facebook) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Twitter</label>
                    <input type="text" name="twitter" class="form-control" id="twitter" value="{{old('batch',optional($user ?? null)->personal->twitter) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Instagram</label>
                    <input type="text" name="instagram" class="form-control" id="instagram" value="{{old('batch',optional($user ?? null)->personal->instagram) }}">
                </div>

                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Pas No</label>
                    <input type="text" name="pas-no" class="form-control" id="pas-no" value="{{old('batch',optional($user ?? null)->pas->pas_no) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Involvement</label>
                    <input type="text" name="involvement" class="form-control" id="involvement" value="{{old('batch',optional($user ?? null)->pas->involvement) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Cawangan</label>
                    <input type="text" name="cawangan" class="form-control" id="cawangan" value="{{old('batch',optional($user ?? null)->pas->cawangan) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Kawasan</label>
                    <input type="text" name="kawasan" class="form-control" id="kawasan" value="{{old('batch',optional($user ?? null)->pas->kawasan) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Negeri</label>
                    <input type="text" name="negeri" class="form-control" id="negeri" value="{{old('batch',optional($user ?? null)->pas->negeri) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">First Interest</label>
                    <input type="text" name="interest-one" class="form-control" id="interest-one" value="{{old('batch',optional($user ?? null)->pas->interest_one) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Second Interest</label>
                    <input type="text" name="interest-two" class="form-control" id="interest-two" value="{{old('batch',optional($user ?? null)->pas->interest_two) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Third Interest</label>
                    <input type="text" name="interest-three" class="form-control" id="interest-three" value="{{old('batch',optional($user ?? null)->pas->interest_three) }}">
                </div>

                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Employer</label>
                    <input type="text" name="employer" class="form-control" id="employer" value="{{old('batch',optional($user ?? null)->profession->employer) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Field Of Work</label>
                    <input type="text" name="field-of-work" class="form-control" id="field-of-work" value="{{old('batch',optional($user ?? null)->profession->field_of_work) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Occupation</label>
                    <input type="text" name="occupation" class="form-control" id="occupation" value="{{old('batch',optional($user ?? null)->profession->occupation) }}">
                </div>

                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Course</label>
                    <input type="text" name="course" class="form-control" id="course" value="{{old('batch',optional($user ?? null)->academic->course) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Intake</label>
                    <input type="text" name="intake" class="form-control" id="intake" value="{{old('batch',optional($user ?? null)->academic->intake) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Grade Year</label>
                    <input type="text" name="grade-year" class="form-control" id="grade-year" value="{{old('batch',optional($user ?? null)->academic->grade_year) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Academic level</label>
                    <input type="text" name="academic-level" class="form-control" id="academic-level" value="{{old('batch',optional($user ?? null)->academic->academic_level) }}">
                </div>

                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Current Address</label>
                    <input type="text" name="current-address" class="form-control" id="current-address" value="{{old('batch',optional($user ?? null)->location->current_address) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Zon</label>
                    <input type="text" name="zon" class="form-control" id="zon" value="{{old('batch',optional($user ?? null)->location->zon) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">State</label>
                    <input type="text" name="state" class="form-control" id="state" value="{{old('batch',optional($user ?? null)->location->state) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">District</label>
                    <input type="text" name="district" class="form-control" id="district" value="{{old('batch',optional($user ?? null)->location->district) }}">
                </div>





                <div class="d-grid col-sm-3">
                    <button class="btn btn-primary">Update</button>
                </div>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                @endif
            </form>
        </div>
    </x-slot>
</x-layout>
