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
            <h1>Search Student</h1>

            <section>
              <form action="" method="POST">
                @csrf
                <select name="std_gen" id="">
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>
                <input type="submit" name="submit" value="submit">
              </form>
               <table>
                 <tr>
                   <th>id</th>
                   <th>Name</th>
                   <th>Roll no</th>
                   <th>Class</th>
                   <th>Gender</th>
                 </tr>
                 <!-- $class_student->std_name -->
                 @foreach($class_student as $keyup=>$students)
                 <tr>
                   <td>{{$students->id}}</td>
                   <td>{{$students->std_name}}</td>
                   <td>{{$students->std_rol_no}}</td>
                   <td>{{$students->class_name}}</td>
                   <td>{{$students->gen_name}}</td>
                 </tr>
                 @endforeach
               </table>

            </section>

        </div>
        
       <!--  -->
      
    </main>
    <!-- Main Section End Here -->
    
    
    <!-- JS File included -->
   @extends('jslink') 
</body>
</html>
