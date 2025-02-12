<section class=" mt-6 vh-100" style="background-color: #eee;">
  <div class="container h-100 mt-3">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="mt-3 card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
               <form action="" method="post">
                <?php

                use app\Core\Form;

                $form =Form::begin('','post'); ?>
                <div class="row">
                  <div class="col">
                  <?php
                  echo  $form->field($model,'firstname');?>
                  </div>
                 <div class="col">

                   <?php
                  echo  $form->field($model,'lastname'); 
                  ?>
                  </div>
                </div>
                <?php
                echo  $form->field($model,'email');
                echo  $form->field($model,'password')->typePassword();  
                echo  $form->field($model,'confirm_password')->typePassword();
                echo  $form->field($model,'photo');
                  ?>
              <div class="d-flex justify-content-center mx-4 mt-3  mb-3 mb-lg-4">
                    <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>