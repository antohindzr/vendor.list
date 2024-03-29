@extends('layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('vendor.update', $vendor->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="vendorType">Name</label>
              <input type="text" class="form-control" name="vendorType" value="{{ $vendor->vendorType }}"/>
          </div>
          <div class="form-group">
              <label for="maskSN">Email</label>
              <input type="text" class="form-control" name="maskSN" value="{{ $vendor->maskSN }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Entry</button>
      </form>
  </div>
</div>
@endsection