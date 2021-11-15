<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS FIle Included -->
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
            <!-- Single Student Detail -->
           
            @extends('single_student_detail') 
        </div>
    </main>
    <!-- Main Section End Here -->
    
    
    <!-- JS File included -->
    @extends('jslink') 
</body>
</html>
