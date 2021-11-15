<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS FIle Included -->
    <!-- include_once 'link.php' -->
    @extends('link') 
</head>
<body>

    <!-- Navbar included -->
  
    @extends('navbar') 

    <!-- Sidebar included -->
    
    @extends('sidebar') 


    <!-- Main Section Start Here -->
    <main>
        <div class="container">
            <h1>Add Student</h1>

            <section>
                <!-- Student Admittion form Added -->
               
    @extends('add_student_form') 

            </section>
        </div>
    </main>
    <!-- Main Section End Here -->
    
    
    <!-- JS File included -->

    @extends('jslink') 

</body>
</html>
