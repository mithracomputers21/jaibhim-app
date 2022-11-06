@extends('layouts.web')
@section('content')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="padding-top:70px;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/banner.jpg" class="d-block w-100" alt="banner1">
      </div>
      <div class="carousel-item">
        <img src="assets/img/banner.jpg" class="d-block w-100" alt="banner2">
      </div>
      <div class="carousel-item">
        <img src="assets/img/banner.jpg" class="d-block w-100" alt="banner3">
      </div>
    </div>
  </div>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>அம்பேத்கரிய தூதுவராக இணைய</h2>
          <!-- <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p> -->
        </div>

        <div class="row mt-1 justify-content-center">

          <!-- <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
              </div>
            </div>

          </div>

        </div> -->

        <div class="row mt-1 justify-content-center">
          <div class="col-lg-10">
          <form method="POST" action="{{ route("admin.members.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required">{{ trans('cruds.member.fields.category') }}</label>
                <select class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category" id="category" required>
                    <option value disabled {{ old('category', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Member::CATEGORY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('category', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.member.fields.type') }}</label>
                <select class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type" required>
                    <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Member::TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('type', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.member.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.member.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone">{{ trans('cruds.member.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.member.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address') }}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reference_number">{{ trans('cruds.member.fields.reference_number') }}</label>
                <input class="form-control {{ $errors->has('reference_number') ? 'is-invalid' : '' }}" type="text" name="reference_number" id="reference_number" value="{{ old('reference_number', '') }}">
                @if($errors->has('reference_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reference_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.reference_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.member.fields.payment_method') }}</label>
                <select class="form-control {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" name="payment_method" id="payment_method">
                    <option value disabled {{ old('payment_method', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Member::PAYMENT_METHOD_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('payment_method', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_method'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_method') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.payment_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="payment_date">{{ trans('cruds.member.fields.payment_date') }}</label>
                <input class="form-control date {{ $errors->has('payment_date') ? 'is-invalid' : '' }}" type="text" name="payment_date" id="payment_date" value="{{ old('payment_date') }}" required>
                @if($errors->has('payment_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.payment_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount">{{ trans('cruds.member.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="text" name="amount" id="amount" value="{{ old('amount', '') }}" required>
                @if($errors->has('amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="receipt_photo">{{ trans('cruds.member.fields.receipt_photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('receipt_photo') ? 'is-invalid' : '' }}" id="receipt_photo-dropzone">
                </div>
                @if($errors->has('receipt_photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('receipt_photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.receipt_photo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="district_id">{{ trans('cruds.member.fields.district') }}</label>
                <select class="form-control select2 {{ $errors->has('district') ? 'is-invalid' : '' }}" name="district_id" id="district_id">
                    @foreach($districts as $id => $entry)
                        <option value="{{ $id }}" {{ old('district_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('district'))
                    <div class="invalid-feedback">
                        {{ $errors->first('district') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.district_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="block_id">{{ trans('cruds.member.fields.block') }}</label>
                <select class="form-control select2 {{ $errors->has('block') ? 'is-invalid' : '' }}" name="block_id" id="block_id">
                    @foreach($blocks as $id => $entry)
                        <option value="{{ $id }}" {{ old('block_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('block'))
                    <div class="invalid-feedback">
                        {{ $errors->first('block') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.block_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="panchayat_id">{{ trans('cruds.member.fields.panchayat') }}</label>
                <select class="form-control select2 {{ $errors->has('panchayat') ? 'is-invalid' : '' }}" name="panchayat_id" id="panchayat_id">
                    @foreach($panchayats as $id => $entry)
                        <option value="{{ $id }}" {{ old('panchayat_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('panchayat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('panchayat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.panchayat_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="camp">{{ trans('cruds.member.fields.camp') }}</label>
                <input class="form-control {{ $errors->has('camp') ? 'is-invalid' : '' }}" type="text" name="camp" id="camp" value="{{ old('camp', '') }}">
                @if($errors->has('camp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('camp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.camp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_person_name">{{ trans('cruds.member.fields.contact_person_name') }}</label>
                <input class="form-control {{ $errors->has('contact_person_name') ? 'is-invalid' : '' }}" type="text" name="contact_person_name" id="contact_person_name" value="{{ old('contact_person_name', '') }}">
                @if($errors->has('contact_person_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_person_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.contact_person_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_person_number">{{ trans('cruds.member.fields.contact_person_number') }}</label>
                <input class="form-control {{ $errors->has('contact_person_number') ? 'is-invalid' : '' }}" type="text" name="contact_person_number" id="contact_person_number" value="{{ old('contact_person_number', '') }}">
                @if($errors->has('contact_person_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_person_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.contact_person_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.member.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Member::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="transaction">{{ trans('cruds.member.fields.transaction') }}</label>
                <input class="form-control {{ $errors->has('transaction') ? 'is-invalid' : '' }}" type="text" name="transaction" id="transaction" value="{{ old('transaction', '') }}" required>
                @if($errors->has('transaction'))
                    <div class="invalid-feedback">
                        {{ $errors->first('transaction') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.transaction_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="remarks">{{ trans('cruds.member.fields.remarks') }}</label>
                <input class="form-control {{ $errors->has('remarks') ? 'is-invalid' : '' }}" type="text" name="remarks" id="remarks" value="{{ old('remarks', '') }}">
                @if($errors->has('remarks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('remarks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.remarks_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection