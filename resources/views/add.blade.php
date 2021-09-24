@extends('layouts.app')

@section('content')

<section class="ud-login">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-login-wrapper">
              <div class="ud-login-logo">
               <h3>Add tip</h3>
              </div>
              <form class="ud-login-form" method="POST" action="{{ route('tip.store') }}">
            @csrf

            <div class="ud-form-group">
              <select name="type" id="type" class="form-select">
                <option value="">Select vehicle</option>
                <option value="Car">Car</option>
                <option value="Motocycle">Motocycle</option>
                <option value="Truck">Truck</option>
              </select>
            </div>

            <div class="ud-form-group">
              <input type="text" name="brand" placeholder="Brand" />
            </div>

            <div class="ud-form-group">
              <input type="text" name="modele" placeholder="Modele" />
            </div>

            <div class="ud-form-group">
              <input type="text" name="version" placeholder="Version" />
            </div>

            <div class="ud-form-group">
              <textarea class="form-control" name="content" rows="3" >
              </textarea>
            </div>


            <div class="ud-form-group">
                  <button type="submit"  name="add_tip" class="ud-main-btn w-100">Create</button>
                </div>


          </form>
            </div>
          </div>
        </div>
      </div>

@endsection