<!DOCTYPE html>
<html lang="en">
  <head>
    
  <base href="/public">

    @include('admin.css')
    

    <style>
      .div_center {
        text-align: center;
        padding-top: 20px;
      }
      .font_size {
        font-size: 20px;
        padding-bottom: 20px;
      }
      .text_color {
        color: black;
        padding-bottom: 20px;
      }
      .form_container {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
      }
      .form_container div {
        margin-bottom: 20px;
      }
      .form_container label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
      }
      .form_container input[type="text"],
      .form_container input[type="number"],
      .form_container input[type="file"],
      .form_container select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }
      .form_container input[type="file"] {
        padding: 3px;
      }
      .form_container button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      .form_container button:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

              @if(session()->has('message'))

              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                  {{session()->get('message')}}

              </div>

              @endif

          <div class="div_center">
            <h1 class="font_size">Edit Product</h1>
            <div class="form_container">
              <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
               @csrf

                <div>
                  <label for="title">Product Title :</label>
                  <input class="text_color" type="text" id="title" name="title"  required="" value="{{$product->title}}">
                </div>
                <div>
                  <label for="description">Product Description :</label>
                  <input class="text_color" type="text" id="description" name="description" required=""  value="{{$product->description}}">
                </div>
                <div>
                  <label for="price">Product Price :</label>
                  <input class="text_color" type="number" id="price" name="price" placeholder="Enter price" required=""  value="{{$product->price}}">
                </div>

                <div>
                  <label for="price">Discount Price :</label>
                  <input class="text_color" type="number" id="price" name="dis_price" placeholder="Enter discount price"  value="{{$product->discount_price}}">
                </div>

                <div>
                  <label for="quantity">Product Quantity :</label>
                  <input class="text_color" type="number" id="quantity" name="quantity" min="0" placeholder="Write a quantity" required=""  value="{{$product->quantity}}">
                </div>
                <div>
                  <label for="category">Product Category :</label>
                  <select class="text_color" id="category" name="category" required="">
                    <option  value="{{$product->category}}" selected="">{{$product->category}}</option>
                    @foreach($category as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach
                    
                  </select>
                </div>

                <div>
                  <label for="image">Current Product Image :</label>
                  
                  <img width="100" height="100" src="/product/{{$product->image}}">

                </div>

                <div>
                  <label for="image">Change Product Image :</label>
                  <input type="file" name="image" >
                </div>

                <div>
                  <button type="submit" value="Add Product">Update Product</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
