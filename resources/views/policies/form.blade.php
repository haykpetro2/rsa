<div class="box box-primary">
    @if($errors->has())
        @foreach ($errors->all() as $error)
            <div class="error">{{ $error }}</div>
        @endforeach
    @endif
    <div class="form-inputs">
        {!! Form::hidden('id') !!}
        {!! Form::hidden('images', null, ['id' => 'policy_images']) !!}
        {!! Form::hidden('files', null, ['id' => 'policy_files']) !!}
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 {{ ($errors->first('company_id')) ? 'has-error'  :''}}">
                    {!! Form::label('company_name', trans('policy.Company'), array('class'=>'control-label')) !!}
                    {!! Form::select('company_name', $companies, null, array('class' => 'select2-tags form-control')) !!}
                </div>
                <div class="col-md-3 required-group {{ ($errors->first('time_from')) ? 'has-error'  :''}}">
                    {!! Form::label('time_from', trans('policy.Time from'), array('class'=>'control-label')) !!}
                    {!! Form::text('time_from', null, array('class' => 'form-control clockpicker')) !!}
                </div>
                <div class="col-md-3 required-group {{ ($errors->first('date_from')) ? 'has-error'  :''}}">
                    {!! Form::label('date_from', trans('policy.Date from'), array('class'=>'control-label')) !!}
                    {!! Form::text('date_from', null, array('class' => 'form-control datepicker')) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-6">
                    {!! Form::hidden('time_to') !!}
                </div>
                <div class="col-md-3 required-group {{ ($errors->first('date_to')) ? 'has-error'  :''}}">
                    {!! Form::label('date_to', trans('policy.Date to'), array('class'=>'control-label')) !!}
                    {!! Form::text('date_to', null, array('class' => 'form-control datepicker')) !!}
                </div>
            </div>

            <fieldset id="client_fields">
                {!! Form::hidden('client[id]', null, ['id'=>'client[id]']) !!}
                <legend>{{trans('policy.Client data')}}</legend>

                <div class="row">
                    <div class="form-control no-border">
                        <label for="client_is_company">
                            {!! Form::hidden('client[is_company]',0) !!}
                            {!! Form::checkbox('client[is_company]', 1, null, ['id'=>'client_is_company']) !!} {{trans('policy.Client company')}}
                        </label>
                    </div>
                </div>

                <div class="row client-not-company">
                    <div class="col-md-4 required-group {{ ($errors->first('client.last_name')) ? 'has-error'  :''}}">
                        {!! Form::label('client[last_name]', trans('client.Last name'), array('class'=>'control-label')) !!}
                        {!! Form::text('client[last_name]', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('client.first_name')) ? 'has-error'  :''}}">
                        {!! Form::label('client[first_name]', trans('client.First name'), array('class'=>'control-label')) !!}
                        {!! Form::text('client[first_name]', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('client.middle_name')) ? 'has-error'  :''}}">
                        {!! Form::label('client[middle_name]', trans('client.Middle name'), array('class'=>'control-label')) !!}
                        {!! Form::text('client[middle_name]', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row client-not-company">
                    <div class="col-md-4 required-group {{ ($errors->first('client.date_birth')) ? 'has-error'  :''}}">
                        {!! Form::label('client[date_birth]', trans('client.Date of Birth'), array('class'=>'control-label')) !!}
                        {!! Form::text('client[date_birth]', null, array('class' => 'form-control date-mask')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('client.passport_serial')) ? 'has-error'  :''}}">
                        {!! Form::label('client[passport_serial]', trans('client.Passport serial'), array('class'=>'control-label')) !!}
                        {!! Form::text('client[passport_serial]', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('client.passport_number')) ? 'has-error'  :''}}">
                        {!! Form::label('client[passport_number]', trans('client.Passport number'), array('class'=>'control-label')) !!}
                        {!! Form::text('client[passport_number]', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row client-is-company">
                    <div class="col-md-8 required-group {{ ($errors->first('client.company_name')) ? 'has-error'  :''}}">
                        {!! Form::label('client[company_name]', trans('policy.Company name'), array('class'=>'control-label')) !!}
                        {!! Form::text('client[company_name]', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('client.company_inn')) ? 'has-error'  :''}}">
                        {!! Form::label('client[company_inn]', trans('policy.Company inn'), array('class'=>'control-label')) !!}
                        {!! Form::text('client[company_inn]', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 required-group {{ ($errors->first('client.full_address')) ? 'has-error'  :''}}">
                        {!! Form::label('client[full_address]', trans('client.Address'), array('class'=>'control-label')) !!}
                        {!! Form::hidden('client[full_address_json]', null, ['id'=>'client[full_address_json]']) !!}
                        {!! Form::text('client[full_address]', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 required-group {{ ($errors->first('client.cell_phone')) ? 'has-error'  :''}}">
                        {!! Form::label('client[cell_phone]', trans('client.Cell phone'), array('class'=>'control-label')) !!}
                        <div class="input-group ">
                            <span class="input-group-addon">+7</span>
                            {!! Form::text('client[cell_phone]', null, array('class' => 'form-control phone-mask')) !!}
                        </div>
                    </div>
                    <div class="col-md-6 {{ ($errors->first('client.email')) ? 'has-error'  :''}}">
                        {!! Form::label('client[email]', trans('client.Email'), array('class'=>'control-label')) !!}
                        {!! Form::text('client[email]', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 {{ ($errors->first('client.notes')) ? 'has-error'  :''}}">
                        {!! Form::label('client[notes]', trans('client.Notes'), array('class'=>'control-label')) !!}
                        {!! Form::text('client[notes]', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </fieldset>

            <div class="row">
                <label class="control-label">&nbsp;</label>
                <div class="form-control no-border">
                    <label for="owner_company">
                        {!! Form::hidden('owner_company',0) !!}
                        {!! Form::checkbox('owner_company', 1, null, ['id'=>'owner_company']) !!} {{trans('policy.Owner company')}}
                    </label>
                </div>
            </div>
            
            <div class="row">
                <label class="control-label">&nbsp;</label>
                <div class="form-control no-border">
                    <label for="same_client_owner">
                        {!! Form::hidden('same_client_owner',0) !!}
                        {!! Form::checkbox('same_client_owner', 1, null, ['id'=>'same_client_owner']) !!} {{trans('policy.Same client and owner')}}
                    </label>
                </div>
            </div>

            <br/>

            <fieldset id="owner_fields">
                <legend>{{trans('policy.Owner data')}}</legend>
                <div class="row owner-not-company">
                    <div class="col-md-4 required-group {{ ($errors->first('last_name')) ? 'has-error'  :''}}">
                        {!! Form::label('last_name', trans('client.Last name'), array('class'=>'control-label')) !!}
                        {!! Form::text('last_name', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('first_name')) ? 'has-error'  :''}}">
                        {!! Form::label('first_name', trans('client.First name'), array('class'=>'control-label')) !!}
                        {!! Form::text('first_name', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('middle_name')) ? 'has-error'  :''}}">
                        {!! Form::label('middle_name', trans('client.Middle name'), array('class'=>'control-label')) !!}
                        {!! Form::text('middle_name', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row owner-not-company">
                    <div class="col-md-4 required-group {{ ($errors->first('date_birth')) ? 'has-error'  :''}}">
                        {!! Form::label('date_birth', trans('client.Date of Birth'), array('class'=>'control-label')) !!}
                        {!! Form::text('date_birth', null, array('class' => 'form-control date-mask')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('passport_serial')) ? 'has-error'  :''}}">
                        {!! Form::label('passport_serial', trans('client.Passport serial'), array('class'=>'control-label')) !!}
                        {!! Form::text('passport_serial', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('passport_number')) ? 'has-error'  :''}}">
                        {!! Form::label('passport_number', trans('client.Passport number'), array('class'=>'control-label')) !!}
                        {!! Form::text('passport_number', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row owner-is-company">
                    <div class="col-md-8 required-group {{ ($errors->first('owner_company_name')) ? 'has-error'  :''}}">
                        {!! Form::label('owner_company_name', trans('policy.Company name'), array('class'=>'control-label')) !!}
                        {!! Form::text('owner_company_name', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('owner_company_inn')) ? 'has-error'  :''}}">
                        {!! Form::label('owner_company_inn', trans('policy.Company inn'), array('class'=>'control-label')) !!}
                        {!! Form::text('owner_company_inn', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 required-group {{ ($errors->first('full_address')) ? 'has-error'  :''}}">
                        {!! Form::label('full_address', trans('client.Address'), array('class'=>'control-label')) !!}
                        {!! Form::hidden('full_address_json', null, ['id'=>'full_address_json']) !!}
                        {!! Form::text('full_address', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 required-group {{ ($errors->first('cell_phone')) ? 'has-error'  :''}}">
                        {!! Form::label('cell_phone', trans('client.Cell phone'), array('class'=>'control-label')) !!}
                        <div class="input-group ">
                            <span class="input-group-addon">+7</span>
                            {!! Form::text('cell_phone', null, array('class' => 'form-control phone-mask')) !!}
                        </div>
                    </div>
                    <div class="col-md-6 {{ ($errors->first('email')) ? 'has-error'  :''}}">
                        {!! Form::label('email', trans('client.Email'), array('class'=>'control-label')) !!}
                        {!! Form::text('email', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 {{ ($errors->first('notes')) ? 'has-error'  :''}}">
                        {!! Form::label('notes', trans('client.Notes'), array('class'=>'control-label')) !!}
                        {!! Form::text('notes', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </fieldset>

            <br/>

            <fieldset id="vehicle_fields">
                <legend>{{trans('vehicle.Vehicle data')}}</legend>
                <div class="row">
                    <div class="col-md-9">
                        <label for="vehicle_selector" class="control-lable">{{trans('vehicle.Select Vehicle')}}</label>
                        <select name="vehicle[id]" id="vehicle_selector" class="select2 form-control" data-placeholder="{{trans('vehicle.New Vehicle')}}">
                            <option value=" "> </option>
                            @foreach ($vehicles as $vehicle)
                                <option value="{{$vehicle->id}}" @if(!empty($policy->vehicle) && $vehicle->id == old('vehicle[id]', $policy->vehicle->id)) selected="selected" @endif data-json="{{$vehicle->toJson()}}">{{$vehicle->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="control-label">&nbsp;</label>
                        <button type="button" name="add_vehicle" id="add_vehicle" class="form-control btn btn-success">{{trans('vehicle.Add Vehicle')}}</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 required-group {{ ($errors->first('vehicle.type')) ? 'has-error'  :''}}">
                        {!! Form::label('vehicle[type]', trans('vehicle.Type'), array('class'=>'control-label')) !!}
                        <select name="vehicle[type]" id="vehicle[type]" class="select2 form-control" data-placeholder="{{trans('vehicle.Type')}}">
                            <option value=" " data-base="0"> </option>
                            <option value="1" data-base="4118.00|3432.00" @if(old('vehicle.type', !empty($policy->vehicle)?$policy->vehicle->type:null) == '1') selected="selected" @endif>{{trans('vehicle.Type 1')}}</option>
                            <option value="2" data-base="6166.00|5138.00" @if(old('vehicle.type', !empty($policy->vehicle)?$policy->vehicle->type:null) == '2') selected="selected" @endif>{{trans('vehicle.Type 2')}}</option>
                            <option value="3" data-base="6166.00|5138.00" @if(old('vehicle.type', !empty($policy->vehicle)?$policy->vehicle->type:null) == '3') selected="selected" @endif>{{trans('vehicle.Type 3')}}</option>
                            <option value="4" data-base="4211.00|3509.00" @if(old('vehicle.type', !empty($policy->vehicle)?$policy->vehicle->type:null) == '4') selected="selected" @endif>{{trans('vehicle.Type 4')}}</option>
                            <option value="5" data-base="3370.00|2808.00" @if(old('vehicle.type', !empty($policy->vehicle)?$policy->vehicle->type:null) == '5') selected="selected" @endif>{{trans('vehicle.Type 5')}}</option>
                            <option value="6" data-base="4211.00|3509.00" @if(old('vehicle.type', !empty($policy->vehicle)?$policy->vehicle->type:null) == '6') selected="selected" @endif>{{trans('vehicle.Type 6')}}</option>
                            <option value="7" data-base="6341.00|5284.00" @if(old('vehicle.type', !empty($policy->vehicle)?$policy->vehicle->type:null) == '7') selected="selected" @endif>{{trans('vehicle.Type 7')}}</option>
                            <option value="8" data-base="1579.00|867.00" @if(old('vehicle.type', !empty($policy->vehicle)?$policy->vehicle->type:null) == '8') selected="selected" @endif>{{trans('vehicle.Type 8')}}</option>
                            <option value="9" data-base="1579.00|1124.00" @if(old('vehicle.type', !empty($policy->vehicle)?$policy->vehicle->type:null) == '9') selected="selected" @endif>{{trans('vehicle.Type 9')}}</option>
                            <option value="10" data-base="2101.00|1751.00" @if(old('vehicle.type', !empty($policy->vehicle)?$policy->vehicle->type:null) == '10') selected="selected" @endif>{{trans('vehicle.Type 10')}}</option>
                            <option value="11" data-base="3370.00|2808.00" @if(old('vehicle.type', !empty($policy->vehicle)?$policy->vehicle->type:null) == '11') selected="selected" @endif>{{trans('vehicle.Type 11')}}</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        {!! Form::label('vehicle[base]', trans('policy.Base'), array('class'=>'control-label')) !!}
                        <select name="vehicle[base]" id="vehicle[base]" class="select2 form-control" data-placeholder="{{trans('policy.Base')}}">
                            <option value="4118.00">4118.00</option>
                            <option value="3432.00">3432.00</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 required-group {{ ($errors->first('vehicle.make')) ? 'has-error'  :''}}">
                        {!! Form::label('vehicle[make]', trans('vehicle.Make'), array('class'=>'control-label')) !!}
                        {!! Form::select('vehicle[make]', $makers, null, array('class' => 'select2-tags form-control', 'placeholder' => trans('vehicle.Make'))) !!}
                    </div>
                    <div class="col-md-2 required-group {{ ($errors->first('vehicle.model')) ? 'has-error'  :''}}">
                        {!! Form::label('vehicle[model]', trans('vehicle.Model'), array('class'=>'control-label')) !!}
                        {!! Form::text('vehicle[model]', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-2 required-group {{ ($errors->first('vehicle.year')) ? 'has-error'  :''}}">
                        {!! Form::label('vehicle[year]', trans('vehicle.Year'), array('class'=>'control-label')) !!}
                        {!! Form::text('vehicle[year]', null, array('class' => 'form-control year-mask')) !!}
                    </div>
                    <div class="col-md-2 required-group {{ ($errors->first('vehicle.power')) ? 'has-error'  :''}}">
                        {!! Form::label('vehicle[power]', trans('vehicle.Power'), array('class'=>'control-label')) !!}
                        {!! Form::text('vehicle[power]', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-2">
                        <label class="control-label">&nbsp;</label>
                        <div class="form-control no-border">
                            <label for="vehicle[trailer]">
                                {!! Form::hidden('vehicle[trailer]',0) !!}
                                {!! Form::checkbox('vehicle[trailer]', 1, null, ['id'=>'vehicle[trailer]']) !!} {{trans('vehicle.Trailer')}}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 {{ ($errors->first('vehicle.sign')) ? 'has-error'  :''}}">
                        {!! Form::label('vehicle[sign]', trans('vehicle.Sign'), array('class'=>'control-label')) !!}
                        {!! Form::text('vehicle[sign]', null, array('class' => 'form-control sign-mask')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('vehicle.vin')) ? 'has-error'  :''}}">
                        {!! Form::label('vehicle[vin]', trans('vehicle.Vin'), array('class'=>'control-label')) !!}
                        {!! Form::text('vehicle[vin]', null, array('class' => 'form-control vin-mask')) !!}
                    </div>
                    <div class="col-md-2 required-group {{ ($errors->first('vehicle.document_name')) ? 'has-error'  :''}}">
                        {!! Form::label('vehicle[document_name]', trans('vehicle.Document name'), array('class'=>'control-label')) !!}
                        {!! Form::select('vehicle[document_name]', array(' '=>' ',trans('vehicle.Document PTS')=>trans('vehicle.Document PTS'),trans('vehicle.Document STS')=>trans('vehicle.Document STS')), null, array('class' => 'select2 form-control')) !!}
                    </div>
                    <div class="col-md-2 required-group {{ ($errors->first('vehicle.document_serial')) ? 'has-error'  :''}}">
                        {!! Form::label('vehicle[document_serial]', trans('vehicle.Document serial'), array('class'=>'control-label')) !!}
                        {!! Form::text('vehicle[document_serial]', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-2 required-group {{ ($errors->first('vehicle.document_number')) ? 'has-error'  :''}}">
                        {!! Form::label('vehicle[document_number]', trans('vehicle.Document number'), array('class'=>'control-label')) !!}
                        {!! Form::text('vehicle[document_number]', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 {{ ($errors->first('vehicle.dk_number')) ? 'has-error'  :''}}">
                        {!! Form::label('vehicle[dk_number]', trans('vehicle.DK Number'), array('class'=>'control-label')) !!}
                        {!! Form::text('vehicle[dk_number]', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 {{ ($errors->first('vehicle.dk_date')) ? 'has-error'  :''}}">
                        {!! Form::label('vehicle[dk_date]', trans('vehicle.DK Date'), array('class'=>'control-label')) !!}
                        {!! Form::text('vehicle[dk_date]', null, array('class' => 'form-control date-mask')) !!}
                    </div>
                </div>
            </fieldset>

            <div class="row">
                <label class="control-label">&nbsp;</label>
                <div class="form-control no-border">
                    <label for="unrestricted">
                        {!! Form::hidden('unrestricted',0) !!}
                        {!! Form::checkbox('unrestricted', 1, null, ['id'=>'unrestricted']) !!} {{trans('policy.Unrestricted')}}
                    </label>
                </div>
            </div>

            <br/>

            <fieldset id="drivers_fields">
                <legend>{{trans('policy.Drivers data')}}</legend>
                <div class="row padding-b-5">
                    <div class="col-md-11 {{ ($errors->first('driver_type')) ? 'has-error'  :''}}">
                        {!! Form::label('driver_type', trans('policy.Driver type'), array('class'=>'control-label')) !!}
                        <select name="driver_type" id="driver_type" class="select2 form-control" data-placeholder="{{trans('policy.Driver type 0')}}">
                            <option value=""> </option>
                            <option value="1.80" @if(!empty($policy->driver_type) && old('driver_type', $policy->driver_type) == '1.8') selected="selected" @endif>{{trans('policy.Driver type 1')}}</option>
                            <option value="1.70" @if(!empty($policy->driver_type) && old('driver_type', $policy->driver_type) == '1.7') selected="selected" @endif>{{trans('policy.Driver type 2')}}</option>
                            <option value="1.60" @if(!empty($policy->driver_type) && old('driver_type', $policy->driver_type) == '1.6') selected="selected" @endif>{{trans('policy.Driver type 3')}}</option>
                            <option value="1.00" @if(!empty($policy->driver_type) && old('driver_type', $policy->driver_type) == '1.0') selected="selected" @endif>{{trans('policy.Driver type 4')}}</option>
                        </select>
                    </div>
                </div>
                <div class="row padding-b-5">
                    <div class="col-md-11">
                        <div class="form-control no-border">
                            <label for="first_driver_client">
                                <input id="driver_client_owner" name="driver_client_owner" type="checkbox" value="1"> {{trans('policy.Driver is client or owner')}}
                            </label>
                        </div>
                    </div>
                </div>
                @for ($i = 0; $i < 4; $i++)
                <div class="row padding-b-5 padding-t-5">
                    {!! Form::hidden('drivers['.$i.'][id]', null, ['id'=>'drivers['.$i.'][id]']) !!}
                    <div class="col-md-4 {{ ($errors->first('drivers.'.$i.'.name')) ? 'has-error'  :''}}">
                        {!! Form::text('drivers['.$i.'][name]', null, array('class' => 'form-control pad-sm driver_name', 'id' => 'drivers['.$i.'][name]', 'placeholder'=>trans('client.Full name'))) !!}
                    </div>
                    <div class="col-md-2 {{ ($errors->first('drivers.'.$i.'.date_birth')) ? 'has-error'  :''}}">
                        {!! Form::text('drivers['.$i.'][date_birth]', null, array('class' => 'form-control pad-sm date-mask', 'id' => 'drivers['.$i.'][date_birth]', 'placeholder'=>trans('client.Date of Birth'))) !!}
                    </div>
                    <div class="col-md-1 {{ ($errors->first('drivers.'.$i.'.kbm')) ? 'has-error'  :''}}">
                        {!! Form::text('drivers['.$i.'][kbm]', null, array('class' => 'form-control pad-sm driver_kbm coef-mask', 'id' => 'drivers['.$i.'][kbm]', 'placeholder'=>trans('client.Ratio'))) !!}
                    </div>
                    <div class="col-md-2 {{ ($errors->first('drivers.'.$i.'.exp')) ? 'has-error'  :''}}">
                        {!! Form::text('drivers['.$i.'][exp]', null, array('class' => 'form-control pad-sm', 'id' => 'drivers['.$i.'][exp]', 'placeholder'=>trans('client.Driving experience'))) !!}
                    </div>
                    <div class="col-md-2 {{ ($errors->first('drivers.'.$i.'.driver_license')) ? 'has-error'  :''}}">
                        {!! Form::text('drivers['.$i.'][driver_license]', null, array('class' => 'form-control pad-sm dl-mask', 'id' => 'drivers['.$i.'][driver_license]', 'placeholder'=>trans('client.Driver license'))) !!}
                    </div>
                    <div class="col-md-1">
                        <a href="javascript:undefined;" data-driver-index="{{$i}}" class="driver-clear btn btn-default" data-toggle="tooltip" title="{{trans('vehicle.Clear Driver')}}"><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
                @endfor
                <div class="row">
                    <div class="col-md-12"><a href="http://dkbm-web.autoins.ru/dkbm-web-1.0/kbm.htm" target="_blank"><i class="fa fa-search"></i> {{trans('general.Search KBM')}}</a></div>
                </div>
            </fieldset>

            <br/>

            <fieldset id="calc_fields">
                <legend>{{trans('policy.Calc data')}}</legend>
                    <div class="row">
                        <div class="col-md-2 {{ ($errors->first('p_base')) ? 'has-error'  :''}}">
                            {!! Form::text('p_base', null, array('id' => 'p_base', 'class' => 'form-control pad-sm', 'data-toggle' => 'tooltip', 'title' => trans('policy.Base Tariff'))) !!}
                        </div>
                        <div class="col-md-1 {{ ($errors->first('p_k1')) ? 'has-error'  :''}}">
                            {!! Form::text('p_k1', null, array('id' => 'p_k1', 'class' => 'form-control pad-sm coef-mask', 'data-toggle' => 'tooltip', 'title'=>trans('policy.Coefficient 1'))) !!}
                        </div>
                        <div class="col-md-1 {{ ($errors->first('p_k2')) ? 'has-error'  :''}}">
                            {!! Form::text('p_k2', null, array('id' => 'p_k2', 'class' => 'form-control pad-sm coef-mask', 'data-toggle' => 'tooltip', 'title'=>trans('policy.Coefficient 2'))) !!}
                        </div>
                        <div class="col-md-1 {{ ($errors->first('p_k3')) ? 'has-error'  :''}}">
                            {!! Form::text('p_k3', null, array('id' => 'p_k3', 'class' => 'form-control pad-sm coef-mask', 'data-toggle' => 'tooltip', 'title'=>trans('policy.Coefficient 3'))) !!}
                        </div>
                        <div class="col-md-1 {{ ($errors->first('p_k4')) ? 'has-error'  :''}}">
                            {!! Form::text('p_k4', null, array('id' => 'p_k4', 'class' => 'form-control pad-sm coef-mask', 'data-toggle' => 'tooltip', 'title'=>trans('policy.Coefficient 4'))) !!}
                        </div>
                        <div class="col-md-1 {{ ($errors->first('p_k5')) ? 'has-error'  :''}}">
                            {!! Form::text('p_k5', null, array('id' => 'p_k5', 'class' => 'form-control pad-sm coef-mask', 'data-toggle' => 'tooltip', 'title'=>trans('policy.Coefficient 5'))) !!}
                        </div>
                        <div class="col-md-1 {{ ($errors->first('p_k6')) ? 'has-error'  :''}}">
                            {!! Form::text('p_k6', null, array('id' => 'p_k6', 'class' => 'form-control pad-sm coef-mask', 'data-toggle' => 'tooltip', 'title'=>trans('policy.Coefficient 6'))) !!}
                        </div>
                        <div class="col-md-1 {{ ($errors->first('p_k7')) ? 'has-error'  :''}}">
                            {!! Form::text('p_k7', null, array('id' => 'p_k7', 'class' => 'form-control pad-sm coef-mask', 'data-toggle' => 'tooltip', 'title'=>trans('policy.Coefficient 7'))) !!}
                        </div>
                        <div class="col-md-1 {{ ($errors->first('p_k8')) ? 'has-error'  :''}}">
                            {!! Form::text('p_k8', null, array('id' => 'p_k8', 'class' => 'form-control pad-sm coef-mask', 'data-toggle' => 'tooltip', 'title'=>trans('policy.Coefficient 8'))) !!}
                        </div>
                        <div class="col-md-2 {{ ($errors->first('p_total')) ? 'has-error'  :''}}">
                            {!! Form::text('p_total', null, array('id' => 'p_total', 'class' => 'form-control pad-sm', 'data-toggle' => 'tooltip', 'title'=>trans('policy.Total Amount'))) !!}
                        </div>
                    </div>
            </fieldset>

            <br/>

            <fieldset id="number_fields">
                <legend>{{trans('policy.Number data')}}</legend>
                <div class="row">
                    <div class="col-md-4 required-group {{ ($errors->first('policy_serial')) ? 'has-error'  :''}}">
                        {!! Form::label('policy_serial', trans('policy.Policy serial'), array('class'=>'control-label')) !!}
                        {!! Form::text('policy_serial', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('policy_number')) ? 'has-error'  :''}}">
                        {!! Form::label('policy_number', trans('policy.Policy number'), array('class'=>'control-label')) !!}
                        {!! Form::text('policy_number', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 required-group {{ ($errors->first('receipt_number')) ? 'has-error'  :''}}">
                        {!! Form::label('receipt_number', trans('policy.Receipt number'), array('class'=>'control-label')) !!}
                        {!! Form::text('receipt_number', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </fieldset>

            <br/>

            <fieldset id="number_fields">
                <legend>{{trans('policy.Additional service')}}</legend>
                <div class="row">
                    <div class="col-md-4 {{ ($errors->first('t_amount')) ? 'has-error'  :''}}">
                        {!! Form::label('t_amount', trans('policy.TO price'), array('class'=>'control-label')) !!}
                        {!! Form::text('t_amount', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 {{ ($errors->first('f_amount')) ? 'has-error'  :''}}">
                        {!! Form::label('f_amount', trans('policy.File price'), array('class'=>'control-label')) !!}
                        {!! Form::text('f_amount', null, array('class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-4 {{ ($errors->first('agent_name')) ? 'has-error'  :''}}">
                        {!! Form::label('agent_name', trans('policy.Agent'), array('class'=>'control-label')) !!}
                        {!! Form::text('agent_name', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
            </fieldset>

            <br/>

            <div class="row">
                <div class="col-md-3 pull-right required-group {{ ($errors->first('sign_date')) ? 'has-error'  :''}}">
                    {!! Form::label('sign_date', trans('policy.Sign Date'), array('class'=>'control-label')) !!}
                    {!! Form::text('sign_date', null, array('class' => 'form-control datepicker')) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="box-footer">
        <div class="form-group">
            <div class='col-sm-offset-3 col-sm-9'>
                <button name="submit" type="submit" class="btn btn-lg btn-success">
                    <i class="fa fa-floppy-o fa-fw"></i> {{trans('general.Save')}}
                </button>
                <a class="btn btn-lg btn-default" href="{{ action('PoliciesController@index') }}">{{trans('general.Cancel')}}</a>
            </div>
        </div>
    </div>
</div>