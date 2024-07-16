<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      /* Importing fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

/* Reset and general styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  display: flex;
  min-height: 100vh;
  align-items: center;
  justify-content: center;
  background-color: #cccccc !important;
  font-family: "Poppins", sans-serif;
}

.wrapper {
  width: 100%;
  max-width: 1000px;
  background-color: #fff;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

header {
  text-align: center;
  font-size: 30px;
  font-weight: 600;
  background-color: #f7f7f7;
  padding: 64px;
  border-radius: 8px 8px 0 0;
  border-bottom: 1px solid #bfbfbf;
}

.header-container {
  display: flex;
  text-align: center;
  padding: 29px;
  font-size: 25px;
  font-weight: 600;
  background-color: #f7f7f7;
  color: #000000;
  border-radius: 8px 8px 0 0;
  border-bottom: 1px solid #bfbfbf;
}

footer {
  font-size: 16px;
  font-weight: 600;
  background-color: #ffffff;
  padding: 12px;
  border-top: 1px solid #bfbfbf;
}

.card-bor {
  border: 1px solid rgba(0, 0, 0, 12%);
  margin: 15px;
  padding: 0 15px 0 15px;
}

form {
  margin-top: 35px;
}

.dbl-field {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 0 15px 0 15px;
}

.field {
  width: calc(31.33% - 10px); /* Three columns on desktop */
  margin-bottom: 20px;
}

.field input,
.field textarea {
  width: 100%;
  height: 36px;
  font-size: 16px;
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #bfbfbf;
  outline: none;
}

.field input::placeholder,
.field textarea::placeholder {
  color: #bfbfbf;
}

.field input:focus,
.field textarea:focus {
  border: 2px solid #0d6efd;
}

.button-area {
  margin-top: 25px;
  padding: 28px;
  display: flex;
  justify-content: left;
  align-items: left;
  border-radius: 5px in !important;
}

.logo img {
  width: 60px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  margin-right: 10px;
  margin-left: 6px;
}

button {
  font-size: 18px;
  border: none;
  color: #fff;
  cursor: pointer;

  background: #0d6efd;
  padding: 8px 14px;
}

@media (max-width: 600px) {
  .field {
    width: 100%; /* One column on mobile */
  }
  .dbl-field {
    flex-direction: column;
  }
  header {
    font-size: 24px;
    padding: 40px;
  }
}

.logo {
  float: none;
  width: 59px;
  height: 59px;
  padding: 0;
  display: flex;
  flex-wrap: nowrap;
}

.custom-file {
  overflow: hidden;
  position: relative;
  cursor: pointer;
}

