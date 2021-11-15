<form class="row g-4" method="POST" action="{{route('std_create')}}">
    @csrf
    <div class="col-md-6">
        <label class="form-label">Registration No</label>
        <input type="text" name="std_reg_no" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Roll No</label>
        <input type="text" name="std_rol_no" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Class</label>
        <select class="form-select" name="std_class">
            <option selected>Select Class</option>
            <option value="1">Play Group</option>
            <option value="2">Nursery</option>
            <option value="3">Prep</option>
            <option value="4">One</option>
            <option value="5">Two</option>
            <option value="6">Three</option>
            <option value="7">Four</option>
            <option value="8">Five</option>
            <option value="9">Six</option>
            <option value="10">Seven</option>
            <option value="11">Eight</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label">Section</label>
        <select class="form-select" name="std_section">
            <option selected>Select Section</option>
            <option value="1">Section A</option>
            <option value="2">Section B</option>
        </select>
    </div>
    <!-- <div class="col-md-6 mt-3 mt-md-5">
        <label class="form-label">Student Image</label>
        <div class="admittion-img">
            <img src="assets/images/student-img/img_avatar.png" alt="Student Image">
        </div>
        <input type="file" class="form-control">
    </div> -->
    <div class="col-md-6">
        <div class="my-3">
            <label class="form-label">Student Name</label>
            <input type="text" name="std_name" class="form-control">
        </div>
        <div class="my-3">
            <label class="form-label">Student CNIC / B-Form Number</label>
            <input type="number" name="std_by_cnic" class="form-control">
        </div>
        <div class="row">
            <div class="col-md-6 my-3">
                <label class="form-label">Student Gender</label>
                <select class="form-select" name="std_gen">
                    <option selected>Select Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="3">Other</option>
                </select>
            </div>
            <!-- <div class="col-md-6 my-3">
                <label class="form-label">Student D.o.B</label>
                <input type="date" name="std_dob" class="form-control">
            </div> -->
        </div>
   <!--  </div>
    <div class="col-md-6">
        <label class="form-label">Religion</label>
        <select class="form-select" name="std_rligion">
            <option selected value="1">Muslim</option>
            <option value="2">Cristian</option>
        </select>
    </div> 
    <div class="col-md-6">
        <label class="form-label">Father Name</label>
        <input type="text" name="std_father_name" class="form-control">
    </div> 
    <div class="col-md-6">
        <label class="form-label">Father CNIC</label>
        <input type="number" name="std_father_cnic" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Father Mobile Number</label>
        <input type="number" name="std_father_m_no" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Mother Name</label>
        <input type="text" name="std_mother_mother" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Gardian</label>
        <select class="form-select" name="std_gardian">
            <option selected>Select Gardian</option>
            <option value="1">Father</option>
            <option value="2">Mother</option>
            <option value="3">Other</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label">Gardian Relationship</label>
        <input type="text" name="std_gardian_relation" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Gardian Name</label>
        <input type="text" name="std_gardian_name" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Gardian CNIC</label>
        <input type="number" name="std_gardian_cnic" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Gardian Mobile Number</label>
        <input type="number" name="std_gardian_m_no" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Provience</label>
        <select class="form-select" name="std_province">
            <option selected value="1">Punjab</option>
            <option value="2">Sindh</option>
            <option value="3">Blochistan</option>
            <option value="4">Khyber Pakhtunkhwa</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label">City</label>
        <input type="text" name="std_city" class="form-control" >
    </div>
    <div class="col-12">
        <label class="form-label">Postal Address</label>
        <input type="text" class="form-control" name="std_postal_address" placeholder="1234 Main St">
        <div class="mt-2">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Same as Permanent Address</label>
        </div>
    </div>
    <div class="col-12">
        <label class="form-label">Parmanent Address</label>
        <input type="text" class="form-control" name="std_permanent_address" placeholder="Apartment, studio, or floor">
    </div> -->
    <div class="col-12">
        <button type="submit" name="Add" value="submit" class="btn btn-primary">Submit Record</button>
    </div>
</form>