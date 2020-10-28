@extends('layouts.master')

@section('mainsection')
    <h3 class="pt-3">Add New Customer</h3>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Personal Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control"  placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control"  placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Display Name</label>
                    <input type="text" class="form-control"  placeholder="Password">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword1">Gender</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="radio"  name="gender" value="0" checked>{{ trans('app.Male')}} &nbsp;&nbsp;
                      <input type="radio" name="gender" value="1" > {{ trans('app.Female')}}
                  </div>


                  <div class="form-group">
                      <label for="exampleInputPassword1">{{ trans('app.Date Of Birth')}}</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                        <input type="text" id="datepicker" class="form-control" placeholder=""  name="dob" value="{{ old('dob') }}" onkeypress="return false;"  />
                      @if ($errors->has('dob'))
                        <span class="help-block">
                            <strong style="margin-left:27%;">{{ $errors->first('dob') }}</strong>
                        </span>
                      @endif
                  </div>


                  <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Email">{{ trans('app.Email') }}</label>
                        <input type="text"  name="email" placeholder="{{ trans('app.Enter Email')}}" value="{{ old('email') }}" class="form-control" maxlength="50">
                        @if ($errors->has('email'))
                        <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                  </div>


                  <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Password">{{ trans('app.Password') }} <label class="text-danger">*</label></label>
                        <input type="password"  name="password" placeholder="{{ trans('app.Enter Password')}}" class="form-control" maxlength="20" required>
                        @if ($errors->has('password'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                  </div>



                  <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12 currency" style="padding-right: 0px;"for="Password">{{ trans('app.Confirm Password') }} <label class="text-danger">*</label></label>
                        <input type="password"  name="password_confirmation" placeholder="{{ trans('app.Enter Confirm Password')}}" class="form-control" maxlength="20" required>
                        @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                  </div>




                  <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="mobile">{{ trans('app.Mobile No') }} <label class="text-danger" >*</label></label>
                        <input type="text"  name="mobile" placeholder="{{ trans('app.Enter Mobile No')}}" value="{{ old('mobile') }}" class="form-control" maxlength="15" required >
                        @if ($errors->has('mobile'))
                        <span class="help-block">
                          <strong>{{ $errors->first('mobile') }}</strong>
                         </span>
                        @endif
                  </div>



                  <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="landline-no">{{ trans('app.Landline No') }} <label class="text-danger">*</label> </label>
                        <input type="text" id="landlineno" name="landlineno" placeholder="{{ trans('app.Enter LandLine No')}}"  value="{{ old('landlineno') }}" maxlength="15" class="form-control">
                        @if ($errors->has('landlineno'))
                        <span class="help-block">
                          <strong>{{ $errors->first('landlineno') }}</strong>
                        </span>
                        @endif
                  </div>


                  <div class="form-group">
                        <label class="control-label" for="image">
                        {{ trans('app.Image')}} </label>
                        <div class="">
                          <input type="file" id="image" name="image" value="{{ old('image') }}" class="form-control " >
                        </div>
                  </div>

                </div>
                <!-- /.card-body -->

               
              </form>
            </div>
            <!-- /.card -->
          </div>




          <div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Address</h3>
              </div>
              <div class="card-body">

                      <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Country">{{ trans('app.Country')}} <label class="text-danger">*</label></label>
                            <select class="form-control  select_country" name="country_id" countryurl="{!! url('/getstatefromcountry') !!}" required>
                            <option value="">{{ trans('app.Select Country')}}</option>
                              <option value=""></option>
                            </select>
                      </div>

                      <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Country">{{ trans('app.Country')}} <label class="text-danger">*</label></label>
                            <select class="form-control  select_country" name="country_id" countryurl="{!! url('/getstatefromcountry') !!}" required>
                            <option value="">{{ trans('app.Select State')}}</option>
                              <option value=""></option>
                            </select>
                      </div>

                      <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Country">{{ trans('app.Country')}} <label class="text-danger">*</label></label>
                            <select class="form-control  select_country" name="country_id" countryurl="{!! url('/getstatefromcountry') !!}" required>
                            <option value="">{{ trans('app.Select City')}}</option>
                              <option value=""></option>
                            </select>
                      </div>

                      <div class="form-group">
                              <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Address">{{ trans('app.Address') }} <label class="text-danger">*</label></label>
                                <textarea class="form-control" id="address" name="address" maxlength="100" required>{{ old('address') }}</textarea>
                      </div>
              </div>

                <div class="card-footer">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                    <input type="submit" class="btn btn-success" name="Submit" value="Submit">
                </div>
              <!-- /.card-body -->
            </div>





           
          
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection