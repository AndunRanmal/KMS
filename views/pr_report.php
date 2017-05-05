<?php
include("../include/nav.php");
include("../include/stock_keeper.php");

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h3 style="text-align: center;font-weight: bold;">Purchase Requisition Report </h3>
                     <button class="btn btn-primary fa fa-download" style="float: right;padding-bottom: 12px;">Download</button>
                     <button class="btn btn-primary  fa fa-print" style="float: right; padding-right: 29px;padding-left: 29px;padding-bottom: 12px;margin-right: 5px;">Print</button>
                     <button class="btn btn-primary  fa fa-print" style="float: right; padding-right: 29px;padding-left: 29px;padding-bottom: 12px;margin-right: 5px;" onclick="location.href='pdf.html'">Preview</button>
                    </div>

                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->
                 <div>
                                  <form style="text-align: center;">
                                     <table class="table table-striped" id="tableid">
                                       <thead>
                                        <tr>
                                          <td>Item Code</td>
                                          <td>Description</td>
                                          <td>Requested Date</td>
                                          <td>Quantity</td>
                                          <td>Unit Price</td>
                                          <td>Vendor</td>
                                          <td>Remarks</td>
                                        </tr>   
                                       </thead>
                                       <tbody>
                                         <tr>
                                           <td><input type="text" name="Item_code" class="form-control"></td>
                                           <td><input type="text" name="Description" class="form-control"></td>
                                           <td><input type="Date" name="Req_date" class="form-control"></td>
                                           <td><input type="number" name="Quantity" min="1" class="form-control"></td>
                                           <td><input type="number" name="Unit" step="0.01" min="0.01" class="form-control"></td>
                                           <td><select class="form-control">
                                             <option>Vendor1</option>
                                             <option>Vendor2</option>
                                             <option>Vendor3</option>
                                             <option>Vendor4</option>
                                           </select></td>
                                           <td><input type="text" name="Remarks" class="form-control"></td>
                                         </tr>
                                         <tr>
                                           <td><input type="text" name="Item_code" class="form-control"></td>
                                           <td><input type="text" name="Description" class="form-control"></td>
                                           <td><input type="Date" name="Req_date" class="form-control"></td>
                                           <td><input type="number" name="Quantity" min="1" class="form-control"></td>
                                           <td><input type="number" name="Unit" step="0.01" min="0.01" class="form-control"></td>
                                           <td><select class="form-control">
                                             <option>Vendor1</option>
                                             <option>Vendor2</option>
                                             <option>Vendor3</option>
                                             <option>Vendor4</option>
                                           </select></td>
                                           <td><input type="text" name="Remarks" class="form-control"></td>
                                         </tr>
                                         <tr>
                                           <td><input type="text" name="Item_code" class="form-control"></td>
                                           <td><input type="text" name="Description" class="form-control"></td>
                                           <td><input type="Date" name="Req_date" class="form-control"></td>
                                           <td><input type="number" name="Quantity" min="1" class="form-control"></td>
                                           <td><input type="number" name="Unit" step="0.01" min="0.01" class="form-control"></td>
                                           <td><select class="form-control" name="Vendor">
                                             <option>Vendor1</option>
                                             <option>Vendor2</option>
                                             <option>Vendor3</option>
                                             <option>Vendor4</option>
                                           </select></td>
                                           <td><input type="text" name="Remarks" class="form-control"></td>
                                         </tr>
                                       </tbody>
                                      </table>
                                      <input type="submit" name="submit" value="Forward"> 
                                     </form>
                                </div>           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    <!-- &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
                </div> -->
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
