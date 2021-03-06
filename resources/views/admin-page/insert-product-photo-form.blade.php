@extends('templates/admin-template')
@section('title', 'Create Product\'s Photo')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Create Product's Photo</h1>
    <div class="card shadow mb-4">
      {{-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div> --}}
      @if(session('success'))
        <div class="alert alert-success" role="alert">
          {{session('success')}}
        </div>
      @endif

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      
      <div class="card-body">
        <form action="/admin/insert-product-photo" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="form-group">
              <label for="product_name">Product Name</label>
              <select class="form-control" id="product_name" name="product_name" required>
                @foreach($products as $product)
                  <option value="{{$product->id}}">{{$product->product_name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="description">Photo</label>
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="file" name="file[]" accept="image/jpg, image/jpeg, image/png" multiple required>
                  <label class="custom-file-label" for="file">Choose Photo (.jpg/.jpeg/.png)</label>
                </div>
              </div>
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection

<!-- Page level plugins-->
<!-- <script src="{{ asset('/assets/admin-page/vendor/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin-page/vendor/datatables/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script> -->

<!-- Page level custom scripts-->
<!-- <script src="{{ asset('assets/admin-page/js/demo/datatables-demo.js') }}"></script> -->
