
 @extends('./layout_master')
{{-- section id is yeild name  --}}
@section('admin')
 <div class="content-page center">
    <div class="content">
        <!-- Start Content-->
     <div class="container-fluid">
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="header-title">Edit Purchase</h3>
                <form method="POST"  id="myForm" name="myForm" class="parsley-examples" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6" >
                    <div class="mb-3">
                        <label for="purchase_date" class="form-label">Purchase Date<span class="text-danger">*</span></label>
                        <input type="date" name="purchase_date"  value="{{$purchase->purchase_date}}" parsley-trigger="change"  placeholder="Enter purchase date" class="form-control" id="purchase_date" />
                        @error('purchase_date')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label for="product_quantity" class="form-label">Product Quantity<span class="text-danger">*</span></label>
                        <input type="text" name="product_quantity"  value="{{$purchase->product_quantity}}" parsley-trigger="change"  placeholder="Enter quantity" class="form-control" id="product_quantity" />
                        @error('product_quantity')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>

                    <div class="mb-3">
                        <label for="purchase_price" class="form-label">Squ code<span class="text-danger">*</span></label>
                        <input type="text" name="purchase_price"  value="{{$purchase->purchase_price}}" parsley-trigger="change" placeholder="Enter price" class="form-control" id="purchase_price" />
                        @error('squ_code')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>

                    {{-- supplier select --}}
                       <div class="mb-3">
                    <h5>Supplier Select <span class="text-danger">*</span></h5>
                    <div class="controls">
                         <select name="supplier_id" class="form-control"  >
                            <option >{{ $purchase->supplier->name }}</option>
                     @foreach($suppliers as $supplier)
                         <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                             @endforeach
                         </select>
                          @error('supplier_id')
                             <span class="text-danger">{{ $message }}</span>
                     @enderror
                     </div>
                    </div>


                    {{-- product select--}}
                    <div class="mb-3">
                        <h5>Product Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                             <select name="product_id" class="form-control"  >
                        <option value="{{ $purchase->product->id }}">{{ $purchase->product->name }}</option>
                         @foreach($products as $product)
                             <option value="{{ $product->id }}">{{ $product->name }}</option>
                                 @endforeach
                             </select>
                              @error('purchase_id')
                                 <span class="text-danger">{{ $message }}</span>
                         @enderror
                         </div>
                        </div>







                    </div>




                    <div class="col-lg-6" >

                    <div class="mb-3">
                        <label for="purchase_unit" class="form-label">Product Count<span class="text-danger">*</span></label>
                        <input type="text" name="purchase_unit"  value="{{$purchase->purchase_unit}}" parsley-trigger="change"  placeholder="Enter unit" class="form-control" id="purchase_unit" />
                        @error('count')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label for="purchase_note" class="form-label">Product Note<span class="text-danger">*</span></label>
                        <input type="text" name="purchase_note"  value="{{$purchase->purchase_note}}" parsley-trigger="change"  placeholder="Enter notes" class="form-control" id="purchase_note" />
                        @error('purchase_note')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                    </div>
                     <div class=" text-center p-4">
                        <button class="btn btn-primary waves-effect waves-light"  id="submit" type="submit">ProductSubmit</button>
                        <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                    </div>
                    </div>
                </form>
            </div>
        </div> <!-- end card -->
    </div>
    <!-- end col -->
 </div>
    </div>
    </div>
 </div>
@endsection




