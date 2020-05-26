@extends('templates/admin-template')
@section('title', 'Update Product')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Update Product</h1>
    <div class="card shadow mb-4">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      {{-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div> --}}
      <div class="card-body">
        <form action="/admin/products/{{$selected_product->id}}/update" method="POST">
          {{csrf_field()}}
            <div class="form-group">
              <label for="product_name">Name</label>
              <input id="text" type="product_name" class="form-control" name="product_name"  placeholder="Product's Name" value="{{$selected_product->product_name}}"/>
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input id="price "type="text" class="form-control" name="price" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Product's Price" required value="{{$selected_product->price}}"/>
            </div>
            <div class="form-group">
              <label for="qty">Stock</label>
              <input id="qty"type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Product's Qty" required value="{{$selected_product->qty}}"/>
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control" id="category" name="category" required>
                <option  @if($selected_product->category=="Chairs") selected @endif>Chairs</option>
                <option  @if($selected_product->category=="Beds") selected @endif>Beds</option>
                <option  @if($selected_product->category=="Accesories") selected @endif>Accesories</option>
                <option  @if($selected_product->category=="Furniture") selected @endif>Furniture</option>
                <option  @if($selected_product->category=="Tables") selected @endif>Tables</option>
              </select>
            </div>
            <div class="form-group">
              <label for="color">Color</label>
              <input id="color" type="text" class="form-control" name="color"  placeholder="Product's Color" value="{{$selected_product->color}}"/>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name=description rows="3" placeholder="Product's Description">{{$selected_product->description}}</textarea>
            </div>
          <button type="submit" class="btn btn-primary">Update</button>
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
