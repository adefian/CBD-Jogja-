 @extends('admin.layout.master')

 @section('title')
 Dashboard
 @endsection

 @section('content')
 <div class="content">
     <!-- Animated -->
     <div class="animated fadeIn">

         <!--  Traffic  -->
         <div class="row">
             <div class="col-lg-12">
                 <div class="card" style="height: 26rem;">
                     <div class="card-body text-center">
                         <!-- <h3>Selamat Datang </h3> -->
                         <img src="{{asset('public/assets/admin/images/logobpcb.png')}}" style="width: 340px; height: auto;" alt="">
                         <h3 style="color: green;"><b>BALAI PELESTARIAN CAGAR BUDAYA DAERAH ISTIMEWA YOGYAKARTA</b></h3>
                     </div>
                     <div>

                     </div>

                 </div>
             </div><!-- /# column -->
         </div>
         <!--  /Traffic -->
         <div class="clearfix"></div>
         <!-- Orders -->

         <!-- /.orders -->
         <!-- To Do and Live Chat -->

         <!-- /To Do and Live Chat -->
         <!-- Calender Chart Weather  -->

         <!-- /#event-modal -->
         <!-- Modal - Calendar - Add Category -->
         <div class="modal fade none-border" id="add-category">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         <h4 class="modal-title"><strong>Add a category </strong></h4>
                     </div>
                     <div class="modal-body">
                         <form>
                             <div class="row">
                                 <div class="col-md-6">
                                     <label class="control-label">Category Name</label>
                                     <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                                 </div>
                                 <div class="col-md-6">
                                     <label class="control-label">Choose Category Color</label>
                                     <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                         <option value="success">Success</option>
                                         <option value="danger">Danger</option>
                                         <option value="info">Info</option>
                                         <option value="pink">Pink</option>
                                         <option value="primary">Primary</option>
                                         <option value="warning">Warning</option>
                                     </select>
                                 </div>
                             </div>
                         </form>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                     </div>
                 </div>
             </div>
         </div>
         <!-- /#add-category -->
     </div>
     <!-- .animated -->
 </div>
 @endsection('content')