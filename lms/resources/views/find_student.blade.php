
    <!-- CSS FIle Included -->
   @extends('link') 


    <!-- Navbar included -->
    @extends('navbar')
    <!-- Sidebar included -->
    @extends('sidebar') 

    <!-- Main Section Start Here -->
    <main>
        <div class="container">
            <h1>Search Student</h1>
<style>
    .classes_box{
        /*background: blue;*/
        color: white;
 }

    .classes_box .row .col-md-2{
        background: #263544;
        margin: 10px;
        height: 100px;
        display: flex;justify-content: center;align-items: center;
        font-weight: bold;

    }
    .classes_box .row .col-md-2 a{
        color: white;
    }
</style>
            <section>
               <div class="container classes_box">
                   <div class="row">
                    @foreach($student_classses as $key=>$classes)
                       <div class="col-md-2"><a href="{{ url('show_class_student', $classes->id) }}" class="edit" ><i class="material-icons"  title="Edit">&#xE254;</i>{{$classes->class_name}}</a></div>
                       
                       @endforeach
                      

                   </div>
               </div>

            </section>

        </div>
        
       <!--  -->
      
    </main>
    <!-- Main Section End Here -->
    
    
    <!-- JS File included -->
   @extends('jslink') 

