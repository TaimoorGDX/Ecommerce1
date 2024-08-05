<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css') 
   <style>
    .div_center{
        text-align: center;
        padding-top: 40px;
    }
    .font_size{
        font-size: 40px;
        padding-bottom: 40px;
    }
    .text_color{
        color:black;
        padding-bottom:20px;
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
             <div class="div_center">
                 <h1 class="font_size">Add Product</h1>
                 <div>
                    <div>
                          <label>Product Title :</label>
                        <input  class="text_color" type="text" name="title" placeholder="Write a title">
                    </div>
                    <div>
                        <label>Product Description :</label>
                      <input class="text_color"  type="text" name="title" placeholder="Write a title">
                  </div>
                  <div>
                    <label>Product Price :</label>
                  <input  class="text_color" type="number" name="title" placeholder="Write a title">
                     </div>
                     <div>
                        <label>Product Quantity :</label>
                      <input  class="text_color" type="number" name="title" min="0"placeholder="Write a title">
                  </div>
                            <div>
                              <label>Product Category</label>
                              <section class="text_color">
                                <option>shirt</option>
                              </section>
                              
                          </div>
                          <div>
                            <label>Product Image Here :</label>
                            <input type="file" name="image"
                          </div>
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