.custom-file-input {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
}
.custom-file-label {
  display: flex;
  align-items: center;
  justify-content: left;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.form-check {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-right: 100px; /* Change to column layout for checkboxes on mobile */
  margin-right: 0;
}

label {
  display: flex;
  align-items: center;
  padding-left: 20px;
  margin-bottom: 10px;
}

input[type="checkbox"] {
  margin-right: 10px;
}

.scholarship {
  padding: 20px;
}

.table-container {
  width: auto;
  margin: 25px;
  overflow-x: auto;
}

table {
  width: 95%;
  border: 1px solid black;
  border-collapse: separate;
  background-color: #fff;
  overflow: hidden;
  margin: 12px !important;
}

th,
td {
  padding: 8px;
  margin: 12px !important;
  text-align: center;
  border: 2px solid #000000 !important;
}

th {
  background-color: #ffffff;
  color: #fff;
  color: #000000;
  text-align: center !important;
}

tr {
  border: 1px solid black;
}

    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="header-container">
        <div class="logo">
          <img src="{{asset('logo.jpg')}}" alt="Logo" />
        </div>
        <h1>FATMA COLLEGE OF PROFESSIONAL SCIENCES SWAT</h1>
      </div>

      <form action="/edit" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-bor">
          <h2 style="padding-left: 15px; padding-top: 25px; text-align: center">
            ADMISSION FORM (Edit)
          </h2>
          <p style="padding-left: 15px; text-align: center">
            (NAME / FATHER NAMES SHOULD BE IN CAPITAL LETTERS)
          </p>
          <!-- --------------------------------------------------------- -->
          <div class="dbl-field">
              <input type="hidden" name="id" value="{{$member['id']}}"/>

            <div class="field" style="margin-right: 30px">
              <span>Student Name*</span>
              <input type="text" name="student_name" placeholder="Student Name" value="{{$member['student_name']}}" required/>
            </div>
            

            <div class="field" style="margin-right: 30px">
              <span>3 Passport Size photos*</span>
              <div class="custom-file">
                <input type="file" id="image" name="image" class="custom-file-input" value="{{$member['image']}}"/>
                <label class="custom-file-label" for="image">Browse</label>
              </div>
            </div>
            <div class="field">
              <span>Student CNIC/FORM B number*</span>
              <input
                type="text"
                name="student_cnic"
                style="background-color: #e9ecef"
                placeholder="99999-9999999-9"
                value="{{$member['student_cnic']}}"
                required
              />
            </div>
          </div>
          <!-- --------------------------------------------------------- -->

          <div class="dbl-field">
            <div class="field" style="margin-right: 30px">
              <span>Father Name*</span>
              <input type="text" name="father_name" placeholder="Father Name" value="{{$member['father_name']}}" required/>
            </div>
            <div class="field" style="margin-right: 30px">
              <span>Father CNIC number*</span>
              <input
                type="text"
                name="father_cnic"
                style="background-color: #e9ecef"
                placeholder="99999-9999999-9"
                value="{{$member['father_cnic']}}"
                required
              />
            </div>
            <div class="field">
              <span>Guardian’s Name*</span>
              <input type="text" name="guardian_name" placeholder="Guardian’s Name" value="{{$member['guardian_name']}}" required/>
            </div>
          </div>
          <!-- --------------------------------------------------------- -->

          <div class="dbl-field">
            <div class="field" style="margin-right: 30px">
              <span>Gender*</span>
              <input type="text" name="gender" placeholder="Gender" value="{{$member['gender']}}" required/>
            </div>
            <div class="field" style="margin-right: 30px">
              <span>D.O.B*</span>
              <input type="text" name="D_O_B" placeholder="yyyy-mm-dd" value="{{$member['D_O_B']}}" required/>
            </div>
            <div class="field">
              <span>B.Group*</span>
              <input type="text" name="B_Group" placeholder="B.Group" value="{{$member['B_Group']}}" required/>
            </div>
          </div>

          <!-- ---------------------------------------------------------- -->
          <div class="dbl-field">
            <div class="field" style="margin-right: 30px">
              <span>Nationality*</span>
              <input type="text" name="nationality" placeholder="Nationality" value="{{$member['nationality']}}" required/>
            </div>
            <div class="field" style="margin-right: 30px">
              <span>Religion*</span>
              <input type="text" name="religion" placeholder="Religion" value="{{$member['religion']}}" required/>
            </div>
            <div class="field">
              <span>Domicile*</span>
              <input type="text" name="domicile" placeholder="Domicile" value="{{$member['domicile']}}" required/>
            </div>
          </div>

          <!-- ---------------------------------------------------------- -->
          <div class="dbl-field">
            <div class="field" style="margin-right: 30px">
              <span>Mob No*</span>
              <input type="text" name="mob_number" placeholder="Mob No" value="{{$member['mob_number']}}" required/>
            </div>
            <div class="field" style="margin-right: 30px">
              <span>W. No*</span>
              <input type="text" name="w_number" placeholder="W. No" value="{{$member['w_number']}}" required/>
            </div>
            <div class="field">
              <span>F/G. Phone No*</span>
              <input type="text" name="fg_number" placeholder="F/G. Phone No" value="{{$member['fg_number']}}" required/>
            </div>
          </div>

          <!-- ---------------------------------------------------------- -->
          <div class="dbl-field">
            <div
              class="field"
              style="margin-right: 30px; width: calc(45% - 10px)"
            >
              <span>Father/Guardian’s Occupation*</span>
              <input type="text" name="father_occupation" placeholder="Father/Guardian’s Occupation" value="{{$member['father_occupation']}}" required/>
            </div>
            <div
              class="field"
              style="margin-right: 30px; width: calc(45% - 10px)"
            >
              <span>Father/Guardian’s Annual income*</span>
              <input
                type="text"
                name="father_income"
                placeholder="Father/Guardian’s Annual income"
                value="{{$member['father_income']}}"
                required
              />
            </div>
          </div>
          <!-- ---------------------------------------------------------- -->
          <p style="padding-left: 15px; padding-top: 35px">ADDRESS</p>
          <div class="dbl-field">
            <div
              class="field"
              style="margin-right: 30px; width: calc(100% - 10px)"
            >
              <span>Permanent Address*</span>
              <input type="text" name="permanet_address" placeholder="Permanent Address" value="{{$member['permanet_address']}}" required/>
            </div>
            <div
              class="field"
              style="margin-right: 30px; width: calc(100% - 10px)"
            >
              <span>Postal Address*</span>
              <input type="text" name="postal_address" placeholder="Postal Address" value="{{$member['postal_address']}}" required/>
            </div>
          </div>

          <!-- ---------------------------------------------------------- -->
          <div class="dbl-field">
            <div
              class="field"
              style="margin-right: 30px; width: calc(60% - 10px)"
            >
              <span>PROGRAM:*</span>
              <input type="text" name="program" placeholder="PROGRAM:" value="{{$member['program']}}" required/>
            </div>
            <div class="form-check">
              <label>
                <input type="radio" id="1" value="1" name="show_shift[]" {{$member->show_shift == "1" ? "checked" : ""}}/>
                Morning
              </label>
              <label>
                <input type="radio" id="2" value="2" name="show_shift[]" {{$member->show_shift == "2" ? "checked" : ""}}/>
                Evening
              </label>
            </div>
          </div>

          <!-- ---------------------------------------------------------- -->
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" value="1" type="checkbox" name="show_option[]" 
              {{ is_array(old('show_option', json_decode($member->show_option, true))) && in_array('1', old('show_option', json_decode($member->show_option, true))) ? 'checked' : '' }}>
              Open Merit
            </label>
            <label class="form-check-label">
              <input class="form-check-input" value="2" type="checkbox" name="show_option[]" 
              {{ is_array(old('show_option', json_decode($member->show_option, true))) && in_array('2', old('show_option', json_decode($member->show_option, true))) ? 'checked' : '' }}/>
              Scholarship
            </label>
            <label class="form-check-label">
              <input class="form-check-input" value="3" type="checkbox" name="show_option[]" 
              {{ is_array(old('show_option', json_decode($member->show_option, true))) && in_array('3', old('show_option', json_decode($member->show_option, true))) ? 'checked' : '' }}/>
              Qouta
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" value="4" type="checkbox" name="show_option[]" 
              {{ is_array(old('show_option', json_decode($member->show_option, true))) && in_array('4', old('show_option', json_decode($member->show_option, true))) ? 'checked' : '' }}/>
              Hafiz Quran
            </label>
            <label class="form-check-label">
              <input class="form-check-input" value="5" type="checkbox" name="show_option[]" 
              {{ is_array(old('show_option', json_decode($member->show_option, true))) && in_array('5', old('show_option', json_decode($member->show_option, true))) ? 'checked' : '' }}/>
              Disable
            </label>
            <label class="form-check-label">
              <input class="form-check-input" value="6" type="checkbox" name="show_option[]" 
              {{ is_array(old('show_option', json_decode($member->show_option, true))) && in_array('6', old('show_option', json_decode($member->show_option, true))) ? 'checked' : '' }}/>
              Orphan
            </label>
          </div>
          <!-- --------------------------------------------------------- -->
          <h2 style="padding-top: 60px; padding-left: 15px">
            ACADEMIC QUALIFICATION
          </h2>
          <p style="padding-left: 15px">SSC/O-Level</p>
          <div class="dbl-field">
            <div class="field" style="margin-right: 30px">
              <span>Name of Institution*</span>
              <input type="text" name="ssc_institution_name" placeholder="Name of Institution" value="{{$member['ssc_institution_name']}}" required/>
            </div>
            <div class="field" style="margin-right: 30px">
              <span>Roll No*</span>
              <input type="text" name="ssc_roll_no" placeholder="Roll No" value="{{$member['ssc_roll_no']}}" required/>
            </div>
            <div class="field">
              <span>Passing Year*</span>
              <input type="text" name="ssc_passing_year" placeholder="Passing Year" value="{{$member['ssc_passing_year']}}" required/>
            </div>

            <div class="field" style="margin-right: 30px">
              <span>Marks Obtained*</span>
              <input type="text" name="ssc_marks_obtained" placeholder="Marks Obtained" value="{{$member['ssc_marks_obtained']}}" required/>
            </div>
            <div class="field" style="margin-right: 302px">
              <span>% / Div.*</span>
              <input type="text" name="ssc_div" placeholder="% / Div." value="{{$member['ssc_div']}}" required/>
            </div>
          </div>
          <!-- --------------------------------------------------------- -->
          <p style="padding-left: 15px">Inter/HSSC/A-Level</p>
          <div class="dbl-field">
            <div class="field" style="margin-right: 30px">
              <span>Name of Institution*</span>
              <input type="text" name="institution_name" placeholder="Name of Institution" value="{{$member['institution_name']}}" required/>
            </div>
            <div class="field" style="margin-right: 30px">
              <span>Roll No*</span>
              <input type="text" name="roll_no" placeholder="Roll No" value="{{$member['roll_no']}}" required/>
            </div>
            <div class="field">
              <span>Passing Year*</span>
              <input type="text" name="passing_year" placeholder="Passing Year" value="{{$member['passing_year']}}" required/>
            </div>
            <div class="field" style="margin-right: 30px">
              <span>Marks Obtained*</span>
              <input type="text" name="marks_obtained" placeholder="Marks Obtained" value="{{$member['marks_obtained']}}" required/>
            </div>
            <div class="field" style="margin-right: 302px">
              <span>% / Div.*</span>
              <input type="text" name="div" placeholder="% / Div." value="{{$member['div']}}" required/>
            </div>
          </div>
          <!-- --------------------------------------------------------- -->
          <div class="button-area">
            <button type="submit">Update</button>
          </div>

          <!-- --------------------------------------------------------- -->
          <footer>
            <div class="container text-center">
              <div class="row">
                <div class="col-4">
                  info@fcpsswat.com
                </div>
                <div class="col-4"></div>
                <div class="col-4">www.fcpsswat.com</div>
              </div>
              <div class="row">
                <div class="col-8" style="text-align: left">
                  03343349977 0946-111001100 0946-755900
                </div>

                <div class="col-4">Chakdara Road Kabal Swat</div>
              </div>
            </div>
          </footer>

          <!-- --------------------------------------------------------- -->
        </div>
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
